<?php
  include('functions.php');

  $test_agents = array();
  $test_agents["AgentId"] = "";
  $test_agents["AgtFirstName"] = "Steve";
  $test_agents["AgtMiddleInitial"] = "";
  $test_agents["AgtLastName"] = "BOB";
  $test_agents["AgtBusPhone"] = "403-444-4444";
  $test_agents["AgtEmail"] = "";
  $test_agents["AgtPosition"] = "";
  $test_agents["AgencyId"] = "";

  $db_name = "travelexperts";
  $table_name = "agents";

?>
<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <?php
      sql_addrow($db_name, $table_name ,$test_agents);
    ?>
  </body>
</html>

<?php


  //TEST--------------------------------------------------------------------------------------------------
  // $dbh = @mysqli_connect("localhost", "root", "", "travelexperts");
  // if (!$dbh)
  // {
  //   print("Error: ". mysqli_connect_errno() . "<br />");
  //   print("Error message: ". mysqli_connect_error() . "<br />");
  //   exit();
  // }
  // print("got it!");
  // print_r($dbh);
  // $agency = 1;
  // $AgtFirstName = "Sam";
  // $AgtLastName = "Smith";
  // $AgtBusPhone = "403-444-4444";
  // //$result = mysqli_query($dbh, "SELECT * FROM agents");
  // //$result = mysqli_query($dbh, "SELECT AgtFirstName, AgtLastName, AgtBusPhone FROM agents");
  // $sql = "INSERT INTO `agents` (`AgentId`, `AgtFirstName`, `AgtMiddleInitial`, `AgtLastName`, `AgtBusPhone`, `AgtEmail`, `AgtPosition`, `AgencyId`) VALUES (NULL, '$AgtFirstName', NULL, '$AgtLastName', '$AgtBusPhone', NULL, NULL, NULL)";
  // $result = mysqli_query($dbh, $sql);
  // ($result) ? print("1 row was inserted") : print("0 rows inserted");
  // mysqli_close($dbh);
?>
