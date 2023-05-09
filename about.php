<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamerea / About</title>
    <link rel="stylesheet" href="./css/about.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <?php 
    require './php/header.php'; 
  ?>
<!-- -->
  <div class="about-wrapper">
    <div class="about-left">
      <div class="about-left-content">
        <div class="">
          <div class="shadow">
            <div class="about-img">
              <img src="./img/me.jpg">
            </div>
          </div>
          <h2>Rykovanov Bogdan</h2>
          <h3>Web developer</h3>
      </div>
        <ul class="icons">
          <a href='https://github.com/coldeee'><li><i class="fab fa-github"></i></li></a>
          <a href='https://vk.com/marta4kas'><li><i class="fab fa-vk"></i></li></a>
          <a href='https://www.youtube.com/channel/UCdlzkPGh3Ci7aAfAd9k6yUA'><li><i class="fab fa-youtube"></i></li></a>
        </ul>
      </div>

    </div>
    <div class="about-right">
      <h1>Hello<span>!</span></h1>
      <h2>Here's who I am & what I do</h2>
      <div class="about-btns">
        <a href="https://vsevolozhsk.hh.ru/resume/f394db5eff0af628470039ed1f32524f636f59"><button type="button" class="btn btn-pink">resume / CV</button></a>
        <button type="button" class="btn btn-pink">Git hub</button>
      </div>

      <div class="about-pare">
        <p>Two weeks ago, we talked about balance and matchmaking in our blog update. Matchmaking has continued to be a big topic in the community, and it's something we've been focused on internally.</p>
        <p>Continuation of the story in the form of a series: the first details of the DLC for Atomic Heart.</p>
      </div>
      <div class="credit">Made with <span style="color: tomato">♥</span> by <a href="#">Rykovanov</a></div> <!-- Вставить сердечко вместо love, ссылку на hh -->
    </div>
  </div>
</body>
</html>