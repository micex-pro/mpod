<?php
  include "scripts\header.php";
  include "scripts\\navbar.php";
  include "scripts\sidebar.php";
  include "scripts\\footer.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      $head = CreateHTMLHead("index.php", "home", "index.css");
      echo $head;
    ?>
  </head>
  <body>
    <?php
      $sidebar = CreateHTMLSidebar();
      echo $sidebar;

      $navbar = CreateHTMLNavbar();
      echo $navbar;
    ?>
    <!-- Start Of Hero -->
    <header class="hero">
      <div class="hero-banner">
        <h4>fasten your development process with our platform</h4>
        <p>You can use any design for free, or clone our open sourced repository on our <a href="https://github.com/micex-pro/mpod">GitHub page</a></p>
      </div>
      <div class="hero-btn">
        <a href="#paragraph-section" class="btn btn-hollow">Explore</a>
        <a href="#footer" class="btn btn-rhollow">secret</a>
      </div>
    </header>
    <!-- End Of Hero -->

    <!-- Start Of Paragraph -->
    <section id="paragraph-section" class="section paragraph-section">
      <h1 class="section-title">paragraph</h1>
      <div class="title-underline"></div>
      <div class="section-content">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias maiores
          facilis nobis voluptate voluptatum voluptas? Quas ullam natus hic
          nihil.
        </p>
      </div>
    </section>
    <!-- End Of Paragraph -->

    <!-- Start Of Headings -->
    <section class="section heading-section">
      <h1 class="section-title">headings</h1>
      <div class="title-underline"></div>
      <div class="section-content">
        <h1>heading 1</h1>
        <h2>heading 2</h2>
        <h3>heading 3</h3>
        <h4>heading 4</h4>
        <h5>heading 5</h5>
        <h6>heading 6</h6>
      </div>
    </section>
    <!-- End Of Headings -->

    <!-- Start Of Anchors -->
    <section class="section anchors-section">
      <h1 class="section-title">anchors</h1>
      <div class="title-underline"></div>
      <div class="section-content">
        <a href="#nav" class="link">scroll to top</a>
        <a href="https://www.micex.pro/" class="nav-anchor">Just a link</a>
        <a href="#footer" class="footer-anchor">scroll to bottom</a>
      </div>
    </section>
    <!-- End Of Anchors -->

    <!-- Start Of Small Text -->
    <section class="section small-section">
      <h1 class="section-title">small text</h1>
      <div class="title-underline"></div>
      <div class="section-content">
        <small>This Is Small Tag</small>
        <p class="text_small">This Is Small Paragraph</p>
      </div>
    </section>
    <!-- End Of Small Text -->

    <!-- Start Of Lists -->
    <section class="section lists-section">
      <h1 class="section-title">Lists</h1>
      <div class="title-underline"></div>
      <div class="section-content">
        <ul class="nav-list">
          <li>first item</li>
          <li>second item</li>
          <li>third item</li>
        </ul>
      </div>
    </section>
    <!-- End Of Lists -->

    <!-- Start Of Images -->
    <section class="section images-section">
      <h1 class="section-title">Images</h1>
      <div class="title-underline"></div>
      <div class="section-content">
        <div class="container">
          <img
            src="./assets/images/MiceX-logo.png"
            alt="MiceX.Pro"
            class="img"
          />
        </div>
      </div>
    </section>
    <!-- End Of Images -->

    <!-- Start Of Buttons -->
    <section class="section buttons-section">
      <h1 class="section-title">Buttons</h1>
      <div class="title-underline"></div>
      <div class="section-content">
        <button type="button" class="btn">default button</button>
        <button type="button" class="btn btn-reverse">reversed button</button>
        <button type="button" class="btn btn-hollow">hollow button</button>
        <button type="button" class="btn btn-hipster">hipster button</button>
        <button type="button" class="btn btn-rounded">rounded button</button>
        <button type="button" class="btn btn-scaled">scaled button</button>
        <button type="button" class="btn btn-block">block button</button>
      </div>
    </section>
    <!-- End Of Buttons -->

    <!-- Start Of Alerts -->
    <section class="section alerts-section">
      <h1 class="section-title">alerts</h1>
      <div class="title-underline"></div>
      <div class="section-content">
        <div class="alert alert-error">Here is an error alert</div>
        <div class="alert alert-success">Here is a success alert</div>
        <div class="alert alert-warn">Here is a warning alert</div>
        <div class="alert alert-info">Here is an info alert</div>
      </div>
    </section>
    <!-- End Of Alerts -->

    <!-- Start Of Form -->
    <section class="section form-section">
      <h1 class="section-title">Form</h1>
      <div class="title-underline"></div>
      <div class="section-content">
        <form action="#register" class="form" id="rform" method="POST">
          <h4>register</h4>
          <div class="form-row">
            <label for="rusername" class="form-label">username *</label>
            <input
              type="text"
              class="form-input"
              name="ruser"
              id="rusername"
              placeholder="first name"
              pattern="^[a-zA-Z0-9_\-.$@*!]{7,20}$"
              title="Please enter a username between 7 and 20 characters that includes only letters, numbers, underscores, hyphens, periods, dollar signs, at signs, asterisks, or exclamation marks."
              required
            />
          </div>
          <div class="form-row">
            <label for="rpassword" class="form-label">Password *</label>
            <input
              type="password"
              class="form-input"
              name="rpass"
              placeholder="password"
              id="rpassword"
              title="Must contain at least one number, one uppercase letter, one lowercase letter, one symbol, and be at least 10 characters long."
              required
            />
          </div>
          <div class="form-row password-standards" id="password-standards">
            <h6>Password must contain the following:</h6>
            <p id="ps-letter" class="invalid">A <b>lowercase</b> letter</p>
            <p id="ps-capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
            <p id="ps-number" class="invalid">A <b>number</b></p>
            <p id="ps-symbol" class="invalid">A <b>symbol</b></p>
            <p id="ps-length" class="invalid">Minimum <b>10 characters</b></p>
          </div>
          <div class="form-row">
            <label for="rcpassword" class="form-label">confirm Password *</label>
            <input
              type="password"
              class="form-input"
              name="rcpass"
              placeholder="confirm password"
              id="rcpassword"
              title="Must contain at least one number, one uppercase letter, one lowercase letter, one symbol, and be at least 10 characters long."
              required
            />
          </div>
          <div class="form-row">
            <label for="goals" class="form-label">Goals</label>
            <textarea
              name="rgoals"
              id="goals"
              class="form-textarea"
              placeholder="Default Value"
            ></textarea>
          </div>
          <div class="form-row form-row-condition">
            <label class="form-switch">
              <input id="form-rcondition" type="checkbox" name="rcondition" />
              <span class="slider"></span>
            </label>
            <label for="form-rcondition" class="form-label condition-label"
              >Accept <a href="#" class="link">TOS</a> /
              <a href="#" class="link">Privacy</a> /
              <a href="#" class="link">other</a></label
            >
          </div>
          <div class="form-row form-row-condition">
            <label class="form-switch">
              <input id="form-rnewsletter" type="checkbox" name="rnewsletter" />
              <span class="slider"></span>
            </label>
            <label for="form-rnewsletter" class="form-label condition-label">join our newsletter</label> 
          </div>
          <button type="submit" class="btn btn-block">create account</button>
          <small class="form-alert-error">bad request</small>
        </form>
        <form action="#login" class="form" id="lform" method="POST">
          <h4>login</h4>
          <div class="input-line"></div>
          <div class="form-row">
            <input
              type="text"
              class="modern-input"
              name="luser"
              id="lusername"
              required
            />
            <label for="lusername" class="modern-label">username *</label>
          </div>
          <div class="form-row">
            <div class="input-line"></div>
            <input
              type="password"
              class="modern-input"
              name="lpass"
              id="lpassword"
              required
            />
            <label for="lpassword" class="modern-label">Password *</label>
            <button type="button" class="btn form-password-visibility show" id="form-visible-btn"><i class="fa-solid fa-eye"></i></button>
            <button type="button" class="btn form-password-visibility hide" id="form-invisible-btn"><i class="fa-solid fa-eye-slash"></i></button>
            <label class="form-label" id="capslock-warning">Caps lock is ON</label>
          </div>
          <div class="form-row form-row-condition">
            <label class="form-switch">
              <input id="form-lrememberpass" type="checkbox" name="lrememberpass" />
              <span class="slider round"></span>
            </label>
            <label class="form-label condition-label">Remember me</label> 
          </div>
          <button type="submit" class="btn btn-block">login</button>
          <div class="form-row form-row-condition forgot-credentials">
            <label class="form-label condition-label"
            >Forgot <a href="#" class="link">username</a> /
            <a href="#" class="link">password</a>
          </div>
          <small class="form-alert-success">Welcome back!</small>
        </form>
        <form action="#sub-to-newsletter" class="form" id="sform" method="POST">
          <h4>newsletter</h4>
          <div class="form-row form-snewsletter">
            <div class="input-line input-line-center">
              <label for="name" class="modern-label">E-mail *</label>
            </div>
            <input
              type="email"
              class="modern-input"
              name="semail"
              id="form-semail"
              pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,}$" 
              title="Please enter a valid email address."
              required
            />
          </div>
          <button type="submit" class="btn btn-block">Subsribe now</button>
        </form>
      </div>
    </section>
    <!-- End Of Form -->

    <!-- Start Of Animations -->
    <section class="section animations-section">
      <h1 class="section-title">animations</h1>
      <div class="title-underline"></div>
      <div class="section-content">
        <div class="animation animation-circle"></div>
        <div class="animation animation-square"></div>
        <div id="pbar">
          <div id="progress"></div>
        </div>
      </div>
    </section>
    <!-- End Of Animations -->
    <?php
      $footer = CreateHTMLFooter();
      echo $footer;
    ?>

    <!-- Start Local JS Files -->
    <script src="./assets/js/smoothScrolling.js"></script>
    <script src="./assets/js/cookie.js"></script>
    <script src="./assets/js/sideBar.js"></script>
    <script src="./assets/js/passwordStandardsValidation.js"></script>
    <script src="./assets/js/passwordVisibility.js"></script>
    <script src="./assets/js/pressedKeyboardKeys.js"></script>
    <script src="./assets/js/confirmedPassword.js"></script>
    <!-- End Local JS Files -->
    <!-- Start External JS Files -->
    <!-- End External JS Files -->
  </body>
</html>
