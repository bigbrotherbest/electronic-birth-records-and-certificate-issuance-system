// selecting dom elements
const logInHeaderButton = document.querySelector(".headerbutton");
const registerBirthButton = document.querySelector(".registerbirth");
const generateBirthButton = document.querySelector(".generate");
// navigation to login page
function redirectToLogInPage() {
  window.location.href = "registrarlogin.php";
}

function redirectToLogInPage1() {
  window.location.href = "npcofficials.php";
}
function redirectToBirthCertificatePage() {
  window.location.href = "certificate.php";
}

// handling click for button
logInHeaderButton.addEventListener("click", redirectToLogInPage);
registerBirthButton.addEventListener("click", redirectToLogInPage1);
generateBirthButton.addEventListener("click", redirectToBirthCertificatePage);
