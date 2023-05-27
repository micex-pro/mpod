// Makes Sure The Document Has Loaded
window.addEventListener("load", function () {
  // SideBar Toggle
  var sidebar = document.getElementById("sidebar");
  var sidebar_open = document.getElementById("sidebar-open");
  var sidebar_close = document.getElementById("sidebar-close");
  var body = document.getElementsByTagName("body")[0];

  sidebar_open.addEventListener("click", function () {
    sidebar.classList.toggle("show-sidebar");
    sidebar.classList.toggle("hide-sidebar");
    body.style.overflow = "hidden";
  });
  sidebar_close.addEventListener("click", function () {
    sidebar.classList.toggle("show-sidebar");
    sidebar.classList.toggle("hide-sidebar");
    body.style.overflow = "visible";
  });
});
