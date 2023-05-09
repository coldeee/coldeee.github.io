<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/header.css" type="text/css"/>
</head>
<!-- Навигационная панель -->
<body>
  <div class="header-pc">
        <div class="header_section header_left">
          <div class="dropdown">
            <div class="header_item headerButton header_news"><a class="header_text" href="release.php">NEWS</a></div>
          </div>
          <div class="dropdown">
            <div class="header_item headerButton"><a class="header_text" href="guide.php">GUIDES</a></div>        
          </div>
        </div>
        <div class="header_section header_logo">
            <div class="headerlogo headerButton">
              <a href="./index.php">Gamerea</a>
            </div>
        </div>
        <div class="header_section header_right">
          <div class="dropdown">
            <div class="header_item headerButton header_news"><a class="header_text" href="review.php">REVIEWS</a></div>  
          </div>
          <div class="dropdown">
            <div class="header_item headerButton"><a class="header_text" href="about.php">ABOUT</a></div>
          </div>
        </div>
    </div>

    <div class="header-phone">
      <div class="header_section">
        <div class="dropdown">
          <div class="header_item headerButton">
            <a href="#"><i class="fa fa-bars"></i></a>
          </div>
          <div class="dropdown-content dropdown_menu">
            <a class="dropdown_text dropdown_text_phone" href="release.php">NEWS</a>
            <a class="dropdown_text dropdown_text_phone" href="guide.php">GUIDES</a>
            <a class="dropdown_text dropdown_text_phone" href="review.php">REVIEWS</a>
            <a class="dropdown_text dropdown_text_phone" href="about.php">ABOUT</a>
          </div>     
        </div>
          <div class="headerlogo headerButton">
            <a href="../index.php">Gamerea</a>
          </div>
      </div>
  </div>
</body>
