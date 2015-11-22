<?php

/*---------------------------------------------------------------------------
PROCEDURAL FUNCTIONS
/*-------------------------------------------------------------------------*/
    function sql_query_e($mydb,$query) {
      $result = mysqli_query($mydb, $query);
      return $result;
    }

    function sql_addrow($db_name, $table_name, $sql_row_arr) {
      $mydb = sql_connect($db_name);
      $insert_q = "INSERT ";
      $into_str = "INTO `$table_name` (";
      $values_str = "VALUES (";
      while (list($key, $val) = each($sql_row_arr)) {
          $into_str .= "`$key`,";
          if ($val === "") {
            $values_str .= "NULL,";
          } else {
            $values_str .= "'$val',";
          }
      }
      $into_str = rtrim($into_str, ",");
      $into_str .= ") ";
      $values_str = rtrim($values_str, ",");
      $values_str .= ")";
      $insert_q .= $into_str . $values_str;
      $sqlResult = sql_query_e($mydb,$insert_q);
      if ($sqlResult) {
          $msg["type"] = 1;
          $msg["userMsg"] = "New entry added<br/>";
      } else {
          $msg["type"] = 0;
          $msg["userMsg"] = "Could not complete, contact IT<br/>";
      }
      return $msg;
    }

    //This function returns the field names in a database table
    function sql_get_fields($db_name, $table_name) {
      $mydb = sql_connect($db_name);
      $select_q = "SELECT * FROM `$table_name` LIMIT 1";
      $sqlResult = sql_query_e($mydb,$select_q);
      $fieldNames = array();
      while( $fieldInfo = mysqli_fetch_field($sqlResult) ) {
        $fieldNames[] = $fieldInfo->name;
      }
      return $fieldNames;
    }

    function sql_connect($db_name) {
      $mydb = @mysqli_connect("localhost","root","",$db_name); //@ symbol supress the internal error messaging

      if (!$mydb) {
        print ("Error: " . mysqli_connect_errno() . "<br />");
        print ("Error Message: " . mysqli_connect_error() . "<br />");
        exit();
      }
      print ("Connected!");
      return $mydb;
    }

/*---------------------------------------------------------------------------
OBJECT-ORIENTED FUNCTIONS
/*-------------------------------------------------------------------------*/

    function sqlAddRow($db_name, $table_name ,$sql_row_arr) {

    }

    function sqlConnect($db_name) {
      $mysqli = @new mysqli("localhost","root","",$db_name);
      if (!$mysqli->connect_error) {
        print ("Error: " . $mysqli->connect_errno() . "<br />");
        print ("Error Message: " . $mysqli->connect_error() . "<br />");
        exit();
      }
      print ("Connected!");
      return $mysqli;
    }
 ?>
