<div>
        <section class="breadcrumb-section set-bg" data-setbg="{{asset('assets/front/img/breadcrumb.jpg')}}" wire:ignore>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Vegetable’s Package</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <a href="./index.html">Vegetables</a>
                            <span>Vegetable’s Package</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                    {{-- ==================================================================== --}}
                            @if(Session::get('product_det'))
                            <img class="product__details__pic__item--large"
                                src="{{asset('images/products/'.Session::get('product_det')->image)}}" alt="">
                             {{-- @else
                                @foreach ($pro_details as $pro_detail)
                                      <img class="product__details__pic__item--large"
                                        src="{{asset('images/products/'.$pro_detail->image)}}" alt="">
                                 @endforeach
                            @endif --}}
                    {{-- ==================================================================== --}}

                        </div>

                        <div class="product__details__pic__slider owl-carousel" wire:ignore>
                    {{-- ==================================================================== --}}

                            @foreach ($products as $product )
                                            <img data-imgbigurl="{{asset('assets/front/img/product/details/product-details-2.jpg')}}"
                                            src="{{asset('images/products/'.$product->image)}}" alt="">
                            @endforeach
                    {{-- ==================================================================== --}}


                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                    {{-- ==================================================================== --}}

                        @if(Session::get('product_det'))
                              <h3>{{Session::get('product_det')->name}}</h3>
                        @else
                            @foreach ($pro_details as $pro_detail)
                            <h3>{{$pro_detail->name}}</h3>
                            @endforeach
                        @endif
                    {{-- ==================================================================== --}}

                        <div class="product__details__rating">
                    {{-- ==================================================================== --}}

                        @if(Session::get('product_det'))
                            @for ($i = 1; $i <=Session::get('product_det')->rate ; $i++)
                                <i class="fa fa-star"></i>
                            @endfor
                      @else
                          @foreach ($pro_details as $pro_detail)
                          @for ($i = 1; $i <=$pro_detail->rate ; $i++)
                                <i class="fa fa-star"></i>
                            @endfor
                          @endforeach
                      @endif
                    {{-- ==================================================================== --}}


                            <span>(18 reviews)</span>
                        </div>
                        {{-- @foreach ($products as  $product)
                        <div class="product__details__price">${{$product->id}}</div>

                        @endforeach --}}
                    {{-- ==================================================================== --}}

                        @if(Session::get('product_det'))
                             <div class="product__details__price">${{Session::get('product_det')->price}}</div>
                      @else
                            @foreach ($pro_details as $pro_detail)
                                <div class="product__details__price">${{$pro_detail->price}}</div>
                            @endforeach
                        @endif
                        {{-- <div class="product__details__price">${{$products->id}}</div> --}}
                    {{-- ==================================================================== --}}

                        @if(Session::get('product_det'))

                            <p>{{Session::get('product_det')->desc}}.</p>
                            <div class="product__details__quantity">
                        @else
                          @foreach ($pro_details as $pro_detail) --
                             <p>{{$pro_detail->desc}}.</p>

                            @endforeach
                        @endif
                    {{-- ==================================================================== --}}

                            <div class="quantity">
                                <div class="pro-qty">
                                        <input type="button" class="dec qtybtn" min="1" wire:click.prevent="decrement({{Session::get('product_det')->id}})" step='1'  value="-">
                                            <button  wire:model="quntity">{{$quntity}}</button>
                                        <input type="button" class="inc qtybtn" min="1" step='1' wire:click.ignore="increment({{Session::get('product_det')->id}})"  value="+">
                                </div>
                            </div>
                        </div>
                    {{-- ==================================================================== --}}

                        @if(Session::get('product_det'))

                        <a  wire:click.prevent="add({{Session::get('product_det')->id}})" href="#" class="primary-btn">ADD TO CARD</a>
                        @else
                        @foreach ($pro_details as $pro_detail)
                          <a href="{{route('cart.add',$pro_detail->id) }}"wire:click.prevent="add({{$pro_detail->id}}) class="primary-btn">ADD TO CARD</a>
                        @endforeach
                    @endif
                    @include('front.alert.alert')
                    {{-- ==================================================================== --}}

                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        <ul>
                            <li><b>Availability</b> <span>In Stock</span></li>
                            <li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li>
                            <li><b>Weight</b> <span>0.5 kg</span></li>
                    {{-- ==================================================================== --}}
                        @if(Session::get('product_det'))
                              <li><b>Quntity</b> <span>{{ Session::get('product_det')->quntity }}</span></li>
                        @else
                        <li><b>Quntity</b> <span>{{ $pro_detail->quntity }}</span></li>
                        @endif
                    {{-- ========================================================================================= --}}
                            <li><b>Share on</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Description</a>
                            </li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p>{{-- ==================================================================== --}}
                                        @if(Session::get('product_det'))
                                              <p> <span>{{ Session::get('product_det')->desc }}</p>
                                        @else
                                        <p>{{ $pro_detail->desc }}</p>
                                        @endif
                                    {{-- ========================================================================================= --}}.</p>
                                </div>
                            </div>
                            {{-- <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                        Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                        Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                        sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                        eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                        sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                        diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                        ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                        Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                        Proin eget tortor risus.</p>
                                    <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem
                                        ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet
                                        elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum
                                        porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus
                                        nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>
                                </div>
                            </div> --}}
                            {{-- <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                        Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                        Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                        sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                        eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                        sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                        diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                        ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                        Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                        Proin eget tortor risus.</p>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Related Product</h2>
                    </div>
                </div>
            </div>
            <div class="row">


                @foreach ($products as $product )
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{asset('images/products/'.$product->image)}}" wire:ignore>
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="{{ route('cart.add',$product->id) }}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">{{ $product->name }}</a></h6>
                            <h5>${{ $product->price }}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

</div>
