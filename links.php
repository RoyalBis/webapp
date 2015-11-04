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

</head>
<body>
  <header align="center">
    <div id="logo-container">
      <img class="logo" src="images/PirateBadge_100px.png"/>
      <h1 class="logo">Welcome to Travel Experts</h1>
    </div>
    <nav>
      <a href="index.php">
        <div>Home</div>
      </a>
      <a href="contact.php">
        <div>Contact Us</Div>
      </a>
      <a href="register.php">
        <div>Registration</div>
      </a>
      <a id="current" href="links.php">
        <div>Links</div>
      </a>
    </nav>
  </header>
  <main>
    <table>
    <?php
      for ($i=1; $i<= 6 ; $i++) {
        print ($link_row = "<tr><td>$i</td><td><a href='page$i.php'>page$i</a></td></tr>");
      }
     ?>
   </table>
  </main>
  <footer>
    <div class="logo">
      <img class="logo" src="images/PirateBadge_100px.png"/>
      <p>Copyright &copy by Travel Experts</p>
    </div>
  </footer>
</body>
</html>
