<?php
include 'includes/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="style/style.css">
  <title><?php echo $config['title']; ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="slick/slick.css" />
</head>

<body>
  <header class="header">

    <?php include 'includes/header.php'; ?>
    <div class="container">
      <div class="header__inner">

        <div class="header__top">
          <a class="logo" href="#">
            <svg id="header__logo" width="286" height="60" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g>
                <g id="svg_28">
                  <g>
                    <g id="svg_26">
                      <text fill="#ffffff" x="21.16691" y="24.57153" id="svg_6" stroke-width="0" font-size="30" font-family="'Alegreya'" text-anchor="start" font-weight="normal" stroke="null" transform="matrix(2.04885 0 0 2.04885 -29.3679 -1.29667)" style="white-space: pre;">U</text>
                      <text fill="#ffffff" x="57" y="26.5" id="svg_7" stroke-width="0" font-size="30" font-family="'Alegreya'" text-anchor="start" style="white-space: pre;">sts</text>
                    </g>
                    <g id="svg_27">
                      <text fill="#ffffff" stroke-width="0" x="113.89198" y="26.31339" id="svg_8" font-size="30" font-family="'Alegreya'" text-anchor="start" stroke="null" transform="matrix(2.1455 0 0 2.1455 -145.585 -6.58055)" style="white-space: pre;">S</text>
                      <text fill="#ffffff" stroke-width="0" x="133.46535" y="29.77921" id="svg_9" font-size="30" font-family="'Alegreya'" text-anchor="start" stroke="null" transform="matrix(0.914855 0 0 0.914855 10.8986 -0.381296)" style="white-space: pre;">hop</text>
                    </g>
                    <path d="M 219.673 20.098 C 221.945 20.098 224.049 20.648 225.768 21.583 C 227.548 20.525 229.788 19.894 232.221 19.894 C 236.598 19.894 240.35 21.935 241.926 24.835 L 241.98 24.803 C 241.98 24.803 255.98 43.065 266.98 31.531 C 277.972 20.005 260.005 67.03 226.05 34.482 C 192.106 67 174.146 19.992 185.137 31.516 C 195.593 42.48 208.76 26.52 210.036 24.916 C 211.651 22.081 215.358 20.098 219.673 20.098 Z" stroke="null" id="svg_16" style="fill: rgb(255, 255, 255);" />
                  </g>
                </g>
              </g>
            </svg>
          </a>

          <div class="header__phone">
            <span>Сотрудничество</span>
            <a class="header__phone-number" href="tel:+37491455690">тел. +374-91-45-56-90</a>
          </div>

        </div>

        <h1 class="header__title">Welcome to <br> USTs Shop</h1>


        <div class="header__content">
          <p class="header__descr">
            Мы следим за качеством в Ереване и знаем, где покупать лучшее. Обзоры, каталоги вещей с ценами и
            скидками, адреса и телефоны</p>
          <div class="header__arrow">
            <a class="header__arrow-link" href="#popular-product">
              <img class="header_arrow-img" src="images/arrow.svg" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <?php
    $popular = mysqli_query($connection,'SELECT * FROM `product` ORDER BY `bought` DESC LIMIT 4;');
  ?>
  <div class="popular-product product__box" id="popular-product">
    <div class="container">
      <div class="popular-product__inner product__box__inner">
        <h2 class="popular-product__title title">Popular Products</h2>
        <div class="popular-product__items product__items">
          <?php
            while($pop_prod = mysqli_fetch_assoc($popular)){
              ?>
            <div class="product__item">
              <a href="" class="product__img-box">
                <img src="images/products/<?php echo $pop_prod['image'] ?>.jpg" alt="" class="product__img">
              </a>
              <a href="#" class="product__name"><?php echo $pop_prod['title'] ?></a>
              <span class="product__price-weight"><?php echo $pop_prod['weight'] ?>g</span>
              <div class="product__bottom-box">
                <p class="product__price"><?php echo $pop_prod['price'] ?>&#x58f</p>
                <button class="product__buy-btn">Buy</button>
              </div>
            </div>
              <?php
            }
          ?>
          <!-- <div class="product__item"></div>
          <div class="product__item"></div>
          <div class="product__item"></div>
          <div class="product__item"></div> -->
        </div>
      </div>
    </div>
  </div>


  <?php
  $categories = mysqli_query($connection, 'SELECT * FROM `product_categories` GROUP BY `title`');
  ?>
  <div class="category">
    <div class="container">
      <div class="category__inner">
          <h2 class="category__title title">
            Categories
          </h2>
        <div class="category__items">
          <?php
          while ($cat = mysqli_fetch_assoc($categories)) {
          ?>
            <a href="" class="category__link">
              <div class="category__box">
                <img src="images/category/<?php echo $cat['image']; ?>.png" alt="" class="category__img">
                <p class="category__text"><?php echo $cat['title']; ?></p>                
              </div>
            </a>
          <?php
          };
          ?>
        </div>
      </div>
    </div>
  </div>

  <?php
    $new_prod = mysqli_query($connection,'SELECT * FROM `product` ORDER BY id DESC LIMIT 4;');
  ?>

  <div class="new-product product__box">
    <div class="container">
      <div class="new-product__inner product__box__inner">
        <h2 class="new-product__title title">New Products</h2>
        <div class="new-product__items product__items">
          <?php
            while($prod = mysqli_fetch_assoc($new_prod)){
              ?>
          <div class="product__item">
            <a href="" class="product__img-box">
              <img src="images/products/<?php echo $prod['image'] ?>.jpg" alt="" class="product__img">
            </a>
            <a href="#" class="product__name"><?php echo $prod['title'] ?></a>
            <span class="product__price-weight"><?php echo $prod['weight'] ?>g</span>
            <div class="product__bottom-box">
              <p class="product__price"><?php echo $prod['price'] ?>&#x58f</p>
              <button class="product__buy-btn">Buy</button>
            </div>
          </div>

              <?php
            }
          ?>

          <!-- <div class="product__item"></div>
          <div class="product__item"></div>
          <div class="product__item"></div>
          <div class="product__item"></div> -->
        </div>
      </div>
    </div>
  </div>

  <footer>
    <a class="logo" href="#">
      <svg id="header__logo" width="286" height="60" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g>
          <g id="svg_28">
            <g>
              <g id="svg_26">
                <text fill="#ffffff" x="21.16691" y="24.57153" id="svg_6" stroke-width="0" font-size="30" font-family="'Alegreya'" text-anchor="start" font-weight="normal" stroke="null" transform="matrix(2.04885 0 0 2.04885 -29.3679 -1.29667)" style="white-space: pre;">U</text>
                <text fill="#ffffff" x="57" y="26.5" id="svg_7" stroke-width="0" font-size="30" font-family="'Alegreya'" text-anchor="start" style="white-space: pre;">sts</text>
              </g>
              <g id="svg_27">
                <text fill="#ffffff" stroke-width="0" x="113.89198" y="26.31339" id="svg_8" font-size="30" font-family="'Alegreya'" text-anchor="start" stroke="null" transform="matrix(2.1455 0 0 2.1455 -145.585 -6.58055)" style="white-space: pre;">S</text>
                <text fill="#ffffff" stroke-width="0" x="133.46535" y="29.77921" id="svg_9" font-size="30" font-family="'Alegreya'" text-anchor="start" stroke="null" transform="matrix(0.914855 0 0 0.914855 10.8986 -0.381296)" style="white-space: pre;">hop</text>
              </g>
              <path d="M 219.673 20.098 C 221.945 20.098 224.049 20.648 225.768 21.583 C 227.548 20.525 229.788 19.894 232.221 19.894 C 236.598 19.894 240.35 21.935 241.926 24.835 L 241.98 24.803 C 241.98 24.803 255.98 43.065 266.98 31.531 C 277.972 20.005 260.005 67.03 226.05 34.482 C 192.106 67 174.146 19.992 185.137 31.516 C 195.593 42.48 208.76 26.52 210.036 24.916 C 211.651 22.081 215.358 20.098 219.673 20.098 Z" stroke="null" id="svg_16" style="fill: rgb(255, 255, 255);" />
            </g>
          </g>
        </g>
      </svg>
    </a>
    <div class="categorys"></div>
    <div class="contact"></div>
  </footer>
  

  <!-- slick slider -->
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>
  <script src="script/script.js"></script>
</body>

</html>