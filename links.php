<?php
  //Variables declaration and string generation

  //Build the page link table, commented out!
  // $link_table = "<table>";
  // for ($i=1; $i<= 6 ; $i++) {
  //   $url = "page$i.php";
  //   $page = "page$i";
  //   $html_format = '<tr><td>%s</td><td><a href=%s>%s</a></td></tr>';
  //   $link_row = sprintf($html_format,$i, $url, $page);
  //   $link_table .= $link_row;
  //   $link_row = "<tr><td>$i</td><td><a href='page$i.php'>page$i</a></td></tr>";
  // }
  // $link_table .= "</table>";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>

  <title>Travel Experts Links</title>
  <meta charet="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/reset.css"/>
  <link rel="stylesheet" href="css/stylesheet.css"/>
  <link rel="stylesheet" href="css/linksstyle.css"/>

  <?php
    include('variables.php');
   ?>

</head>
<body>
  <!-- START OF THE HEADER-->
		<?php
			include('header.php');
		 ?>
	<!-- END OF THE HEADER-->
  <!-- START OF THE NAVBAR-->
  <?php
		include('menu.php');
	 ?>
  <!-- END OF THE NAVBAR-->
  <main>
    <table>
      <!-- PHP code to build a table of the links from the variables page-->
      <?php
      $i = 0;
      while (list($key, $val) = each($links)) {
        $i++;
        print ("<tr><td>$i</td><td><a href='$key'>$val</a></td></tr>");
      }
     ?>
   </table>
  </main>

  <!-- START OF THE FOOTER -->
  <?php
    include('footer.php');
   ?>
  <!-- END OF THE FOOTER -->

</body>
</html>
