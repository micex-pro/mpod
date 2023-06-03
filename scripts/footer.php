<?php
    function CreateHTMLFooter(){
        return '
<footer class="footer" id="footer">
<div class="footer-center">
    <div class="footer-logo"><a href="https://mpod.micex.pro"><img src="https://mpod.micex.pro/assets/images/MiceX-logo.png" alt="MiceX.Pro"></a></div>
    <div class="footer-about">
    <div class="footer-section">
        <h4 class="footer-title">about</h4>
        <div class="footer-banner">
        <p>Best Premade CSS & HTML designs for modern websites. Made with love from the MiceX.Pro team.</p>
        </div>
    </div>
    </div>
    <div class="footer-sitemap">
    <div class="footer-section">
        <h4 class="footer-title">sitemap</h4>
        <div class="footer-banner">
        <ul class="footer-sitemap-list">
            <li class="footer-link"><a href="#">home</a></li>
            <li class="footer-link"><a href="#">contact us</a></li>
            <li class="footer-link"><a href="#">about us</a></li>
            <li class="footer-link"><a href="#">support us</a></li>
        </div>
    </div>
    </div>
    <div class="footer-newsletter">
    <div class="footer-section">
        <h4 class="footer-title">newsletter</h4>
        <div class="footer-banner">
        <form action="#" class="footer-form" id="footer-form" method="POST">
            <div class="form-row">
            <input
                type="email"
                class="modern-input"
                name="footer_semail"
                pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,}$" 
                title="Please enter a valid email address."
                placeholder="E-mail address"
                required
            />
            <div class="footer-btn-parent">
                <button type="submit" class="btn" id="footer-form-btn">join</button>
            </div>
            </div>
        </form>
        </div>
    </div>
    </div>
    <div class="footer-social">
    <div class="footer-section">
        <h4 class="footer-title">social</h4>
        <div class="footer-banner" id="footer-social-btns">
            <a href="#" class="btn social-btn"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="btn social-btn"><i class="fa-brands fa-twitter"></i></a>
            <a href="#" class="btn social-btn"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
        <p>Contact us: <a href="mailto:contact@micex.pro">contact@micex.pro</a></p>
    </div>
    </div>
</div>
<div class="footer-copyright">
    <div class="footer-section">
    <div class="footer-banner">
        <p>&copy; MiceX.Pro. All rights reserved</p>
    </div>
    </div>
</div>
</footer>
        ';
    }
?>