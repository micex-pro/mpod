<?php
    function CreateHTMLSidebar(){
        return '
<aside class="sidebar hide-sidebar" id="sidebar">
<div class="sidebar-close"><button class="btn" id="sidebar-close"><i class="fa-solid fa-xmark"></i></button>  </div>
<div class="sidebar-links">
    <ul>
    <li class="sidebar-link"><a href="https://mpod.micex.pro/index.html">home</a></li>
    <li class="sidebar-link"><a href="https://mpod.micex.pro/contact.html">contact us</a></li>
    <li class="sidebar-link"><a href="https://mpod.micex.pro/about-us.html">about us</a></li>
    <li class="sidebar-link"><a href="https://mpod.micex.pro/donate.html">support us</a></li>
    </ul>
</div>
<div class="sidebar-tos">
    <ul>
    <li class="sidebar-link"><a href="#">TOS</a></li>
    <li class="sidebar-link"><a href="#">privacy</a></li>
    </ul>
</div>
</aside>
        ';
    }
?>