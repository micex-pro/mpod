// Makes Sure The Document Has Loaded
window.addEventListener("load", function () {
  // Passwords Standards Validation
  var password_validation = document.getElementById("rpassword");
  var ps_letter = document.getElementById("ps-letter");
  var ps_capital = document.getElementById("ps-capital");
  var ps_number = document.getElementById("ps-number");
  var ps_symbol = document.getElementById("ps-symbol");
  var ps_length = document.getElementById("ps-length");

  var password_validation_message =
    document.getElementById("password-standards");

  password_validation.onfocus = function () {
    password_validation_message.style.display = "block";
  };

  password_validation.onblur = function () {
    password_validation_message.style.display = "none";
  };

  password_validation.onkeyup = function () {
    // Validate lowercase letters
    var lowerCaseLetters = /[a-z]/g;
    if (password_validation.value.match(lowerCaseLetters)) {
      ps_letter.classList.remove("invalid");
      ps_letter.classList.add("valid");
    } else {
      ps_letter.classList.remove("valid");
      ps_letter.classList.add("invalid");
    }

    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if (password_validation.value.match(upperCaseLetters)) {
      ps_capital.classList.remove("invalid");
      ps_capital.classList.add("valid");
    } else {
      ps_capital.classList.remove("valid");
      ps_capital.classList.add("invalid");
    }

    // Validate numbers
    var numbers = /[0-9]/g;
    if (password_validation.value.match(numbers)) {
      ps_number.classList.remove("invalid");
      ps_number.classList.add("valid");
    } else {
      ps_number.classList.remove("valid");
      ps_number.classList.add("invalid");
    }

    // Validate symbols
    var symbols = /[@$-/:-?{-~!"^_`\[\]]/g;
    if (password_validation.value.match(symbols)) {
      ps_symbol.classList.remove("invalid");
      ps_symbol.classList.add("valid");
    } else {
      ps_symbol.classList.remove("valid");
      ps_symbol.classList.add("invalid");
    }

    // Validate length
    if (password_validation.value.length >= 10) {
      ps_length.classList.remove("invalid");
      ps_length.classList.add("valid");
    } else {
      ps_length.classList.remove("valid");
      ps_length.classList.add("invalid");
    }
  };
});
