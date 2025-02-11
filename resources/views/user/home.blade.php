@extends('layout.user')
@section('content')
        <main>
            <!-- slider -->
            <div class="slider">
                <div class="container">
                    <div class="wrapper">
                        <div class="myslider swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="image object-cover">
                                            <img src="../assets/img/slider/66-best-sneakers-001-15275042-main.webp" alt="Gambar">
                                        </div>
                                        <div class="text-content flexcol">
                                            <h4>Hi</h4>
                                            <h2><span>There!</span><br>SportKita</h2>
                                            <a href="#" class="primary-button">Action</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="image object-cover">
                                            <img src="../assets/img/slider/adidas-ozweego-21158485-1080.webp" alt="Gambar">
                                        </div>
                                        <div class="text-content flexcol">
                                            <h4>Text</h4>
                                            <h2><span>Text</span><br>Text</h2>
                                            <a href="#" class="primary-button">Action</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="image object-cover">
                                        <img src="../assets/img/slider/asics-gel-1130-21196676-1080.webp" alt="Gambar">
                                        </div>
                                        <div class="text-content flexcol">
                                            <h4>Text</h4>
                                            <h2><span>Text</span><br>Text</h2>
                                            <a href="#" class="primary-button">Action</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="image object-cover">
                                        <img src="../assets/img/slider/new-balance-9060-21208162-1080.webp" alt="Gambar">
                                        </div>
                                        <div class="text-content flexcol">
                                            <h4>Text</h4>
                                            <h2><span>Text</span><br>Text</h2>
                                            <a href="#" class="primary-button">Action</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- image tracking -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- brands -->
            <div class="brands">
                <div class="container">
                    <div class="wrapper flexitem">
                        <!-- I leave some examples here, by the way I share a page to remove the funds from brand images (https://www.remove.bg/es) -->
                        <div class="item">
                            <a href="#0">
                                <img src="../assets/img/brand/nike.png" alt="Gambar">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#0">
                                <img src="../assets/img/brand/adidas.png" alt="Gambar">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#0">
                                <img src="../assets/img/brand/Asics_Logo.png" alt="Gambar">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#0">
                                <img src="../assets/img/brand/HOKA-Logo.png" alt="Gambar">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#0">
                                <img src="../assets/img/brand/new-balance.png" alt="Gambar">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#0">
                                <img src="../assets/img/brand/Puma_logo.png" alt="Gambar">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- trending books -->
            <div class="trending">
                <div class="container">
                    <div class="wrapper">
                        <!-- section title  -->
                        <div class="sectop flexitem">
                            <h2><span class="circle"></span><span>Trending Products</span></h2>
                        </div>
                        <div class="column">
                            <div class="flexwrap">
                                <!-- main trending product -->
                                <div class="row products big">
                                    <div class="item">
                                        <div class="ofter">
                                            <p>Product on Offer</p>
                                        </div>
                                        <div class="media">
                                            <div class="image">
                                                <a href="#">
                                                    <img src="../assets/img/slider/66-best-sneakers-001-15275042-main.webp" alt="">
                                                </a>
                                            </div>
                                            <div class="hoverable">
                                                <ul>
                                                    <li class="active"><a href="#"><i class="ri-heart-line"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- discount rate -->
                                            <div class="discount circle flexcenter"><span>0%</span></div>
                                        </div>
                                        <div class="content">
                                            <div class="rating">
                                                <div class="stars"></div>
                                                <!-- number of references inside "()" -->
                                                <span class="mini-text">(#)</span>
                                            </div>
                                            <h3 class="main-links"><a href="#">Nike Air Jordan 1</a>
                                            </h3>
                                            <div class="price">
                                                <!-- price with discount -->
                                                <span class="current">$0.00</span>
                                                <!-- original price -->
                                                <span class="normal mini-text">$0.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- trending side products -->
                                <div class="row products mini-trending">
                                    <div class="item">
                                        <div class="media">
                                            <div class="thumbnail object-cover">
                                                <a href="#">
                                                    <img src="../assets/img/slider/66-best-sneakers-001-15275042-main.webp" alt="gambar">
                                                </a>
                                            </div>
                                            <div class="hoverable">
                                                <ul>
                                                    <li class="active"><a href="#"><i class="ri-heart-line"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="discount circle flexcenter"><span>0%</span></div>
                                        </div>
                                        <div class="content">
                                            <h3 class="main-links"><a href="#">Nike Air Jordan 1</a></h3>
                                            <div class="rating">
                                                <div class="stars"></div>
                                                <span class="mini-text">(#)</span>
                                            </div>
                                            <div class="price">
                                                <span class="current">$0.00</span>
                                                <span class="normal mini-text">$0.00</span>
                                            </div>
                                            <div class="mini-text">
                                                <!-- number of products sold -->
                                                <p># sold</p>
                                                <p>Free shipping</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="media">
                                            <div class="thumbnail object-cover">
                                                <a href="#">
                                                    <img src="../assets/img/slider/asics-gel-1130-21196676-1080.webp" alt="gambar">
                                                </a>
                                            </div>
                                            <div class="hoverable">
                                                <ul>
                                                    <li class="active"><a href="#"><i class="ri-heart-line"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="discount circle flexcenter"><span>0%</span></div>
                                        </div>
                                        <div class="content">
                                            <h3 class="main-links"><a href="#">Asics Gel 1130</a></h3>
                                            <div class="rating">
                                                <div class="stars"></div>
                                                <span class="mini-text">(#)</span>
                                            </div>
                                            <div class="price">
                                                <span class="current">$0.00</span>
                                                <span class="normal mini-text">$0.00</span>
                                            </div>
                                            <div class="mini-text">
                                                <!-- number of products sold -->
                                                <p># sold</p>
                                                <p>Free shipping</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row products mini-trending">
                                    <div class="item">
                                        <div class="media">
                                            <div class="thumbnail object-cover">
                                                <a href="#">
                                                    <img src="../assets/img/slider/adidas-ozweego-21158485-1080.webp" alt="">
                                                </a>
                                            </div>
                                            <div class="hoverable">
                                                <ul>
                                                    <li class="active"><a href="#"><i class="ri-heart-line"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="discount circle flexcenter"><span>0%</span></div>
                                        </div>
                                        <div class="content">
                                            <h3 class="main-links"><a href="#">Adidas Ozweego</a></h3>
                                            <div class="rating">
                                                <div class="stars"></div>
                                                <span class="mini-text">(#)</span>
                                            </div>
                                            <div class="price">
                                                <span class="current">$0.00</span>
                                                <span class="normal mini-text">$0.00</span>
                                            </div>
                                            <div class="mini-text">
                                                <!-- number of products sold -->
                                                <p># sold</p>
                                                <p>Free shipping</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="media">
                                            <div class="thumbnail object-cover">
                                                <a href="#">
                                                    <img src="../assets/img/slider/new-balance-9060-21208162-1080.webp" alt="gambar">
                                                </a>
                                            </div>
                                            <div class="hoverable">
                                                <ul>
                                                    <li class="active"><a href="#"><i class="ri-heart-line"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="discount circle flexcenter"><span>0%</span></div>
                                        </div>
                                        <div class="content">
                                            <h3 class="main-links"><a href="#">New Balance 9060</a></h3>
                                            <div class="rating">
                                                <div class="stars"></div>
                                                <span class="mini-text">(#)</span>
                                            </div>
                                            <div class="price">
                                                <span class="current">$0.00</span>
                                                <span class="normal mini-text">$0.00</span>
                                            </div>
                                            <div class="mini-text">
                                                <!-- number of products sold -->
                                                <p># sold</p>
                                                <p>Free shipping</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- featured books -->
            <div class="features">
                <div class="container">
                    <div class="wrapper">
                        <div class="sectop flexitem">
                            <h2><span class="circle"></span><span>Featured Products</span></h2>
                            <div class="second-links">
                                <a href="#" class="view-all">Show more<i class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                        <div class="column">
                            <div class="products main flexwrap">
                            @foreach ($products as $product)
                                <div class="item">
                                    <div class="media">
                                        <div class="thumbnail object-cover">
                                            <a href="{{route('user.detailproductIndex', $product->id)}}">
                                                <img src="{{ asset('storage/' . $product->image) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="hoverable">
                                            <ul>
                                                <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="discount circle flexcenter"><span>0%</span></div>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <div class="stars"></div>
                                            <span class="mini-text">(#)</span>
                                        </div>
                                        <h3><a href="{{route('user.detailproductIndex', $product->id)}}">{{$product->name}}</a></h3>
                                        <div class="price">
                                            <div class="current"> Rp. {{ number_format($product->price, 0, ',', '.') }}</div>
                                            <div class="normal mini-text"> Rp. {{ number_format($product->price, 0, ',', '.') }}</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection