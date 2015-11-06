<?php

/*---------------------------------------------------------------------------
PROCEDURAL FUNCTIONS
/*-------------------------------------------------------------------------*/
    function sql_query_e($mydb,$query) {
      $result = mysqli_query($mydb, $query);
      ($result) ? print("Insert Successful") : print("Insert Failed" . mysqli_connect_error());
      mysqli_close($mydb);
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
      // sql_query_e($mydb,$insert_q); //I don't need this right now but probably later
      //The below two lines may move to the sql_query_e function
      sql_query_e($mydb,$insert_q);
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
