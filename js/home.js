/*******************************************************************************
Title: 			 Travel Experts Web App - Home.JS
Author: 		 Royal Bissell
Date: 			 2015-11-02
Description: JavaScript for the Home Page. Handles the Package object creation
             and the display the package images, descriptions, names, and
             webpage link.
*******************************************************************************/

var vacNames =  [
                  "Vacation Package #1",
                  "Vacation Package #2",
                  "Vacation Package #3",
                  "Vacation Package #4"
                ];

var	vacSrcs  = 	[
                  "images/vacImage1.jpg",
                  "images/vacImage2.jpg",
                  "images/vacImage3.jpg",
                  "images/vacImage4.jpg"
                ];

var vacAlts	 =	[
                  "Vacation Package #1",
                  "Vacation Package #2",
                  "Vacation Package #3",
                  "Vacation Package #4"
                ];

var vacDescs = 	[
                  "You get to go to Hong Kong for 14 days!",
                  "I am Vacation Package 2!",
                  "I am Vacation Package 3!",
                  "I am Vacation Package 4!",
                ];

var vacLinks =   [
                  "http://www.lonelyplanet.com/china/hong-kong",
                  "http://www.lonelyplanet.com/italy/venice",
                  "http://www.lonelyplanet.com/france/paris",
                  "http://www.lonelyplanet.com/peru/machu-picchu"
                ];

var packages = [];

//Package Constructor
function Package(name, src, alt, desc, vacLink) {
  this.name  = name;
  this.src   = src;
  this.alt   = alt;
  this.desc  = desc;
  this.vacLink = vacLink;
}

//object show/hide code
function loadPackages() {

  for (i=0;i<vacNames.length;i++) {
    packages.push(new Package(vacNames[i],vacSrcs[i],vacAlts[i],vacDescs[i],vacLinks[i]));
  }

  for (i=0;i<packages.length;i++) {
    var div = document.createElement("div");
    div.setAttribute("id", packages[i].name);
    div.setAttribute("onmouseover", "showPkgDesc(this)");
    div.setAttribute("onmouseout", "hidePkgDesc(this)");
    var img = document.createElement("img");
    img.setAttribute("src", packages[i].src);
    img.setAttribute("alt", packages[i].alt);
    div.addEventListener("click", function(){ launch(packages[i].vacLink) });
    var para = document.createElement("p");
    para.innerHTML = packages[i].name+" <br/> "+packages[i].desc
    div.appendChild(para);
    div.appendChild(img);
    document.getElementById("vacpackages").appendChild(div);
  }
}

function showPkgDesc(sender) {
  for (i = 0; i < sender.children.length; i++) {
    if (sender.children[i].tagName == "P") {
      sender.children[i].style.zIndex = 1;
    } else if (sender.children[i].tagName == "IMG") {
      sender.children[i].style.opacity = .5;
    }
  }
}

function hidePkgDesc(sender) {
  for (i = 0; i < sender.children.length; i++) {
    if (sender.children[i].tagName == "P") {
      sender.children[i].style.zIndex = -1;
    } else if (sender.children[i].tagName == "IMG") {
      sender.children[i].style.opacity = 1;
    }
  }
}

function launch(myUrl) {
  alert(myUrl);
  var linkWindow = window.open(myUrl);
  linkWindow.focus();
  setTimeout(function () { linkWindow.close(); }, 3000);
}
