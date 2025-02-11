@extends('layout.user')
@section('content')
        <main>
            <!-- breadcrumb -->
            <div class="single-product">
                <div class="container">
                    <div class="wrapper">
                        <div class="breadcrumb">
                            <ul class="flexitem">
                                <li><a href="{{route('user.index')}}">Home</a></li>
                                <li><a href="#">Shop</a></li>
                                <li>{{$products->name}}</li>
                            </ul>
                        </div>

                        <!-- books images -->
                        <div class="column">
                            <div class="products one">
                                <div class="flexwrap">
                                    <div class="row">
                                        <div class="item is_sticky">
                                            <div class="price">
                                                <span class="discount">0%<br>OFF</span>
                                            </div>
                                            <div class="big-image">
                                                <div class="big-image-wrapper">
                                                    <div class="image-show">
                                                        <a href="#"><img src="{{ asset('storage/' . $products->image) }}" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="item">
                                            <h1>{{$products->name}}</h1><br>
                                            {{--<h3>info1 - info2</h3>--}}
                                            <div class="content">
                                                <div class="rating">
                                                    <div class="stars"></div>
                                                    <a href="#" class="mini-text"># reseñas</a>
                                                    <a href="" class="add-review mini-text">Add you review</a>
                                                </div>
                                                <div class="stock-sku">
                                                    <span class="available">In Stock</span>
                                                    <span class="sku mini-text">{{$products->stock}}</span>
                                                </div>
                                                <div class="price">
                                                    <span class="current"> Rp. {{ number_format($products->price, 0, ',', '.') }}</span>
                                                    <span class="normal"> Rp. {{ number_format($products->price, 0, ',', '.') }}</span>
                                                </div>
                                                <div class="actions">
                                                    <div class="qty-control flexitem">
                                                        <button class="minus circle">-</button>
                                                        <input type="text" value="1">
                                                        <button class="plus circle">+</button>
                                                    </div>
                                                    <div class="button-cart"><button class="primary-button">Add to cart</button></div>
                                                    <div class="wish-share">
                                                        <ul class="flexitem second-links">
                                                            <li><a href="#">
                                                                    <span class="icon-large"><i
                                                                            class="ri-heart-line"></i></span>
                                                                    <span>Favorites</span>
                                                                </a></li>
                                                            <li><a href="#">
                                                                    <span class="icon-large"><i
                                                                            class="ri-share-line"></i></span>
                                                                    <span>Share</span>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="description collapse">
                                                    <ul>
                                                        <li class="has-child">
                                                            <a href="#0" class="icon-small">Description</a>
                                                            <div class="content">
                                                                <p>{{$products->description}}</p>
                                                            </div>
                                                        </li>
                                                        <li class="has-child">
                                                            <a href="#0" class="icon-small">Information</a>
                                                            <ul class="content">
                                                                <li><span>Title</span> <span>info</span>
                                                                </li>
                                                                <li><span>Title</span> <span>info</span>
                                                                </li>
                                                                <li><span>Title</span> <span>info</span>
                                                                </li>
                                                                <li><span>Title</span> <span>info</span>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="has-child">
                                                            <a href="#" class="icon-small">Reviews <span class="mini-text">{{ $products->reviews->count() }}</span></a>
                                                            <div class="content">
                                                                <div class="reviews">
                                                                    <h4>Customer Reviews</h4>
                                                                    <div class="review-block">
                                                                        <div class="review-block-body">
                                                                            <ul>
                                                                                @foreach($products->reviews as $review)
                                                                                <li class="item">
                                                                                    <div class="review-form">
                                                                                        <p class="person">Review by {{ $review->user->email }}</p>
                                                                                        <p class="mini-text">{{ $review->created_at->format('d/m/Y') }}</p>
                                                                                    </div>
                                                                                    <div class="review-text">
                                                                                        <p>{{ $review->comment }}</p>
                                                                                        <div class="rating">
                                                                                            @for($i = 1; $i <= 5; $i++)
                                                                                                <i class="ri-star-{{ $i <= $review->rating ? 'fill' : 'line' }}"></i>
                                                                                            @endfor
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                @endforeach
                                                                            </ul>
                                                                            <div class="second-links">
                                                                                <a href="#" class="view-all">See all reviews <i class="ri-arrow-right-line"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div id="review-form" class="review-form">
                                                                            <h4>Write your review</h4>
                                                                            @if(auth()->check())
                                                                            <form action="{{route('userproduct.storeReview', $products->id) }}" method="POST">
                                                                                @csrf
                                                                                <div class="rating">
                                                                                    <p>Enter your score</p>
                                                                                    <div class="rate-this">
                                                                                        @for($i = 5; $i >= 1; $i--)
                                                                                        <input type="radio" name="rating" id="star{{ $i }}" value="{{ $i }}" required>
                                                                                        <label for="star{{ $i }}"><i class="ri-star-fill"></i></label>
                                                                                        @endfor
                                                                                    </div>
                                                                                </div>
                                                                                <p>
                                                                                    <label>Review</label>
                                                                                    <textarea name="comment" cols="30" rows="5" required></textarea>
                                                                                </p>
                                                                                <p>
                                                                                    <button type="submit" class="primary-button">Submit review</button>
                                                                                </p>
                                                                            </form>
                                                                            @else
                                                                            <p><a href="{{ route('login') }}">Login</a> untuk memberikan review.</p>
                                                                            @endif
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- related books -->
            <div class="features">
                <div class="container">
                    <div class="wrapper">
                        <div class="sectop flexitem">
                            <h2><span class="circle"></span><span>Other Products</span></h2>
                            <div class="second-links">
                                <a href="#" class="view-all">See more<i class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                        <div class="column">
                            <div class="products main flexwrap">
                                <div class="item">
                                    <div class="media">
                                        <div class="thumbnail object-cover">
                                            <a href="#">
                                                <img src="{{ asset('assets/img/slider/adidas-ozweego-21158485-1080.webp') }}" alt="">
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
                                        <h3><a href="#">Adidas Ozweego</a></h3>
                                        <div class="price">
                                            <div class="current">$0.00</div>
                                            <div class="normal mini-text">$0.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="media">
                                        <div class="thumbnail object-cover">
                                            <a href="#">
                                                <img src="{{ asset('assets/img/slider/new-balance-9060-21208162-1080.webp') }}" alt="">
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
                                        <h3><a href="#">New Balance 9060</a></h3>
                                        <div class="price">
                                            <div class="current">$0.00</div>
                                            <div class="normal mini-text">$0.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="media">
                                        <div class="thumbnail object-cover">
                                            <a href="#">
                                                <img src="{{ asset('assets/img/slider/asics-gel-1130-21196676-1080.webp') }}" alt="">
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
                                        <h3><a href="#">Asics Gel 1130</a></h3>
                                        <div class="price">
                                            <div class="current">$0.00</div>
                                            <div class="normal mini-text">$0.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="media">
                                        <div class="thumbnail object-cover">
                                            <a href="#">
                                                <img src="{{ asset('assets/img/slider/66-best-sneakers-001-15275042-main.webp') }}" alt="">
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
                                        <h3><a href="#">Nike Air Jordan 1</a></h3>
                                        <div class="price">
                                            <div class="current">$0.00</div>
                                            <div class="normal mini-text">$0.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection