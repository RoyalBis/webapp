<?php
  include ("../functions.php");
  $requestMsg = "";
  print_r($_REQUEST);
  if ($_REQUEST === "") {
    $reqMsg = "Submitted was blank, all fields must be filed out.";
    header("Location: ../agents/addagents.php");
  } else {
    foreach ($_REQUEST as $key => $val) {
      if (!$val) {
        $requestMsg .= "Please add a value for $key<br />";
        header("Location: ../agents/addagents.php");
      }
    }
  }
  if ( isset($_REQUEST["submit"]) ) {
    $requestMsg .= "Form Submitted!";
    header("Location: ../agents/addagents.php?status=1");
  }
 ?>
