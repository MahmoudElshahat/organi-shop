<div>

    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>{{__('messages.All_departments')}}</span>
                        </div>
                        {{-- ############## side bar #################### --}}
                            @include('front.includes.sidebar')

                        {{-- ############################################ --}}
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        {{-- =================== search =============== --}}

                        @livewire('search')

                        {{-- =================================== --}}
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="{{asset('assets/front/img/hero/banner.jpg')}}">
                        <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable <br />100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="{{route('shop')}}" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



  <section class="categories">
        <div class="container">
            <div class="row">

                <div class="categories__slider owl-carousel" wire:ignore>

                    @foreach ($products as $product )
                    <a  wire:click="shop_details({{$product->id}})">
                        <div class="col-lg-3">
                         <div wire:ignore="shop_details" class="categories__item set-bg" alt="product image" data-setbg="{{asset('images/products/'.$product->image)}}">
                            <h5>{{$product->name}}</h5>
                        </div>
                      </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->

    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>{{__('messages.Featured_Product')}}</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">
                                <a wire:click="s_pro('')">All</a>
                            </li>
                            {{-- ============ categories name list =================== --}}
                            @foreach ($m_categories as $m_categori )
                                <li data-filter=".oranges">
                                    <a wire:click.ignore="s_pro({{$m_categori->id}})">
                                        {{$m_categori -> name}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            {{-- @include('front.alert.alert') --}}
           
            <div class="row featured__filter">

                    {{-- ================== pro by section ========================== --}}
                     @foreach ($cat_product as $product)
                            <div  class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                                <div class="featured__item">
                                    <a href=""></a>

                                    <div class="featured__item__pic set-bg" wire:ignore >
                                            <img src="{{asset('images/products/'.$product->image)}}" alt="">
                                        <ul class="featured__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                            <li><a href="" wire:click.prevent="add({{$product-> id}})"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="featured__item__text">
                                        <h6><a href="#">{{$product->name}}</a></h6>
                                        <h5>
                                            @if($product->descount_Type !=0)
                                            ${{$product->price - $product->sale}}
                                            @else
                                                $ {{$product->price - $product->sale * .100}}

                                            @endif


                                        </h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    {{-- @else --}}

                    {{-- ============================= --}}
                 {{-- @if($show_section==true)
                      @foreach ($products as $product)

                            <div  class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                                <div class="featured__item" >
                                    <div class="featured__item__pic set-bg"  >
                                        <img src="{{asset('images/products/'.$product->image)}}" alt="">
                                        <ul class="featured__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                            <li><a href="" wire:click="add({{$product-> id}})"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="featured__item__text">
                                        <h6><a href="#">{{$product->name}}</a></h6>
                                        <h5>
                                            @if($product->descount_Type !=0)
                                            ${{$product->price - $product->sale}}
                                            @else
                                                $ {{$product->price - $product->sale * .100}}

                                            @endif


                                        </h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif --}}

            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->

    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{asset('assets/front/img/banner/banner-1.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{asset('assets/front/img/banner/banner-2.jpg')}}" alt="banner">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
   <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">

                    {{-- =========================================================    --}}
                        <h4>Latest Products</h4>
                        <div class="latest-product__slider owl-carousel">

                            <div class="latest-prdouct__slider__item">

                               @foreach ($latest_product as $last_product )

                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('images/products/'.$last_product->image)}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$last_product->name}}</h6>
                                        <span>$
                                             @if($last_product->descount_Type !=0)
                                            {{$last_product->price - $last_product->sale}}
                                            @else
                                                {{$last_product->price - $last_product->sale * .100}}

                                            @endif

                                        </span>
                                    </div>
                                </a>
                                @endforeach
                            </div>


                {{-- ============================================== --}}

                            <div class="latest-prdouct__slider__item">
                        @foreach ($latest_product as $last_product )

                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('images/products/'.$last_product->image)}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$last_product->name}}</h6>
                                        <span>$
                                             @if($last_product->descount_Type !=0)
                                            {{$last_product->price - $last_product->sale}}
                                            @else
                                                {{$last_product->price - $last_product->sale * .100}}

                                            @endif


                                        </span>
                                    </div>
                                </a>
                            @endforeach

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Top Rated Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">

                            @foreach ($topRate_product as $top_rate )


                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('images/products/'.$top_rate->image)}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$top_rate-> name}}</h6>
                                        <span>$
                                            @if($top_rate-> descount_Type !=0)
                                            {{$top_rate-> price - $top_rate-> sale}}
                                            @else
                                                {{$top_rate-> price - $top_rate-> sale * .100}}

                                            @endif
                                        </span>
                                    </div>
                                </a>
                                 @endforeach

                            </div>
                            <div class="latest-prdouct__slider__item">
                                 @foreach ($topRate_product as $top_rate )
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('images/products/'.$top_rate->image)}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$top_rate-> name}}</h6>
                                        <span>$
                                                 @if($top_rate-> descount_Type !=0)
                                            {{$top_rate-> price - $top_rate-> sale}}
                                            @else
                                                {{$top_rate-> price - $top_rate-> sale * .100}}

                                            @endif



                                        </span>
                                    </div>
                                </a>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Review Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                @foreach ($review_products as $rview_product )

                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">

                                        <img src="{{asset('images/products/'.$rview_product->image)}}" alt="">

                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$rview_product->name}}</h6>
                                        <span>$
                                             @if($rview_product-> descount_Type !=0)
                                            {{$rview_product-> price - $rview_product-> sale}}
                                            @else
                                                {{$rview_product-> price - $rview_product-> sale * .100}}

                                            @endif



                                        </span>
                                    </div>
                                </a>
                            @endforeach
                            </div>
                            <div class="latest-prdouct__slider__item">
                            @foreach ($review_products as $rview_product )

                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">

                                        <img src="{{asset('images/products/'.$rview_product->image)}}" alt="">

                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$rview_product->name}}</h6>
                                        <span>$
                                             @if($rview_product-> descount_Type !=0)
                                            {{$rview_product-> price - $rview_product-> sale}}
                                            @else
                                                {{$rview_product-> price - $rview_product-> sale * .100}}

                                            @endif



                                        </span>
                                    </div>
                                </a>
                            @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
   <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach ($blogs as $blog )


                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{asset('images/blogs/'.$blog->image)}}" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> {{date('d-m-Y', strtotime($blog->created_at))}}</li>
                                <li><i class="fa fa-comment-o"></i> {{$coment_count}}</li>
                            </ul>
                            <h5><a href="#">{{$blog->name}}</a></h5>
                            <p>{{$blog->desc}}</p>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </section>
</div>
