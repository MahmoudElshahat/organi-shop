<div>
    @include('front.includes.botom-header')
         <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                    @foreach ($data_carts as $data )

                                <tr>

                                    <td class="shoping__cart__item">
                                        <img src="{{asset('images/products/'.$data->image)}}" alt="">
                                        <h5>{{$data->name}}</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                            {{-- =========== price column ============================== --}}
                                        {{-- {{$data-> descount_Type }} --}}
                                        <p>price :{{$data->price}}</p>
                                        <p>sale :{{$data->sale}}</p>
                                        <p>descount :{{$data->descount_Type}}</p>

                                        @If($data->descount_Type == 0)

                                           $ {{$data->price -  $data->sale}}

                                          @elseif($data->descount_Type != 0)

                                        {{-- actual price - (actual price * (discount / 100)) --}}

                                           $ {{$data->price - ($data->price*($data->sale / 100))}}

                                    @endif
                            {{-- ================================================================== --}}
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                            <input type="button" class="dec qtybtn" min="1" wire:click.lazy="decrement({{$data->id}})" step='1'  value="-">
                                                <button  wire:model="quntity">{{$data->qty}}</button>
                                            <input type="button" class="inc qtybtn" min="1" step='1' wire:click.lazy="increment({{$data->id}})"  value="+">

                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">

                                    {{-- ============ total product  price ==================== --}}
                                        @If($data->descount_Type == 0)

                                           $ {{($data->price -  $data->sale) * $data->qty }}

                                          @elseif($data->descount_Type != 0 && $data->sale !=0)

                                            $ {{($data->price - ($data->price*($data->sale / 100))) * $data->qty}}

                                        @endif


                                    {{-- ================================================== --}}
                                    </td>
                                    <td class="shoping__cart__item__close">


                                        <a wire:click.prevent="removeCart({{$data->id}})">
                                             <span class="icon_close"> </span>
                                        </a>



                                    </td>


                                </tr>
                                    @endforeach


                            </tbody>
                        </table>
                        {{-- @include('front.alert.alert') --}}

                        {{-- @livewire('notification') --}}

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="{{route('home')}}" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        {{-- <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Upadate Cart</a> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Subtotal<span>$ {{$total_cart_price}}</span></li>

                            <li>Total <span>${{$total_cart_price}}</span></li>
                        </ul>
                        <a href="{{ route('check.out') }}" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>






</div>
