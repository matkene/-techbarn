
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
      <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
      <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
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
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
            <a href=""><i class="fa fa-user"></i> Logout</a>
        </form>

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
              <li> Welcome, {{Auth::user()->firstname}} {{Auth::user()->lastname}}</li>
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
                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

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
          <a href="{{route('home')}}" class="logo">TECHBARN</a>
        </div>
      </div>
      <div class="col-lg-6">
        <nav class="header__menu">
          <ul>
            <li class="active"><a href="#"></a></li>
            <li><a href="#"></a></li>
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
            <span>Menu</span>
          </div>
          <ul>
            <li><a href="">Suggestions</a></li>
            <li><a href="{{route('purchase-order')}}">Purchases</a></li>
            <li><a href="{{route('view-wishlist')}}">Wishlists</a></li>
            <li><a href="{{route('order-looked')}}">Products Looked</a></li>



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

      </div>
    </div>
  </div>
</section>



@foreach($orders as $product)
<div class="banner">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="banner__pic">
          <img src="assets/img/featured/{{$product->product->product_image}}" alt="" />
        </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="banner__pic">


                 <label class="col-md-6 control-label">{{$product->product_name}}</label>
                 <label class="col-md-6 control-label">₦{{$product->product->new_price}}</label>
                 <label class="col-md-6 control-label">Quantity :  1</label>


        </div>
      </div>

    </div>
  </div>
</div>
@endforeach






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
