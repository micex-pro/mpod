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
});

