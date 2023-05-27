// Makes Sure The Document Has Loaded
window.addEventListener("load", function () {
  // Check for Caps Lock && send form on Enter key
  var lpassword = document.getElementById("lpassword");
  var lusername = document.getElementById("lusername");
  var capsLockWarning = document.getElementById("capslock-warning");

  lpassword.addEventListener("keyup", function (event) {
    if (event.getModifierState("CapsLock")) {
      capsLockWarning.style.display = "block";
    } else {
      capsLockWarning.style.display = "none";
    }

    if (event.key === "Enter") {
      event.preventDefault();
      let submitBtn = document.querySelector("#lform button[type=submit]");
      submitBtn.click();
    }
  });
  lusername.addEventListener("keyup", function (event) {
    if (event.getModifierState("CapsLock")) {
      capsLockWarning.style.display = "block";
    } else {
      capsLockWarning.style.display = "none";
    }
  });

  document.addEventListener("keyup", function (event) {
    if (event.getModifierState("CapsLock")) {
      capsLockWarning.style.display = "block";
    } else {
      capsLockWarning.style.display = "none";
    }
  });
});
