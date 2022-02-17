<div>


 <section class="breadcrumb-section set-bg" data-setbg="{{asset('assets/front/img/breadcrumb.jpg')}}" wire:ignore>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Organi Shop</h2>
                        <div class="breadcrumb__option">
                            <a href="{{route('home')}}">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





     <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Department</h4>
                        {{-- ############ sidbarsection ############################## --}}

                            @include('front.includes.sidebar')

                    {{-- ############################################################# --}}

                        </div>
                        <div class="sidebar__item">
                            <h4>Price</h4>
                            <div class="price-range-wrap">
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                    data-min="10" data-max="540" wire:ignore>
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                </div>
                                <div class="range-slider">
                                    <div class="price-input" wire:ignore>
                                        <input type="text" id="minamount">
                                        <input type="text" id="maxamount">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__item sidebar__item__color--option">
                            <h4>Colors</h4>
{{-- =============================================================================== --}}
                            @foreach ($attr_vals as $atr_val )

                             <div class="sidebar__item__color sidebar__item__color--blue">
                                <label for="blue">
                                   <a href="" wire:click.prevent="select_p({{$atr_val->id}})"> {{$atr_val->name}}</a>
                                    <input type="radio" id="white">
                                </label>
                            </div>
                            @endforeach
                        </div>
            {{-- ================================================================================ --}}
                        <div class="sidebar__item">
                            <h4>Popular Size</h4>
                            @foreach ($attr_val_sizes as $attr_val_size )
                                    <div class="sidebar__item__size">
                                        <label for="large">
                                           <a href="" wire:click.prevent="select_p({{$attr_val_size->id}})"> {{$attr_val_size->name}}</a>
                                            <input type="radio" id="large">
                                        </label>
                                    </div>
                            @endforeach
                        </div>
        {{-- ========================================================================== --}}
                        <div class="sidebar__item">
                            <div class="latest-product__text">
                                <h4>Latest Products</h4>
                                <div class="latest-product__slider owl-carousel" wire:ignore>
                                    {{-- ================================================================ --}}
                                    <div class="latest-prdouct__slider__item" >
                                        @foreach ($product_lasts as $product_last)
                                            <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic" >
                                                <img src="{{asset('images/products/'.$product_last->image)}}" alt="">
                                            </div>
                                            <div class="latest-product__item__text" >
                                                <h6>{{$product_last->name}}</h6>
                                                <span>${{$product_last->price}}</span>
                                            </div>
                                        </a>
                                        @endforeach
                                    </div>
                            {{-- ============================================================================ --}}
                                    <div class="latest-prdouct__slider__item">
                                       @foreach ($product_lasts as $product_last)
                                            <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic" >
                                                <img src="{{asset('images/products/'.$product_last->image)}}" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>{{$product_last->name}}</h6>
                                                <span>${{$product_last->price}}</span>
                                            </div>
                                        </a>

                                        @endforeach
                                    </div>
        {{-- ========================================================================== --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Sale Off</h2>
                        </div>
                        <div class="row">
                            <div class="product__discount__slider owl-carousel" wire:ignore>

                                {{-- {{dd($products)--}}
                                @foreach($products as $product)
                                {{-- @if($product->descount_Type !=0) --}}

                                <div class="col-lg-4" >
                                    <div class="product__discount__item" >
                                        <div class="product__discount__item__pic set-bg" >

                                           <img src="{{asset('images/products/'.$product->image)}}" alt="">

                                            <div class="product__discount__percent">
                                                {{$product->sale}}%
                                            </div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>{{$categori_name}}</span>
                                            <h5><a href="#">{{$product->name}}</a></h5>
                                            <div class="product__item__price">$
                                                     @if($product-> descount_Type !=0)
                                                       {{$product-> price - $product-> sale}}
                                                    @else
                                                      {{$product-> price - $product-> sale * .100}}
                                                    @endif
                                                <span>${{$product->price}}</span></div>
                                        </div>
                                    </div>
                                </div>
                                {{-- @endif --}}
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    <span>Sort By</span>
                                    <select wire:model="select">
                                        <option value="">Default</option>
                                        <option value="1">price</option>
                                        @foreach ($attrs as $atrr )
                                            <option value="{{ $atrr->id }}">{{ $atrr->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span>{{$count}}</span> Products found</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <div class="filter__option">
                                    <span class="icon_grid-2x2"></span>
                                    <span class="icon_ul"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($datas as $product)


                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" wire:ignore>
                                    <img src="{{asset('images/products/'.$product->image)}}" alt="">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">{{$product->name}}</a></h6>
                                    <h5>${{$product->price}}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>

                    <div class="product__pagination">
                            {{-- {{$products->links()}}</a>  --}}
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
