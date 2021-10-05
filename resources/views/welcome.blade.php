<!DOCTYPE html>
<html lang="en">
<head>
<title>Techbarn Online Clothing Store</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">



    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">



     <!-- Template Main JS File -->
     <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/mixitup.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
   <script src="assets/js/main.js"></script>
</head>
<body>
<div class="humberger__menu__overlay"></div>
 <div class="humberger__menu__wrapper">
  <div class="humberger__menu__logo">
    <a href="#" class="logo">TECHBARN</a>
  </div>
  <div class="humberger__menu__cart">
    <ul>
      <li><a href="#"><i class="fa fa-heart"></i> <span></span></a></li>
      <li><a href="#"><i class="fa fa-shopping-bag"></i> <span></span></a></li>
    </ul>
    <div class="header__cart__price">item: <span>$150.00</span></div>
  </div>
  <div class="humberger__menu__widget">
    <div class="header__top__right__language">
      <img src="assets/img/language.png" alt="" />
      <div>English</div>
      <span class="arrow_carrot-down"></span>
      <ul>
        <li><a href="#">Spanis</a></li>
        <li><a href="#">English</a></li>
      </ul>
    </div>
    <div class="header__top__right__auth">

    </div>
  </div>
  <nav class="humberger__menu__nav mobile-menu">
    <ul>
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Shop</a></li>
      <li><a href="#">Pages</a>
        <ul class="header__menu__dropdown">
          <li><a href="#">Shop Details</a></li>
          <li><a href="#">Shoping Cart</a></li>
          <li><a href="#">Check Out</a></li>
          <li><a href="#">Blog Details</a></li>
        </ul>
      </li>
      <li><a href="#">Blog</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </nav>
  <div id="mobile-menu-wrap"></div>
  <div class="header__top__right__social">
    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-pinterest-p"></i></a>
  </div>
  <div class="humberger__menu__contact">
    <ul>
      <li><i class="fa fa-envelope"></i></li>
      <li></li>
    </ul>
  </div>
</div>

<header class="header">
  <div class="header__top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="header__top__left">
            <ul>
              <li><i class="fa fa-envelope"></i> info@techbarn.org</li>
              <li></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="header__top__right">
            <div class="header__top__right__social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-linkedin"></i></a>
              <a href="#"><i class="fa fa-pinterest-p"></i></a>
            </div>
            <div class="header__top__right__language">
              <img src="assets/img/language.png" alt="" />
              <div>English</div>
              <span class="arrow_carrot-down"></span>
              <ul>
                <li><a href="#">Spanis</a></li>
                <li><a href="#">English</a></li>
              </ul>
            </div>
            <div class="header__top__right__auth">
              <a href="{{ route('login') }}"><i class="fa fa-user"></i> Login</a>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="header__logo">
          <a href="#" class="logo">TECHBARN</a>
        </div>
      </div>
      <div class="col-lg-6">
        <nav class="header__menu">
          <ul>
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
      </div>
      <div class="col-lg-3">
        <div class="header__cart">
          <ul>
            <li><a href="#"><i class="fa fa-heart"></i> <span></span></a></li>
            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span></span></a></li>
          </ul>
          <div class="header__cart__price">item: <span></span></div>
        </div>
      </div>
    </div>
    <div class="humberger__open">
      <i class="fa fa-bars"></i>
    </div>
  </div>
</header>

<section class="hero">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="hero__categories">
          <div class="hero__categories__all">
            <i class="fa fa-bars"></i>
            <span>All Categories</span>
          </div>
          <ul>
            <li><a href="#">Sweater</a></li>
            <li><a href="#">Dress</a></li>
            <li><a href="#">Hoodies</a></li>
            <li><a href="#">T-shirt</a></li>
            <li><a href="#">Native</a></li>
            <li><a href="#">Shorts</a></li>
            <li><a href="#">Skirt</a></li>
            <li><a href="#">Jeans</a></li>
            <li><a href="#">Suit</a></li>

          </ul>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="hero__search">
          <div class="hero__search__form">
            <form action="#">
              <div class="hero__search__categories">
                All Categories
                <span class="arrow_carrot-down"></span>
              </div>
              <input type="text" placeholder="What do yo u need?" />
              <button type="submit" class="site-btn">SEARCH</button>
            </form>
          </div>
          <div class="hero__search__phone">
            <div class="hero__search__phone__icon">
              <i class="fa fa-phone"></i>
            </div>
            <div class="hero__search__phone__text">
              <h5>080TECHBARN</h5>
              <span>support 24/7 time</span>
            </div>
          </div>
        </div>
        <div class="hero__item set-bg" data-setbg="assets/img/hero/banner.jpg">
          <div class="hero__text">
            <span>NICE DRESS</span>
            <h2><br />100% Cotton</h2>
            <p>Free Pickup and Delivery Available</p>
            <a href="#" class="primary-btn">SHOP NOW</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="categories">
  <div class="container">
    <div class="row">
      <div class="categories__slider owl-carousel">
        <div class="col-lg-3">
          <div class="categories__item set-bg" data-setbg="assets/img/categories/cat-1.jpg">
            <h5><a href="#">Dress</a></h5>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="categories__item set-bg" data-setbg="assets/img/categories/cat-2.jpg">
            <h5><a href="#">Skirt</a></h5>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="categories__item set-bg" data-setbg="assets/img/categories/cat-3.jpg">
            <h5><a href="#">Shirt</a></h5>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="categories__item set-bg" data-setbg="assets/img/categories/cat-4.jpg">
            <h5><a href="#">Native</a></h5>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="categories__item set-bg" data-setbg="assets/img/categories/cat-5.jpg">
            <h5><a href="#">T-Shirt</a></h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="featured spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <h2>Featured Product</h2>
        </div>
        <div class="featured__controls">
          <ul>
            <li class="active" data-filter="*">All</li>
            <li data-filter=".dress">Dress</li>
            <li data-filter=".t-shirt">T-shirt</li>
            <li data-filter=".skirt">Skirt</li>
            <li data-filter=".native">Native</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row featured__filter">
      <div class="col-lg-3 col-md-4 col-sm-6 mix dress skirt">
        <div class="featured__item">
          <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-1.jpg">
            <ul class="featured__item__pic__hover">
              <li><a href="{{ route('login') }}"><i class="fa fa-heart"></i></a></li>
              <li><a href="{{ route('login') }}"><i class="fa fa-retweet"></i></a></li>
              <li><a href="{{ route('login') }}"><i class="fa fa-shopping-cart"></i></a></li>
            </ul>
          </div>
          <div class="featured__item__text">
            <h6><a href="{{ route('login') }}">Skirt</a></h6>
            <h5></h5>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mix skirt native">
        <div class="featured__item">
          <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-2.jpg">
            <ul class="featured__item__pic__hover">
              <li><a href="{{ route('login') }}"><i class="fa fa-heart"></i></a></li>
              <li><a href="{{ route('login') }}"><i class="fa fa-retweet"></i></a></li>
              <li><a href="{{ route('login') }}"><i class="fa fa-shopping-cart"></i></a></li>
            </ul>
          </div>
          <div class="featured__item__text">
            <h6><a href="{{ route('login') }}">Hoodies</a></h6>
            <h5></h5>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mix native t-shirt">
        <div class="featured__item">
          <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-3.jpg">
            <ul class="featured__item__pic__hover">
              <li><a href="{{ route('login') }}"><i class="fa fa-heart"></i></a></li>
              <li><a href="{{ route('login') }}"><i class="fa fa-retweet"></i></a></li>
              <li><a href="{{ route('login') }}"><i class="fa fa-shopping-cart"></i></a></li>
            </ul>
          </div>
          <div class="featured__item__text">
            <h6><a href="{{ route('login') }}">Native</a></h6>
            <h5></h5>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mix t-shirt dress">
        <div class="featured__item">
          <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-4.jpg">
            <ul class="featured__item__pic__hover">
              <li><a href="{{ route('login') }}"><i class="fa fa-heart"></i></a></li>
              <li><a href="{{ route('login') }}"><i class="fa fa-retweet"></i></a></li>
              <li><a href="{{ route('login') }}"><i class="fa fa-shopping-cart"></i></a></li>
            </ul>
          </div>
          <div class="featured__item__text">
            <h6><a href="{{ route('login') }}">Sweater</a></h6>
            <h5></h5>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mix dress skirt">
        <div class="featured__item">
          <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-5.jpg">
            <ul class="featured__item__pic__hover">
              <li><a href="{{ route('login') }}"><i class="fa fa-heart"></i></a></li>
              <li><a href="{{ route('login') }}"><i class="fa fa-retweet"></i></a></li>
              <li><a href="{{ route('login') }}"><i class="fa fa-shopping-cart"></i></a></li>
            </ul>
          </div>
          <div class="featured__item__text">
            <h6><a href="{{ route('login') }}">T-Shirt</a></h6>
            <h5></h5>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">
        <div class="featured__item">
          <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-6.jpg">
            <ul class="featured__item__pic__hover">
              <li><a href="{{ route('login') }}"><i class="fa fa-heart"></i></a></li>
              <li><a href="{{ route('login') }}"><i class="fa fa-retweet"></i></a></li>
              <li><a href="{{ route('login') }}"><i class="fa fa-shopping-cart"></i></a></li>
            </ul>
          </div>
          <div class="featured__item__text">
            <h6><a href="{{ route('login') }}">Dress</a></h6>
            <h5></h5>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
        <div class="featured__item">
          <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-7.jpg">
            <ul class="featured__item__pic__hover">
              <li><a href="{{ route('login') }}"><i class="fa fa-heart"></i></a></li>
              <li><a href="{{ route('login') }}"><i class="fa fa-retweet"></i></a></li>
              <li><a href="{{ route('login') }}"><i class="fa fa-shopping-cart"></i></a></li>
            </ul>
          </div>
          <div class="featured__item__text">
            <h6><a href="{{ route('login') }}">T-Shirt</a></h6>
            <h5></h5>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">
        <div class="featured__item">
          <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-8.jpg">
            <ul class="featured__item__pic__hover">
              <li><a href="{{ route('login') }}"><i class="fa fa-heart"></i></a></li>
              <li><a href="{{ route('login') }}"><i class="fa fa-retweet"></i></a></li>
              <li><a href="{{ route('login') }}"><i class="fa fa-shopping-cart"></i></a></li>
            </ul>
          </div>
          <div class="featured__item__text">
            <h6><a href="{{ route('login') }}">T-Shirt</a></h6>
            <h5></h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="banner">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="banner__pic">
          <img src="assets/img/banner/banner-1.jpg" alt="" />
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="banner__pic">
          <img src="assets/img/banner/banner-2.jpg" alt="" />
        </div>
      </div>
    </div>
  </div>
</div>

<section class="latest-product spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="latest-product__text">
          <h4>Latest Products</h4>
          <div class="latest-product__slider owl-carousel">
            <div class="latest-prdouct__slider__item">
              <a href="#" class="latest-product__item">
                <div class="latest-product__item__pic">
                  <img src="assets/img/latest-product/lp-1.jpg" alt="" />
                </div>
                <div class="latest-product__item__text">
                  <h6></h6>
                  <span></span>
                </div>
              </a>
              <a href="#" class="latest-product__item">
                <div class="latest-product__item__pic">
                  <img src="assets/img/latest-product/lp-2.jpg" alt="" />
                </div>
                <div class="latest-product__item__text">
                  <h6></h6>
                  <span></span>
                </div>
              </a>
              <a href="#" class="latest-product__item">
                <div class="latest-product__item__pic">
                  <img src="assets/img/latest-product/lp-3.jpg" alt="" />
                </div>
                <div class="latest-product__item__text">
                  <h6></h6>
                  <span></span>
                </div>
              </a>
            </div>
            <div class="latest-prdouct__slider__item">
              <a href="#" class="latest-product__item">
                <div class="latest-product__item__pic">
                  <img src="assets/img/latest-product/lp-1.jpg" alt="" />
                </div>
                <div class="latest-product__item__text">
                  <h6></h6>
                  <span></span>
                </div>
              </a>
              <a href="#" class="latest-product__item">
                <div class="latest-product__item__pic">
                  <img src="assets/img/latest-product/lp-2.jpg" alt="" />
                </div>
                <div class="latest-product__item__text">
                  <h6></h6>
                  <span></span>
                </div>
              </a>
              <a href="#" class="latest-product__item">
                <div class="latest-product__item__pic">
                  <img src="assets/img/latest-product/lp-3.jpg" alt="" />
                </div>
                <div class="latest-product__item__text">
                  <h6></h6>
                  <span></span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="latest-product__text">
          <h4>Top Rated Products</h4>
          <div class="latest-product__slider owl-carousel">
            <div class="latest-prdouct__slider__item">
              <a href="#" class="latest-product__item">
                <div class="latest-product__item__pic">
                  <img src="assets/img/latest-product/lp-1.jpg" alt="" />
                </div>
                <div class="latest-product__item__text">
                  <h6></h6>
                  <span></span>
                </div>
              </a>
              <a href="#" class="latest-product__item">
                <div class="latest-product__item__pic">
                  <img src="assets/img/latest-product/lp-2.jpg" alt="" />
                </div>
                <div class="latest-product__item__text">
                  <h6></h6>
                  <span></span>
                </div>
              </a>
              <a href="#" class="latest-product__item">
                <div class="latest-product__item__pic">
                  <img src="assets/img/latest-product/lp-3.jpg" alt="" />
                </div>
                <div class="latest-product__item__text">
                  <h6></h6>
                  <span></span>
                </div>
              </a>
            </div>
            <div class="latest-prdouct__slider__item">
              <a href="#" class="latest-product__item">
                <div class="latest-product__item__pic">
                  <img src="assets/img/latest-product/lp-1.jpg" alt="" />
                </div>
                <div class="latest-product__item__text">
                  <h6></h6>
                  <span></span>
                </div>
              </a>
              <a href="#" class="latest-product__item">
                <div class="latest-product__item__pic">
                  <img src="assets/img/latest-product/lp-2.jpg" alt="" />
                </div>
                <div class="latest-product__item__text">
                  <h6></h6>
                  <span></span>
                </div>
              </a>
              <a href="#" class="latest-product__item">
                <div class="latest-product__item__pic">
                  <img src="assets/img/latest-product/lp-3.jpg" alt="" />
                </div>
                <div class="latest-product__item__text">
                  <h6></h6>
                  <span></span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="latest-product__text">
          <h4>Review Products</h4>
          <div class="latest-product__slider owl-carousel">
            <div class="latest-prdouct__slider__item">
              <a href="#" class="latest-product__item">
                <div class="latest-product__item__pic">
                  <img src="assets/img/latest-product/lp-1.jpg" alt="" />
                </div>
                <div class="latest-product__item__text">
                  <h6></h6>
                  <span></span>
                </div>
              </a>
              <a href="#" class="latest-product__item">
                <div class="latest-product__item__pic">
                  <img src="assets/img/latest-product/lp-2.jpg" alt="" />
                </div>
                <div class="latest-product__item__text">
                  <h6></h6>
                  <span></span>
                </div>
              </a>
              <a href="#" class="latest-product__item">
                <div class="latest-product__item__pic">
                  <img src="assets/img/latest-product/lp-3.jpg" alt="" />
                </div>
                <div class="latest-product__item__text">
                  <h6></h6>
                  <span></span>
                </div>
              </a>
            </div>
            <div class="latest-prdouct__slider__item">
              <a href="#" class="latest-product__item">
                <div class="latest-product__item__pic">
                  <img src="assets/img/latest-product/lp-1.jpg" alt="" />
                </div>
                <div class="latest-product__item__text">
                  <h6></h6>
                  <span></span>
                </div>
              </a>
              <a href="#" class="latest-product__item">
                <div class="latest-product__item__pic">
                  <img src="assets/img/latest-product/lp-2.jpg" alt="" />
                </div>
                <div class="latest-product__item__text">
                  <h6></h6>
                  <span></span>
                </div>
              </a>
              <a href="#" class="latest-product__item">
                <div class="latest-product__item__pic">
                  <img src="assets/img/latest-product/lp-3.jpg" alt="" />
                </div>
                <div class="latest-product__item__text">
                  <h6></h6>
                  <span></span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<footer class="footer spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="footer__about">
          <div class="footer__about__logo">
            <a href="#" class="logo">TECHBARN</a>
          </div>
          <ul>
            <li>Address: LAGOS NIGERIA </li>
            <li>Phone: 080TECHBARN</li>
            <li>Email: info@techbarn.org</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
        <div class="footer__widget">
          <h6>Useful Links</h6>
          <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">About Our Techbarn</a></li>
            <li><a href="#">Secure Shopping</a></li>
            <li><a href="#">Delivery infomation</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Our Sitemap</a></li>
          </ul>

        </div>
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="footer__widget">
          <h6>Join Our Newsletter Now</h6>
          <p>Get E-mail updates about our latest techbarn and special offers.</p>
          <form action="#">
            <input type="text" placeholder="Enter your mail" />
            <button type="submit" class="site-btn">Subscribe</button>
          </form>
          <div class="footer__widget__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="footer__copyright">
          <div class="footer__copyright__text"><p>
Copyright &copy;2021 All rights reserved | by <a href="#" target="_blank">Chizea Matkene</a>
</p></div>
          <div class="footer__copyright__payment"><img src="assets/img/payment-item.png" alt="" /></div>
        </div>
      </div>
    </div>
  </div>
</footer>

</body>
</html>
