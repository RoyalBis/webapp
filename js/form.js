/*
This function is called when the user clicks submit or reset.
Returns: false to interrupt the actions or completes.
*/
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

function formConfirm(sender) {
  var type = sender.type;
  if (!confirm("Are you sure you want to " + type + " the form?")) {
    return false;
  }
  return formValidate(sender);
}

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
function to create an array from on object that looks like an array (numbered)
If only one item is added it will just create an array out of this object.
Input: (Object1[element1,element2,etc] , Object2[element1,element2,etc]*optional,  etc[etc]*optional)
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


//Canadian Postal Code and US Zip Code
/*
  var fieldValue = sender.value.toUpperCase().trim();

  var pattern = /^([A-Z]\d[A-Z](\s|-)?\d[A-Z]\d)$|^(\d{5})$|^((\d{5})(\s|-)(\d{4})?)$/;
  if ( !(pattern.test(fieldValue)) ) {
    alert(fieldValue + " is an invalid postalcode or zip code format");
  }
  fieldValue = fieldValue.replace(/-|\s/,"");
  sender.value = fieldValue.substr(0, 3) + " " + fieldValue.substr(3);
*/

//Candian and American Postal Code with data sanitivation
/*
function valPostCode(sender) {
  var canPostRe = /^([A-Z]\d[A-Z](\s|-)?\d[A-Z]\d)$/;
  var usZipRe = /^((\d{5})(\s|-)(\d{4})?)$/;
  var fieldValue = sender.value.toUpperCase().trim();
  if ( canPostRe.test(fieldValue) ) {
    fieldValue = fieldValue.replace(/-|\s/,"");
    fieldValue = fieldValue.substr(0, 3) + " " + fieldValue.substr(3);
  } else if ( usZipRe.test(fieldValue) ) {
    fieldValue = fieldValue.replace(/\s/,"-");
  } else {
    alert(fieldValue + " is not a valid postalcode or zipcode");
    return;
  }
  sender.value = fieldValue;
}
*/
