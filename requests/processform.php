<?php
    include("../functions.php");

    function addFormSubmit($myRequest) {
      $msg = array();
      $msg["userMsg"] = "";
      $msg["type"] = -1;
      // print_r($myRequest);
      $myFields = testInput($myRequest);
      $mySqlArr = cleanArray($myRequest,$myFields);

      foreach ($mySqlArr as $key => $val) {
        if (!$val) {
          $msg["type"] = 0;
          $msg["userMsg"] .= "Please enter a value for $key<br />";
        }
      }

      if ( !($msg["type"] === 0) ) {
        $msg["type"] = 1;
        $msg["userMsg"] .= "Form Submitted! <br/>";
        $msg["userMsg"] .= sql_addrow("travelexperts", "agents", $mySqlArr);
      }
      return $msg;
    }

    function cleanValues($data)  {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function testInput($myRequest) {
        foreach ($myRequest as $key => $val) {
            switch ($key) {
              case "table":
                $data = cleanValues($val);
                $sqlFieldTgts = sql_get_fields("travelexperts", $data);
                return $sqlFieldTgts;
                break;
              case "type":
                break;
              default:
                break;
            }
        }
    }

    function cleanArray($myRequest,$myFields) {
      $myCleanArray = array();
      foreach($myRequest as $key => $val ) {
          foreach($myFields as $fKey => $fVal) {
            if ($key === $fVal) {
                $data = cleanValues($val);
                $myCleanArray[$key] = $data;
            }
          }
      }
      return $myCleanArray;
    }

 ?>
