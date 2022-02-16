<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
       <div class="main-menu-content">
           <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

               <li class="nav-item active"><a href="{{route('admin.dashboard')}}"><i class="la la-mouse-pointer"></i><span
                           class="menu-title" data-i18n="nav.add_on_drag_drop.main">الرئيسيه </span></a>
               </li>
    <!-- {{-- ########################## Customers   ######################################### --}} -->
               <li class="nav-item  {{-- open --}} ">
                <a href=""><i class="la la-home"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">العملاء </span>
                    <span
                        class="badge badge badge-info badge-pill float-right mr-2">{{ App\Models\User::count() }}</span>
                </a>
                <ul class="menu-content">
                    <li  ><a class="menu-item" href="{{ route('index.users') }}"
                                          data-i18n="nav.dash.ecommerce"> جميع العملاء</a>
                    </li>

                </ul>
    <!-- {{-- ########################## Customers   ######################################### --}} -->
    @if(session('owner_admin'))

               <li class="nav-item  {{-- open --}} ">
                <a href=""><i class="la la-home"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> Tenants </span>
                    <span
                        class="badge badge badge-info badge-pill float-right mr-2">{{ DB::connection('landlord')->table('tenants')->count() }}</span>
                </a>
                <ul class="menu-content">
                    <li  ><a class="menu-item" href="{{ route('Show.tenants') }}"
                                          data-i18n="nav.dash.ecommerce">All Tenants</a>
                    </li>

                </ul>
    @endif
<!-- {{-- ###########################  categories    ######################################## --}} -->
<li class="nav-item"><a href=""><i class="la la-group"></i>
    <span class="menu-title" data-i18n="nav.dash.main">الاقسام </span>
    <span
        class="badge badge badge-danger badge-pill float-right mr-2">{{App\Models\Categorie::count()}}</span>
</a>
<ul class="menu-content">
    <li  ><a class="menu-item" href="{{route('show.categori')}}"
                          data-i18n="nav.dash.ecommerce">جميع الاقسام</a>
    </li>
    <li><a class="menu-item" href="{{route('create.categori')}}" data-i18n="nav.dash.crypto">اضافه قسم
         </a>
    </li>
</ul>
</li>
<!-- {{-- ############################## sub categories    ############################################ --}} -->
<li class="nav-item"><a href=""><i class="la la-group"></i>
    <span class="menu-title" data-i18n="nav.dash.main">الاقسام الفرعيه </span>
    <span
        class="badge badge badge-danger badge-pill float-right mr-2">{{App\Models\sub_categorie::count()}}</span>
</a>
<ul class="menu-content">
    <li  ><a class="menu-item" href="{{route('show.sub.categori')}}"
                          data-i18n="nav.dash.ecommerce">جميع الاقسام الفرعيه</a>
    </li>
    <li><a class="menu-item" href="{{route('create.sub.categori')}}" data-i18n="nav.dash.crypto">اضافه قسم
         </a>
    </li>
</ul>
</li>
<!-- {{-- #########################  Products     #######################/################### --}} -->
               <li class="nav-item"><a href="{{route('show.product')}}"><i class="la la-group"></i>
                       <span class="menu-title" data-i18n="nav.dash.main">المنتجات  </span>
                       <span
                           class="badge badge badge-danger badge-pill float-right mr-2">{{App\Models\product::count()}}</span>
                   </a>
                   <ul class="menu-content">
                       <li {{-- class="active"--}}><a class="menu-item" href="{{route('show.product')}}"
                                             data-i18n="nav.dash.ecommerce">جميع المنتجات</a>
                       </li>
                       <li><a class="menu-item" href="{{route('create.product')}}" data-i18n="nav.dash.crypto">اضافه منتج
                            </a>
                       </li>
                   </ul>
               </li>
    <!-- {{-- ################################### Blogs  ######################################3 --}} -->
               <li class="nav-item"><a href="{{route('show.product')}}"><i class="la la-group"></i>
                       <span class="menu-title" data-i18n="nav.dash.main">Blogs  </span>
                       <span
                           class="badge badge badge-danger badge-pill float-right mr-2">{{App\Models\blog::count()}}</span>
                   </a>
                   <ul class="menu-content">
                       <li  ><a class="menu-item" href="{{route('index.blog')}}"
                                             data-i18n="nav.dash.ecommerce">all blogs</a>
                       </li>
                       <li><a class="menu-item" href="{{route('cearte.blog')}}" data-i18n="nav.dash.crypto">add blog
                            </a>
                       </li>
                   </ul>
               </li>

               <!-- {{-- ############################### atributes   ################################################# --}} -->
               <li class="nav-item"><a href="{{route('show.product')}}"><i class="la la-group"></i>
                       <span class="menu-title" data-i18n="nav.dash.main">{{__('messages.Atributes')}}  </span>
                       <span
                           class="badge badge badge-danger badge-pill float-right mr-2">{{App\Models\attribuite::count()}}</span>
                   </a>
                   <ul class="menu-content">
                       <li  ><a class="menu-item" href="{{route('index.atribuite')}}"
                                             data-i18n="nav.dash.ecommerce">{{__('messages.all_atributes')}}</a>
                       </li>
                       <li><a class="menu-item" href="{{route('cearte.atribuite')}}" data-i18n="nav.dash.crypto">{{__('messages.add_atributes')}}
                            </a>
                       </li>
                   </ul>
               </li>
               <!-- {{-- ############################# atribute Value   ##################################################### --}} -->
              <li class="nav-item"><a href="{{route('show.product')}}"><i class="la la-group"></i>
                       <span class="menu-title" data-i18n="nav.dash.main">{{ __('messages.atribute_value') }}  </span>
                       <span
                           class="badge badge badge-danger badge-pill float-right mr-2">{{App\Models\attribuite_value::count()}}</span>
                   </a>
                   <ul class="menu-content">
                       <li  ><a class="menu-item" href="{{route('index.atribuite.value')}}"
                                             data-i18n="nav.dash.ecommerce">{{ __('messages.all_atribute_value') }}</a>
                       </li>
                       <li><a class="menu-item" href="{{route('cearte.atribuite.value')}}" data-i18n="nav.dash.crypto">{{ __('messages.addAtribute_value') }}
                            </a>
                       </li>
                   </ul>
               </li>




<!-- {{-- #####################################   masseages      ######################################### --}} -->


                 <li class="nav-item"><a href="{{route('show.product')}}"><i class="la la-group"></i>
                       <span class="menu-title" data-i18n="nav.dash.main">Massages  </span>
                       <span
                           class="badge badge badge-danger badge-pill float-right mr-2">{{App\Models\message::count()}}</span>
                   </a>
                   <ul class="menu-content">
                       <li  ><a class="menu-item" href="{{route('index.messages')}}"
                                             data-i18n="nav.dash.ecommerce">messages</a>
                       </li>

                   </ul>
               </li>

<!-- {{-- ##############################   orders     ######################################################## --}} -->
<li class="nav-item"><a href="{{route('show.product')}}"><i class="la la-group"></i>
                       <span class="menu-title" data-i18n="nav.dash.main">{{ __('messages.orders') }}</span>
                       <span
                           class="badge badge badge-danger badge-pill float-righ~t mr-2">{{App\Models\order::count()}}</span>
                   </a>
                   <ul class="menu-content">
                       <li  ><a class="menu-item" href="{{route('index.orders')}}"
                                             data-i18n="nav.dash.ecommerce">{{ __('messages.orders') }}</a>
                       </li>

                   </ul>
               </li>



<!-- {{-- ############################################################################################### --}} -->

       </div>
   </div>
