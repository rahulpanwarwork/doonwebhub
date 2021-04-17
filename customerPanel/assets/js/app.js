function toggleForm() {
  const regForm = document.getElementById("registerForm");
  const logForm = document.getElementById("loginForm");

  if (regForm.classList.contains("d-none") == true) {
    regForm.classList.remove("d-none");
    logForm.classList.add("d-none");
  } else {
    regForm.classList.add("d-none");
    logForm.classList.remove("d-none");
  }
}
