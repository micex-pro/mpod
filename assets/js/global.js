// Makes Sure The Document Has Loaded
window.addEventListener('load', function(){
    // Smooth Scroll For Anchors
    document.querySelectorAll('a[href^="#"]').forEach(anchor =>{
        if (anchor.getAttribute('href') == "#"){
            anchor.addEventListener("click", function(e){
                e.preventDefault();
            });
        }else{
            anchor.addEventListener("click", function(e){
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        }
    });

    // check if confirmed password and password are the same value
    var rpassword = document.getElementById("rpassword");
    var rcpassword = document.getElementById("rcpassword");

    rcpassword.addEventListener("keyup", function(event){
        if (rcpassword.value != rpassword.value){
            rpassword.style.borderColor = "var(--red-mid)";
            rcpassword.style.borderColor = "var(--red-mid)";
        }else{
            rpassword.style.borderColor = "var(--primary-500)";
            rcpassword.style.borderColor = "var(--primary-500)";
        }
    });

    rpassword.addEventListener("keyup", function(event){
        if (rcpassword.value != rpassword.value){
            rpassword.style.borderColor = "var(--red-mid)";
            rcpassword.style.borderColor = "var(--red-mid)";
        }else{
            rpassword.style.borderColor = "var(--primary-500)";
            rcpassword.style.borderColor = "var(--primary-500)";
        }
    });

    // Check for Caps Lock && send form on Enter key
    var lpassword = document.getElementById("lpassword");
    var lusername = document.getElementById("lusername");
    var capsLockWarning = document.getElementById("capslock-warning");

    lpassword.addEventListener("keyup", function(event){
        if (event.getModifierState("CapsLock")){
            capsLockWarning.style.display = "block";
        }else{
            capsLockWarning.style.display = "none";
        }

        if (event.key === "Enter"){
            event.preventDefault();
            let submitBtn = document.querySelector("#lform button[type=submit]");
            submitBtn.click();
        }
    });
    lusername.addEventListener("keyup", function(event){
        if (event.getModifierState("CapsLock")){
            capsLockWarning.style.display = "block";
        }else{
            capsLockWarning.style.display = "none";
        }
    });

    document.addEventListener("keyup", function(event){
        if (event.getModifierState("CapsLock")){
            capsLockWarning.style.display = "block";
        }else{
            capsLockWarning.style.display = "none";
        }
    });

    // password visible / invisible button for inputs
    var visible_btn = document.getElementById("form-visible-btn");
    var invisible_btn = document.getElementById("form-invisible-btn");
    var show_input = document.getElementById("lpassword");

    visible_btn.addEventListener("click", function(){
        visible_btn.classList.toggle("show");
        visible_btn.classList.toggle("hide");
        invisible_btn.classList.toggle("show");
        invisible_btn.classList.toggle("hide");

        show_input.type = "text";
    });

    invisible_btn.addEventListener("click", function(){
        visible_btn.classList.toggle("show");
        visible_btn.classList.toggle("hide");
        invisible_btn.classList.toggle("show");
        invisible_btn.classList.toggle("hide");

        show_input.type = "password";
    });

    // Passwords Standards Validation
    var password_validation = document.getElementById("rpassword");
    var ps_letter = document.getElementById("ps-letter");
    var ps_capital = document.getElementById("ps-capital");
    var ps_number = document.getElementById("ps-number");
    var ps_symbol = document.getElementById("ps-symbol");
    var ps_length = document.getElementById("ps-length");

    var password_validation_message = document.getElementById("password-standards");


    password_validation.onfocus = function(){
        password_validation_message.style.display = "block";
    }

    password_validation.onblur = function(){
        password_validation_message.style.display = "none";
    }

    password_validation.onkeyup = function() {
        // Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        if(password_validation.value.match(lowerCaseLetters)) {
            ps_letter.classList.remove("invalid");
            ps_letter.classList.add("valid");
        } else {
            ps_letter.classList.remove("valid");
            ps_letter.classList.add("invalid");
        }

        // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if(password_validation.value.match(upperCaseLetters)) {
            ps_capital.classList.remove("invalid");
            ps_capital.classList.add("valid");
        } else {
            ps_capital.classList.remove("valid");
            ps_capital.classList.add("invalid");
        }

        // Validate numbers
        var numbers = /[0-9]/g;
        if(password_validation.value.match(numbers)) {
            ps_number.classList.remove("invalid");
            ps_number.classList.add("valid");
        } else {
            ps_number.classList.remove("valid");
            ps_number.classList.add("invalid");
        }

        // Validate symbols
        var symbols = /[@$-/:-?{-~!"^_`\[\]]/g;
        if(password_validation.value.match(symbols)) {
            ps_symbol.classList.remove("invalid");
            ps_symbol.classList.add("valid");
        } else {
            ps_symbol.classList.remove("valid");
            ps_symbol.classList.add("invalid");
        }

        // Validate length
        if(password_validation.value.length >= 10) {
            ps_length.classList.remove("invalid");
            ps_length.classList.add("valid");
        } else {
            ps_length.classList.remove("valid");
            ps_length.classList.add("invalid");
        }
    }

});

