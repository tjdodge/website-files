<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vigilant Engine Company</title>
  <link rel="stylesheet" href="styles_home.css?v=2">

  <style>
    /* Mobile layout */
    @media (max-width: 768px) {
      .expo-row {
        display: flex !important;
        flex-direction: column !important;
        align-items: center !important;
        gap: 16px !important;
      }

      .expo-row > div {
        width: 100% !important;
        max-width: 420px !important;
        margin: 0 auto 16px auto !important;
      }
    }
  </style>
</head>

<body>

<header class="masthead" style="padding-top:4px;padding-bottom:4px;">
  <div class="container mast-inner">
    <img class="mast-logo" src="images/vigilant_logo.png" alt="Vigilant Logo">
    <div class="mast-title">
      <div class="mast-line1">Copiague Fire Department</div>
      <div class="mast-line2">Vigilant Engine Company</div>
    </div>
  </div>
</header>

<section class="container">
  <div class="hero-welcome"
       style="background:none;border:none;box-shadow:none;
              padding-top:6px;padding-bottom:2px;margin-top:0;">
    <div class="headline" style="margin-bottom:4px;">
      Vigilant Engine Company – Texas Hold'em Tournament
    </div>

    <p class="hero-subline" style="margin:0 0 12px 0;font-size:0.9rem;">
      The Vigilant Engine Company is hosting its 1st Annual Texas Hold'em Tournament
    </p>

    <p class="hero-subline" style="margin:8px 0 4px 0;font-size:0.95rem;">
      Copiague Fire Department · 320 Great Neck Rd, Copiague, NY 11726
    </p>
  </div>
</section>

<section class="container" style="max-width:1350px;">

  <!-- 3-column layout -->
  <div class="home-3col">

    <!-- LEFT: Event Highlights -->
    <div class="side-card">
      <img src="images/index_image_left.PNG" alt="Event Highlights">
    </div>

    <!-- CENTER: Night of Poker + Vigilant logo + Buttons/Menu -->
    <div class="center-col">
      <img class="center-hero"
           src="images/night_of_poker_top.png"
           alt="Night of Poker">\n
      <img class="center-logo"
           src="images/vigilant_logo.png"
           alt="Vigilant Engine Company Logo">

      <div class="center-actions">
        <!-- REGISTER BUTTON -->
        <div style="text-align:center; margin:12px 0 12px;">
          <a href="tickets.php" class="btn btn-primary btn-big-ticket"
             style="box-shadow:0 0 22px rgba(192,0,0,0.8);
                    padding:14px 40px; display:inline-block;">
            TO REGISTER<br>CLICK HERE
          </a>
        </div>

        <!-- SITE MENU -->
        <div style="text-align:center;">
          <h2 style="margin:0 0 6px;">Site Menu</h2>

          <div class="menu-row">
            <a href="gallery.html" class="btn btn-primary">Gallery</a>
            <a href="Contact.html" class="btn btn-primary">Contact</a>
          </div>

          <div class="menu-row" style="margin-top:12px;">
            <a href="Administration.php" class="btn btn-ghost">Administration</a>
            <a href="about.html" class="btn btn-ghost">About Us</a>
          </div>
        </div>
      </div>
    </div>

    <!-- RIGHT: Blackjack Tournament -->
    <div class="side-card side-card--red">
      <img src="images/index_image_right.PNG" alt="Blackjack Tournament">
    </div>

  </div>
</section>

<section class="countdown-bar">
  <div class="container countdown-inner">
    <div class="countdown-title">Countdown To The Tournament</div>
    <div id="countdown" class="countdown-time">…</div>
    <a class="addcal" href="Texas_Holdem.ics" download>Add to Calendar</a>
  </div>
</section>

<footer>
  <div class="container">© 2025 Vigilant Engine Company</div>
</footer>

<script src="app.js?v=20251116"></script>
</body>
</html>