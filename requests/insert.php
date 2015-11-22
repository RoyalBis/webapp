<?php
  // include ("processform.php");
  // include ("../functions.php");
  // function addFormSubmit($myRequest) {
  //   $msg = array();
  //   $msg["message"] = "";
  //   $mySqlArr = array();
  //   print_r($myRequest);
  //   $myFields = testInput($myRequest);
  //
  //   foreach ($myRequest as $key => $val) {
  //     if (!$val) {
  //       $msg["type"] = 0;
  //       $msg["message"] .= "Please enter a value for $key.<br />";
  //     } else {
  //
  //     }
  //   }
  //
  //   if ( !($msg["type"] === 0) ) {
  //     $msg["type"] = 1;
  //     $msg["message"] .= "Form Submitted!";
  //     // $sqlMsg = sql_addrow("travelexperts", "agents", $mySqlArr);
  //   }
  //   return $msg;
  // }
  //
  // function cleanValues($data)  {
  //     $data = trim($data);
  //     $data = stripslashes($data);
  //     $data = htmlspecialchars($data);
  //     return $data;
  // }
  //
  // function testInput($myRequest) {
  //     foreach ($myRequest as $key => $val) {
  //         switch ($key) {
  //           case "table":
  //             $data = cleanValues($val);
  //             $sqlFieldTgts = sql_get_fields("travelexperts", $data);
  //             print_r ($sqlFieldTgts);
  //             break;
  //           case "type":
  //             break;
  //           default:
  //             break;
  //         }
  //     }
  // }
?>
