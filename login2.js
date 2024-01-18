const signInButton = document.querySelector(".submitt-button");

function redirectToDashBoard() {
  window.location.href = "dashboard.php";
}

signInButton.addEventListener("click", redirectToDashBoard);
