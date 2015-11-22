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
