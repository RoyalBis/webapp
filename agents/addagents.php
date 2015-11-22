<?php
    include ("../requests/processform.php");

    $alerts = "";
    if (  $_SERVER['REQUEST_METHOD'] == 'POST' ) {
        $msg = addFormSubmit($_REQUEST);
        if ( $msg["type"] === 1 ) {
          $alerts = '<div class="alert alert-success" role="alert">' . $msg["userMsg"] . '</div>';
        } elseif ( $msg["type"] === 0 ) {
          $alerts = '<div class="alert alert-danger" role="alert">' . $msg["userMsg"] . '</div>';
        } else {
          $alerts = "";
        }
    }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/bootstrap-theme.css"/>
    <link rel="stylesheet" href="css/font-awesome.css"/>
    <meta charset="utf-8">
    <title>Add Agents</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  </head>
  <body>
    <div class="row">
      <div class="col-xs-12">
        <div class="jumbotron">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-1 col-sm-3">
      </div> <!--div leftbumper"-->
      <div class="col-xs-10 col-sm-6">
        <!--FORM ALERTS HERE ================================================-->
          <?php print($alerts) ?>
        <!--=================================================================-->

        <!--ADD AGENT FORM===================================================-->
        <form class="form-horizontal" action="addagents.php" method="post">
          <div class="form-group">
            <label for="agtFirstName" class="control-label">First Name:</label>
              <input type="text" class="form-control" id="agtFirstName" placeholder="E.G. John" name="AgtFirstName"/>
          </div>
          <div class="form-group">
            <label for="agtInitial" class="control-label">Middle Name:</label>
              <input type="text" class="form-control" id="agtInitial" placeholder="E.G. H" name="AgtMiddleInitial"/>
          </div>
          <div class="form-group">
            <label for="agtLastName" class="control-label">Last Name:</label>
              <input type="text" class="form-control" id="agtLastName" placeholder="E.G. Smith" name="AgtLastName"/>
          </div>
          <div class="form-group">
            <label for="agtPhone" class="control-label">Business Phone:</label>
              <input type="text" class="form-control" id="agtPhone" placeholder="E.G. (123) 444-5678" name="AgtBusPhone"/>
          </div>
          <div class="form-group">
            <label for="inputEmail" class="control-label">Email:</label>
              <input type="email" class="form-control" id="inputEmail" placeholder="E.G. John.Smith@email.com" name="AgtEmail"/>
          </div>
          <div class="form-group">
            <label for="agtPosition" class="control-label">Agent Position:</label>
              <input type="text" list="agtPositions" class="form-control" id="agtPosition" placeholder="E.G. _ _ _" name="AgtPosition"/>
          </div>
          <div class="form-group">
            <label for="agencyId" class="control-label">Agency ID:</label>
              <input type="text" list="agencyIds" class="form-control" id="agencyId" placeholder="E.G. 1" name="AgencyId"/>
          </div>
          <div>
            <input type="hidden" name="table" value="agents"/>
            <input type="hidden" name="type" value="add"/>
          </div>
          <div class="form-group" align="right">
            <button class="btn btn-default" type="reset">Reset</button>
            <button class="btn btn-default" type="submit">Submit</button>
          </div>
        </form>
      </div> <!--div form fields-->
      <div class="col-xs-1 col-sm-3">
      </div> <!--div rightbumper"-->
    </div> <!--div class="row"-->
    <!--<<<<<<<<<<<<<<BOOTSTAP ELEMENTS>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->

    <!--<<<<<<<<<<<<<<BOOTSTAP ELEMENTS>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->

    <script src="js/bootstrap.js" type="text/javascript"></script>
  </body>
</html>
