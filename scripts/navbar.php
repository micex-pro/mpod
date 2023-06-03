<?php
    function CreateHTMLNavbar(){
        return '
<nav class="nav" id="nav">
<div class="nav-center">
    <div class="nav-logo"><a href="https://mpod.micex.pro"><img src="https://mpod.micex.pro/assets/images/MiceX-logo.png" alt="MiceX.Pro"></a></div>
    <div class="nav-links">
    <div class="sidebar-open"><button class="btn" id="sidebar-open"><i class="fa-solid fa-bars-staggered"></i></button></div>
    <ul class="nav-link-list">
        <li class="nav-link"><a href="https://mpod.micex.pro/index.html">home</a></li>
        <li class="nav-link"><a href="https://mpod.micex.pro/contact.html">contact us</a></li>
        <li class="nav-link"><a href="https://mpod.micex.pro/about-us.html">about us</a></li>
        <li class="nav-link"><a href="https://mpod.micex.pro/donate.html">support us</a></li>
    </ul>
    </div>
    <div class="nav-uc">
    <a href="#lform" class="btn"><i class="fa-regular fa-user"></i></a>
    <p>/</p>
    <a href="#rform" class="btn"><i class="fa-solid fa-user-plus"></i></a>
    </div>
</div>
</nav>
        ';
    }
?>