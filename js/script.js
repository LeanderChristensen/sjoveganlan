var currentPage = "index0";

function newPage(changeTo) {
  document.getElementById(currentPage).style.display = 'none';
  document.getElementById(changeTo).style.display = 'block';
  currentPage = changeTo;
  location.hash = "#";
}

function editProfile() {
  document.getElementById("editPic").style.display = 'block';
  document.getElementById("editNickname").style.display = 'block';
  document.getElementById("editBosted").style.display = 'block';
  document.getElementById("editPassword").style.display = 'block';
  if (crew == 1) {
    document.getElementById("editCrewStuff").style.display = 'block';
  }
  document.getElementById("editProfile").style.display = 'none';
  document.getElementById("editProfileStop").style.display = 'block';
}

function editProfileStop() {
  document.getElementById("editPic").style.display = 'none';
  document.getElementById("editNickname").style.display = 'none';
  document.getElementById("editBosted").style.display = 'none';
  document.getElementById("editPassword").style.display = 'none';
  if (crew == 1) {
    document.getElementById("editCrewStuff").style.display = 'none';
  }
  document.getElementById("editProfileStop").style.display = 'none';
  document.getElementById("editProfile").style.display = 'block';
}

function goBack() {
    window.history.back();
}

function snorre() {
  document.body.style.backgroundImage = "url('/images/Snorre.jpg')";
  console.log("Du har nå endret bakgrunn til Snorre!");
}

//var seat1 = "seat1";
function selectSeat(select) {
  $("#seatInfo0").load("seats.php #" + select);
}

$(function() {
  if (location.hash === "#compo") {
      newPage("compo0");
  }
  if (location.hash === "#crew") {
      newPage("crew0");
  }
  if (location.hash === "#index") {
      newPage("index0");
  }
  if (location.hash === "#info") {
      newPage("info0");
  }
  if (location.hash === "#kontaktoss") {
      newPage("kontaktoss0");
  }
  if (location.hash === "#login") {
      newPage("login0");
  }
  if (location.hash === "#minside") {
      newPage("minside0");
  }
  if (location.hash === "#register") {
      newPage("register0");
  }
  if (location.hash === "#regler") {
      newPage("regler0");
  }
  if (location.hash === "#seatmap") {
      newPage("seatmap0");
  }
  if (location.hash === "#nickname") {
      newPage("nickname0");
  }
  if (location.hash === "#city") {
      newPage("city0");
  }
  if (location.hash === "#ansvar") {
      newPage("ansvar0");
  }
  if (location.hash === "#password") {
      newPage("password0");
  }
  if (location.hash === "#minside2") {
      newPage("minside0");
      editProfile();
  }
});

$(document).ready(
    function(){
        $('input:file').change(
            function(){
                if ($(this).val()) {
                    $('input:submit').attr('disabled',false);
                    // or, as has been pointed out elsewhere:
                    // $('input:submit').removeAttr('disabled');
                }
            }
            );

    });

function validatePassword() {
  var currentPassword,newPassword,confirmPassword,output = true;

  currentPassword = document.frmChange.currentPassword;
  newPassword = document.frmChange.newPassword;
  confirmPassword = document.frmChange.confirmPassword;

  if(!currentPassword.value) {
    currentPassword.focus();
    document.getElementById("currentPassword").innerHTML = "Vennligst skriv ditt passord";
    output = false;
  }
  else if(!newPassword.value) {
    newPassword.focus();
    document.getElementById("newPassword").innerHTML = "Vennligst skriv et passord";
    output = false;
  }
  else if(!confirmPassword.value) {
    confirmPassword.focus();
    document.getElementById("confirmPassword").innerHTML = "Vennligst gjenta passordet";
    output = false;
  }
  if(newPassword.value != confirmPassword.value) {
    newPassword.value="";
    confirmPassword.value="";
    newPassword.focus();
    document.getElementById("confirmPassword").innerHTML = "Passordene matcher ikke";
    output = false;
  }
    return output;
}

function validatePassword_en() {
  var currentPassword,newPassword,confirmPassword,output = true;

  currentPassword = document.frmChange.currentPassword;
  newPassword = document.frmChange.newPassword;
  confirmPassword = document.frmChange.confirmPassword;

  if(!currentPassword.value) {
    currentPassword.focus();
    document.getElementById("currentPassword").innerHTML = "Please enter your password";
    output = false;
  }
  else if(!newPassword.value) {
    newPassword.focus();
    document.getElementById("newPassword").innerHTML = "Please enter a password";
    output = false;
  }
  else if(!confirmPassword.value) {
    confirmPassword.focus();
    document.getElementById("confirmPassword").innerHTML = "Please confirm your password";
    output = false;
  }
  if(newPassword.value != confirmPassword.value) {
    newPassword.value="";
    confirmPassword.value="";
    newPassword.focus();
    document.getElementById("confirmPassword").innerHTML = "Passwords do not match";
    output = false;
  }
    return output;
}
