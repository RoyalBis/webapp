var path = window.location.pathname;
var page = path.split("/").pop();
switch(page) {
  case "index.php":
    setCurrent("navHome");
    break;
  case "contact.php":
    setCurrent("navContact");
    break;
  case "register.php":
    setCurrent("navReg");
    break;
  case "links.php":
    setCurrent("navLinks");
    break;
}

function setCurrent(Id) {
  var parents = document.getElementById(Id);
  parents.setAttribute("class", "current");
}
