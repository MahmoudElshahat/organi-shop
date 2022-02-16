<div>

<section class="breadcrumb-section set-bg" data-setbg="{{asset('assets/front/img/breadcrumb.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
                    </h6>
                </div>
            </div>
            <div class="checkout__form">
                <h4>Billing Details</h4>
                <form action="#" wire:submit.prevent="store">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Fist Name<span>*</span></p>
                                        <input type="text" wire:model="first_name" name="first_name">
                                         @error('first_name')
                                    <span style="color:red">{{__('messages.first_name_is_required')}}</span>

                                    @enderror
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Last Name<span>*</span></p>
                                        <input name="last_name"  wire:model="last_name" type="text">
                                         @error('last_name')
                                    <span style="color:red">{{__('messages.last_name_is_required')}}</span>

                                    @enderror
                                    </div>

                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Country<span>*</span></p>
                                <input name="country"  wire:model="country" type="text">
                                @error('country')
                                    <span style="color:red">{{__('messages.country').'is riquired'}}</span>
                               @enderror
                            </div>

                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <input type="text"  wire:model="adress" name="adress" placeholder="Street Address" class="checkout__input__add">
                                <input type="text" wire:model="Apartment"  name="Apartment" placeholder="Apartment, suite, unite ect (optinal)">
                            @error('adress')
                                    <span style="color:red">{{$message}}</span>
                            @enderror
                            </div>

                            <div class="checkout__input">
                                <p>Town/City<span>*</span></p>
                                <input  wire:model="City" name="City" type="text">
                                 @error('City')
                                    <span style="color:red">{{$message}}</span>
                            @enderror
                            </div>
                            <div class="checkout__input">
                                <p>Country/State<span>*</span></p>
                                <input name="State"  wire:model="State" type="text">
                                 @error('State')
                                    <span style="color:red">{{$message}}</span>
                            @enderror
                            </div>
                            <div class="checkout__input">
                                <p>Postcode / ZIP<span>*</span></p>
                                <input name="Postcode" wire:model="Postcode"  type="text">
                                 @error('Postcode')
                                    <span style="color:red">{{$message}}</span>
                            @enderror
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input name="Phone" wire:model="Phone"  type="text" value="+">
                                         @error('Phone')
                                          <span style="color:red">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input name="email" value="" wire:model="email" type="text">
                            @error('email')
                                    <span style="color:red">{{$message}}</span>
                            @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="acc">
                                    Create an account?
                                    <input name="Create_account"  wire:model="Create_account"  type="checkbox" id="acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <p>Create an account by entering the information below. If you are a returning customer
                                please login at the top of the page</p>
                            @if($Create_account !='')
                                <div class="checkout__input">
                                <p>Account Password<span>*</span></p>
                                <input name="Password" value="" wire:model="Password"  type="text">
                                 @error('Password')
                                    <span style="color:red">{{$message}}</span>
                                @enderror
                            </div>
                            @endif
                            {{-- <div class="checkout__input__checkbox">
                                <label for="diff-acc">
                                    Ship to a different address?
                                    <input type="checkbox" id="diff-acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div> --}}
                            <div class="checkout__input">
                                <p>Order notes<span>*</span></p>
                                <input name="Order_notes" wire:model="Order_notes"  type="text"
                                    placeholder="Notes about your order, e.g. special notes for delivery.">
                                     @error('Order_notes')
                                    <span style="color:red">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Your Order</h4>
                                <div class="checkout__order__products">Products <span>Total</span></div>
                                <ul>
                                    @foreach($order_detailes as $order)
                                    <li>{{$order->name}}<span>$
                                        @if($order->sale != 0 & $order->sale > 0  )
                                            {{$order->price * ($order->sale * .100)}}
                                        @else
                                            {{$order->price - $order->sale }}
                                        @endif
                                    </span></li>
                                    @endforeach

                                </ul>
                                <div class="checkout__order__subtotal">Subtotal <span>${{$sub_total}}</span></div>
                                <div class="checkout__order__total">Total <span>${{ $sub_total }}</span></div>
                                <div class="checkout__input__checkbox">
                                    <label for="acc-or">
                                        Create an account?
                                        <input type="checkbox" id="acc-or">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua.</p>
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        Check Payment
                                        <input type="checkbox" id="payment">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        Paypal
                                        <input type="checkbox" id="paypal">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <button type="submit" class="site-btn">PLACE ORDER</button>
                                 @include('front.alert.alert')
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>



</div>
