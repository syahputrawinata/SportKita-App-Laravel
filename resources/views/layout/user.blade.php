<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SportKita</title>
    <link rel="shortcut icon" href="./assets/images_readme/logo/logoWhite.png">
    <link href="{{ asset('assets/css/user/home/style.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/user/product/detail.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
</head>
<body>
    <div id="page" class="site">

        <aside class="site-off desktop-hide">
            <div class="off-canvas">
                <div class="canvas-head flexitem">
                    <div class="logo"><a href="{{route('user.index')}}"><span class="circle"></span>SportKita</a></div>
                    <a href="#" class="t-close flexcenter"><i class="ri-close-line"></i></a>
                </div>
                <div class="categories"></div>
                <nav></nav>
                <div class="thetop-nav"></div>
            </div>
        </aside>

        <header>
            <!-- header top -->
            <div class="header-top mobile-hide">
                <div class="container">
                    <div class="wrapper flexitem">
                        <div class="left">
                            <ul class="flexitem main-links">
                                <li class="links">
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Wish List</a></li>
                                </li>
                            </ul>
                        </div>
                        <div class="right">
                            <ul class="flexitem main-links">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Order Review</a></li>
                                <li><a href="{{route('logout')}}">Logout</a></li>   
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- header-nav -->
            <div class="header-nav">
                <div class="container">
                    <div class="wrapper flexitem">
                        <a href="#" class="trigger desktop-hide"><span class="i ri-menu-2-line"></span></a>
                        <div class="left flexitem">
                            <div class="logo"><a href="{{route('user.index')}}"><span class="circle"></span>SportKita</a></div>
                            <nav class="mobile-hide">
                                <ul class="flexitem second-links">
                                    <li><a href="{{route('user.index')}}">Home</a></li>
                                    <li><a href="#">Shop</a></li>
                                    <li><a href="#">Shipping costs</a></li>
                                    <li><a href="#">About Us</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="right">
                            <ul class="flexitem second-links">
                                <!-- wish list icon and number-->
                                <li class="iscart"><a href="#">
                                        <div class="icon-large"><i class="ri-heart-line"></i></div>
                                        <div class="fly-item"><span class="item-number">#</span></div>
                                    </a>
                                    <!-- wish list content -->
                                    <div class="wish-list">
                                        <div class="content">
                                            <div class="wish-list-head">
                                                # desired products
                                            </div>
                                            <div class="wish-list-body">
                                                <ul class="products wish">
                                                    <li class="item">
                                                        <div class="thumbnail object-cover">
                                                            <a href="#"><img src="./assets/images/ejemplo.png"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="item-content">
                                                            <p><a href="#">product name</a></p>
                                                            <span class="price">
                                                                <span>$0.00</span>
                                                            </span>
                                                        </div>
                                                        <a href="#" class="item-remove"><i
                                                                class="ri-close-line"></i></a>
                                                    </li>
                                                    <li class="item">
                                                        <div class="thumbnail object-cover">
                                                            <a href="#"><img src="./assets/images/ejemplo.png"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="item-content">
                                                            <p><a href="#">product name</a></p>
                                                            <span class="price">
                                                                <span>$0.00</span>
                                                            </span>
                                                        </div>
                                                        <a href="#" class="item-remove"><i
                                                                class="ri-close-line"></i></a>
                                                    </li>
                                                    <li class="item">
                                                        <div class="thumbnail object-cover">
                                                            <a href="#"><img src="./assets/images/ejemplo.png"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="item-content">
                                                            <p><a href="#">product name</a></p>
                                                            <span class="price">
                                                                <span>$0.00</span>
                                                            </span>
                                                        </div>
                                                        <a href="#" class="item-remove"><i
                                                                class="ri-close-line"></i></a>
                                                    </li>
                                                    <li class="item">
                                                        <div class="thumbnail object-cover">
                                                            <a href="#"><img src="./assets/images/ejemplo.png"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="item-content">
                                                            <p><a href="#">product name</a></p>
                                                            <span class="price">
                                                                <span>$0.00</span>
                                                            </span>
                                                        </div>
                                                        <a href="#" class="item-remove"><i
                                                                class="ri-close-line"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="wish-list-footer">
                                                <div class="actions">
                                                    <a href="./lista-de-deseos.html" class="secondary-button">See Wish List</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- shopping cart icon and number -->
                                <li class="iscart"><a href="#">
                                        <div class="icon-large">
                                            <i class="ri-shopping-cart-line"></i>
                                            <div class="fly-item"><span class="item-number">#</span></div>
                                        </div>
                                        <div class="icon-text">
                                            <div class="mini-text">Total</div>
                                            <div class="cart-total">$0.00</div>
                                        </div>
                                    </a>
                                    <!-- shopping cart content -->
                                    <div class="mini-cart">
                                        <div class="content">
                                            <div class="cart-head">
                                                # books in the cart
                                            </div>
                                            <div class="cart-body">
                                                <ul class="products mini">
                                                    <li class="item">
                                                        <div class="thumbnail object-cover">
                                                            <a href="#"><img src="./assets/images/ejemplo.png"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="item-content">
                                                            <p><a href="#">product name</a></p>
                                                            <span class="price">
                                                                <span>$0.00</span>
                                                                <!-- amount -->
                                                                <span class="fly-item"><span>1x</span></span>
                                                            </span>
                                                        </div>
                                                        <a href="#" class="item-remove"><i
                                                                class="ri-close-line"></i></a>
                                                    </li>
                                                    <li class="item">
                                                        <div class="thumbnail object-cover">
                                                            <a href="#"><img src="./assets/images/ejemplo.png"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="item-content">
                                                            <p><a href="#">product name</a></p>
                                                            <span class="price">
                                                                <span>$0.00</span>
                                                                <!-- amount -->
                                                                <span class="fly-item"><span>1x</span></span>
                                                            </span>
                                                        </div>
                                                        <a href="#" class="item-remove"><i
                                                                class="ri-close-line"></i></a>
                                                    </li>
                                                    <li class="item">
                                                        <div class="thumbnail object-cover">
                                                            <a href="#"><img src="./assets/images/ejemplo.png"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="item-content">
                                                            <p><a href="#">product name</a></p>
                                                            <span class="price">
                                                                <span>$0.00</span>
                                                                <!-- amount -->
                                                                <span class="fly-item"><span>1x</span></span>
                                                            </span>
                                                        </div>
                                                        <a href="#" class="item-remove"><i
                                                                class="ri-close-line"></i></a>
                                                    </li>
                                                    <li class="item">
                                                        <div class="thumbnail object-cover">
                                                            <a href="#"><img src="./assets/images/ejemplo.png"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="item-content">
                                                            <p><a href="#">product name</a></p>
                                                            <span class="price">
                                                                <span>$0.00</span>
                                                                <!-- amount -->
                                                                <span class="fly-item"><span>1x</span></span>
                                                            </span>
                                                        </div>
                                                        <a href="#" class="item-remove"><i
                                                                class="ri-close-line"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="cart-footer">
                                                <div class="subtotal">
                                                    <p>Subtotal</p>
                                                    <p><strong>$0.00</strong></p>
                                                </div>
                                                <div class="actions">
                                                    <a href="./revision-pedido.html"
                                                        class="primary-button">Verify Order</a>
                                                    <a href="./carrito-compras.html" class="secondary-button">Show Car</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- header main -->
            <div class="header-main mobile-hide">
                <div class="container">
                    <div class="wrapper flexitem">
                        <!-- category list -->
                        <div class="left">
                            <div class="ctg-cat">
                                <div class="ctg-head">
                                    <div class="main-text">Categories</div>
                                    <div class="mini-text mobile-hide">Total # products</div>
                                    <a href="#" class="ctg-trigger mobile-hide">
                                        <i class="ri-menu-3-line ri-xl"></i>
                                        <i class="ri-close-line ri-xl"></i>
                                    </a>
                                </div>
                                <div class="ctg-menu">
                                    <ul class="second-links">
                                        <li class="has-child category">
                                            <a href="#">
                                                <div class="icon-large"><i class="ri-book-2-line"></i></div>
                                                Category
                                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                            </a>
                                            <ul>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-child category">
                                            <a href="#">
                                                <div class="icon-large"><i class="ri-book-2-line"></i></div>
                                                Category
                                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                            </a>
                                            <ul>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-child category">
                                            <a href="#">
                                                <div class="icon-large"><i class="ri-book-2-line"></i></div>
                                                Category
                                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                            </a>
                                            <ul>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-child category">
                                            <a href="#">
                                                <div class="icon-large"><i class="ri-book-2-line"></i></div>
                                                Category
                                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                            </a>
                                            <ul>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-child category">
                                            <a href="#">
                                                <div class="icon-large"><i class="ri-book-2-line"></i></div>
                                                Category
                                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                            </a>
                                            <ul>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-child category">
                                            <a href="#">
                                                <div class="icon-large"><i class="ri-book-2-line"></i></div>
                                                Category
                                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                            </a>
                                            <ul>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-child category">
                                            <a href="#">
                                                <div class="icon-large"><i class="ri-book-2-line"></i></div>
                                                Category
                                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                            </a>
                                            <ul>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-child category">
                                            <a href="#">
                                                <div class="icon-large"><i class="ri-book-2-line"></i></div>
                                                Category
                                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                            </a>
                                            <ul>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-child category">
                                            <a href="#">
                                                <div class="icon-large"><i class="ri-book-2-line"></i></div>
                                                Category
                                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                            </a>
                                            <ul>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-child category">
                                            <a href="#">
                                                <div class="icon-large"><i class="ri-book-2-line"></i></div>
                                                Category
                                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                            </a>
                                            <ul>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-child category">
                                            <a href="#">
                                                <div class="icon-large"><i class="ri-book-2-line"></i></div>
                                                Category
                                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                            </a>
                                            <ul>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                                <li><a href="#">subcategory</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- search bar -->
                        <div class="right">
                            <div class="search-box">
                                <form action="" class="search">
                                    <span class="icon-large"><i class="ri-search-line"></i></span>
                                    <input type="search" placeholder="Search for a product">
                                    <button type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container mt-5">
                @yield('content')
                @yield('scripts')
        </div>

        <footer>
            <!-- newsletter -->
            <div class="newsletter">
                <div class="container">
                    <div class="wrapper">
                        <div class="box">
                            <div class="content">
                                <h3>Subscribe to our newsletter</h3>
                                <p>Receive email updates on our latest books and
                                    <strong> special offers</strong>
                                </p>
                            </div>
                            <form action="" class="search">
                                <span class="icon-large"><i class="ri-mail-line"></i></span>
                                <input type="mail" placeholder="Email" required>
                                <button type="submit">Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- widgets -->
            <div class="widgets">
                <div class="container">
                    <div class="wrapper">
                        <div class="flexwrap">
                            <div class="row">
                                <div class="item mini-links">
                                    <!-- column header  -->
                                    <h4>Title</h4>
                                    <ul class="flexcol">
                                        <li><a href="#">Subtitle</a></li>
                                        <li><a href="#">Subtitle</a></li>
                                        <li><a href="#">Subtitle</a></li>
                                        <li><a href="#">Subtitle</a></li>
                                        <li><a href="#">Subtitle</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="item mini-links">
                                    <!-- column header  -->
                                    <h4>Title</h4>
                                    <ul class="flexcol">
                                        <li><a href="#">Subtitle</a></li>
                                        <li><a href="#">Subtitle</a></li>
                                        <li><a href="#">Subtitle</a></li>
                                        <li><a href="#">Subtitle</a></li>
                                        <li><a href="#">Subtitle</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="item mini-links">
                                    <!-- column header  -->
                                    <h4>Title</h4>
                                    <ul class="flexcol">
                                        <li><a href="#">Subtitle</a></li>
                                        <li><a href="#">Subtitle</a></li>
                                        <li><a href="#">Subtitle</a></li>
                                        <li><a href="#">Subtitle</a></li>
                                        <li><a href="#">Subtitle</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="item mini-links">
                                    <!-- column header  -->
                                    <h4>Title</h4>
                                    <ul class="flexcol">
                                        <li><a href="#">Subtitle</a></li>
                                        <li><a href="#">Subtitle</a></li>
                                        <li><a href="#">Subtitle</a></li>
                                        <li><a href="#">Subtitle</a></li>
                                        <li><a href="#">Subtitle</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- socials -->
            <div class="footer-info">
                <div class="container">
                    <div class="wrapper">
                        <div class="flexcol">
                            <div class="logo">
                                <a href="{{route('user.index')}}"><span class="circle"></span>SportKita</a>
                            </div>
                            <div class="socials">
                                <ul class="flexitem">
                                    <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                    <li><a href="#"><i class="ri-facebook-line"></i></a></li>
                                    <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                    <li><a href="#"><i class="ri-linkedin-line"></i></a></li>
                                    <li><a href="#"><i class="ri-youtube-line"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- I clarify that these rights are by way of example nothing more -->
                        <p class="mini-text">Copyright 2025 © .SportKita. All rights reserved.</p>
                    </div>
                </div>
            </div>

            <!-- navigation buttons for responsive mode -->
            <div class="menu-bottom desktop-hide">
                <div class="container">
                    <div class="wrapper">
                        <nav>
                            <ul class="flexitem">
                                <li>
                                    <a href="#">
                                        <i class="ri-bar-chart-line"></i>
                                        <span>Trends</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ri-user-6-line"></i>
                                        <span>Account</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="wish-trigger">
                                        <i class="ri-heart-line"></i>
                                        <span>Wanted</span>
                                        <div class="fly-item">
                                            <!-- accountant -->
                                            <span class="item-number">#</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="t-search">
                                        <i class="ri-search-line"></i>
                                        <span>Search</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="cart-trigger">
                                        <i class="ri-shopping-cart-line"></i>
                                        <span>Cart</span>
                                        <div class="fly-item">
                                            <!-- accountant -->
                                            <span class="item-number">#</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- bottom search desktop-->
            <div class="search-bottom desktop-hide">
                <div class="container">
                    <div class="wrapper">
                        <form action="" class="search">
                            <a href="#" class="t-close search-close flexcenter"><i class="ri-close-line"></i></a>
                            <span class="icon-large"><i class="ri-search-line"></i></span>
                            <input type="search" placeholder="Search for a product" required>
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- overlay -->
            <div class="overlay"></div>

            <!-- bottom to go back up -->
            <div class="backtotop">
                <a href="#" class="flexcol">
                    <i class="ri-arrow-up-line"></i>
                    <span>Go up</span>
                </a>
            </div>
        </footer>
        
    </div>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="./js/index.js"></script>
    <script src="{{ asset('assets/js/user/product/detail.js') }}"></script>
</body>
</html>