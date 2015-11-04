/*******************************************************************************
Title: 			 Travel Experts Web App - Form.JS
Author: 		 Royal Bissell
Date: 			 2015-11-02
Description: JavaScript for the Registration Form. Handles onfocus tooltips,
             data validation, and a Regex for Postal Code entry.
*******************************************************************************/

function formLoad(sender) {
  var myTips = document.getElementsByClassName("inputTip")
  for (i = 0; i < myTips.length; i++) {
    myTips[i].style.visibility = "hidden";
  }
}

function showTip(sender) {
  var myTip = sender.parentElement.lastElementChild;
  myTip.style.visibility = "visible";
  myTip.innerHTML = sender.title
}

function hideTip(sender) {
  var myTip = sender.parentElement.lastElementChild;
  myTip.style.visibility = "hidden";
}

/*
This function is called when the user clicks submit or reset.
Returns: false to interrupt the actions or completes.
*/
function formConfirm(sender) {
  var type = sender.type;
  if (!confirm("Are you sure you want to " + type + " the form?")) {
    return false;
  }
  if (sender.type == "submit") {
    return formValidate(sender);
  }
}

/*
This function is called by formConfirm after the user confirms a submit, will
check all form fields for data and style invalid fields/valid fields
*/
function formValidate(sender) {
  var inputs = sender.form.getElementsByTagName("INPUT");
  var selects = sender.form.getElementsByTagName("SELECT");
  var txtareas = sender.form.getElementsByTagName("TEXTAREA");
  var fields = objConcat(inputs,selects,txtareas);
  var noerror = 1;
  var errors = "";
  for (i = 0; i < fields.length; i++) {
    if(!(fields[i].value)) {
      noerror = 0;
      errors += "<li>" + fields[i].title + "</li>";
      fields[i].style.borderColor = "#ff0000";
      fields[i].style.backgroundColor = "rgba(255, 0, 0, 0.25)";
    } else {
      fields[i].style.borderColor = "gray";
      fields[i].style.backgroundColor = "rgb(246, 246, 246);";
    }
  }
  if (noerror == 0) {
    document.getElementById("errors").innerHTML = errors;
    return false;
  }
}

/*
Function to create an array from on object that looks like an array (numbered)
If only one objectarray is added as a parameter it will just create an array out
of this object.
Input: (Object1[element1,element2,etc] , Object2[element1,element2,etc]*optional,
       etc[etc]*optional)
Returns: the new array
*/
function objConcat() {
  var output = [];
  for (n = 0; n < arguments.length; n++) {
    for (i = 0; i < arguments[n].length; i++) {
      output[output.length] = arguments[n][i];
    }
  }
  return output;
}

/*
This function performs the regex validation on postal codes onchange(),
it also performs field formatting before submission
*/
function valPostCode(sender) {
  var canPostRe = /^([A-Z]\d[A-Z](\s|-)?\d[A-Z]\d)$/;
  var fieldValue = sender.value.toUpperCase().trim();
  if ( canPostRe.test(fieldValue) ) {
    fieldValue = fieldValue.replace(/-|\s/,"");
    fieldValue = fieldValue.substr(0, 3) + " " + fieldValue.substr(3);
  } else {
    alert(fieldValue + " is not a valid postalcode or zipcode");
    return;
  }
  sender.value = fieldValue;
}

/*
This function performs the data validation onchange() on the birthdate fields; min max date
I would not use a date picker in the future to set a birthdate, it is not
convenient to change years.
*/
function valBDate(sender) {
  var today = new Date();
  var minDate = new Date("1900-01-01")
  var myBDate = new Date(sender.value)
  if (myBDate < minDate || myBDate > today) {
    alert("Not a valid date, please re-check and try again!");
    sender.value = "";
    return;
  } else {

  }
}
