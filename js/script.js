let password = document.getElementById("sPassword");
let confirmPassword = document.getElementById("confirm-password");
let signUpBtn = document.getElementById("signup-btn");
let h1 = document.createElement("p");

let parent = confirmPassword.parentNode;
h1.classList.add("text-danger");
h1.innerText = "Does not matched with password";
h1.style.display = "none";
parent.appendChild(h1);
confirmPassword.addEventListener("keyup", function () {
  if (password.value != confirmPassword.value) {
    h1.style.display = "block";
  } else {
    h1.style.display = "none";
    signUpBtn.removeAttribute("disabled");
  }
});

document.createElement("button");
