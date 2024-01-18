const signInButton = document.querySelector(".submit-button");

function redirectToDashBoard() {
  window.location.href = "dashboard.php";
}

signInButton.addEventListener("click", redirectToDashBoard);

// JavaScript code to show and hide the modal
function showMessage(title, content) {
  var modal = document.querySelector(".message");
  var modalTitle = modal.querySelector("h1");
  var modalContent = modal.querySelector("p");

  modalTitle.textContent = title;
  modalContent.textContent = content;

  modal.style.display = "block";

  // Add an event listener to close the modal when the button is clicked
  modal.querySelector("button").addEventListener("click", function () {
    modal.style.display = "none";
  });
}

// Example usage:
// showMessage('Success', 'User registered successfully');
// or
// showMessage('Error', 'Username not registered');
