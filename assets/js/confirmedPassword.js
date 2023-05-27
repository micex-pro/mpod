// Makes Sure The Document Has Loaded
window.addEventListener("load", function () {
  // check if confirmed password and password are the same value
  var rpassword = document.getElementById("rpassword");
  var rcpassword = document.getElementById("rcpassword");

  rcpassword.addEventListener("keyup", function (event) {
    if (rcpassword.value != rpassword.value) {
      rpassword.style.borderColor = "var(--red-mid)";
      rcpassword.style.borderColor = "var(--red-mid)";
    } else {
      rpassword.style.borderColor = "var(--primary-500)";
      rcpassword.style.borderColor = "var(--primary-500)";
    }
  });

  rpassword.addEventListener("keyup", function (event) {
    if (rcpassword.value != rpassword.value) {
      rpassword.style.borderColor = "var(--red-mid)";
      rcpassword.style.borderColor = "var(--red-mid)";
    } else {
      rpassword.style.borderColor = "var(--primary-500)";
      rcpassword.style.borderColor = "var(--primary-500)";
    }
  });
});
