// Makes Sure The Document Has Loaded
window.addEventListener("load", function () {
  // password visible / invisible button for inputs
  var visible_btn = document.getElementById("form-visible-btn");
  var invisible_btn = document.getElementById("form-invisible-btn");
  var show_input = document.getElementById("lpassword");

  visible_btn.addEventListener("click", function () {
    visible_btn.classList.toggle("show");
    visible_btn.classList.toggle("hide");
    invisible_btn.classList.toggle("show");
    invisible_btn.classList.toggle("hide");

    show_input.type = "text";
  });

  invisible_btn.addEventListener("click", function () {
    visible_btn.classList.toggle("show");
    visible_btn.classList.toggle("hide");
    invisible_btn.classList.toggle("show");
    invisible_btn.classList.toggle("hide");

    show_input.type = "password";
  });
});
