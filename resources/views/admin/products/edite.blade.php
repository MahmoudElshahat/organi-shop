@extends('layouts.admin')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="?????">الرئيسية </a>
                            </li>
                            <li class="breadcrumb-item"><a href="??????"> الاقسام الرئيسية </a>
                            </li>
                            <li class="breadcrumb-item active">إضافة قسم رئيسي
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-form"> إضافة قسم رئيسي </h4>
                                <a class="heading-elements-toggle"><i
                                        class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            @include('admin.includes.alerts.success')
                            @include('admin.includes.alerts.errors')

                            <div class="card-content collapse show">
                                <div class="card-body">
                                    {{-- <img src="./public/images/1636018394-branddd.jpg" alt="Slide"> --}}

                                    <div class="caption-group">
                                        {{-- <h2 class="caption title">
                                            iPhone <span class="primary">6 <strong>Plus</strong></span>
                                        </h2> --}}
                                        {{-- <h4 class="caption subtitle">Dual SIM</h4> --}}
                                        {{-- <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a> --}}
                                    </div>
                                    <form class="form" action="{{route('update.product',$product_edite-> id)}}"
                                          method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        {{-- @foreach($categores as $categore) --}}
                                        {{-- {{dd($categore)}} --}}

                                        <div class="form-group">
                                            <label> صوره المنتج </label>
                                            <div class="form-group">
                                            <div class="text-center">
                                                <img
                                                    src="{{asset('images/products/'.$product_edite->image)}}"
                                                    class="rounded-circle  height-150" alt="{{asset('images/products/'.$product_edite->image)}}">
                                            </div>
                                        </div>
                                            {{-- <input type='hidden'  name='id' value=""> --}}
                                            <label id="projectinput7" class="file center-block">
                                                <span class="file-custom"></span>
                                                <input type='file'  name='image'>
                                            </label>
                                            @error('image')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-body">

                                            <h4 class="form-section"><i class="ft-home"></i> بيانات المنتج </h4>


                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="projectinput1"> اسم المنتج</label>
                                                                <input type="text" value="{{$product_edite-> name}}" id="name"
                                                                       class="form-control"
                                                                       placeholder="  "
                                                                       name="name">


                                                                @error('name')
                                                                <span class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                {{-- ###################################################################### --}} --}}
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="projectinput1"> سعر المنتج </label>
                                                                    <input type="text" value="{{$product_edite-> price}}" id="name"
                                                                           class="form-control"
                                                                           placeholder="  "
                                                                           name="price">

                                                                @error('price')
                                                                    <span class="text-danger">{{$message}}</span>
                                                                @enderror
                                                                    {{-- ============================================ --}}

                                                                </div>
                                                        </div>

                                            {{-- ================================================================ --}}

                                                             <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="projectinput1"> الخصم</label>
                                                                    <input type="number" value="{{$product_edite-> sale}}" id="name"class="form-control"placeholder=" product sale"name="sale"required>

                                                                    <label> <h5>نوع الخصم</h5></label>
                                                                        <select style="margin-top: 5px" name="descountType" id="cars">
                                                                                <option>اختر</option>
                                                                                <option value="0">عادى</option>
                                                                                <option value="1">نسبه مئويه</option>
                                                                    </select>
                                                                    @error("descountType")
                                                                        <span class="text-danger">{{$message}}</span>
                                                                         @enderror
                                                                </div>
                                                            </div>

                                                {{-- ================================================ --}}
                                                             <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="projectinput1">الكميه</label>
                                                                    <input type="text" value="{{$product_edite-> quntity}}" id="qty"
                                                                           class="form-control"
                                                                           placeholder="product quntity"
                                                                           name="qty"
                                                                           required>
                                                                    @error("qty")
                                                                        <span class="text-danger">{{$message}}</span>
                                                                         @enderror
                                                                </div>
                                                            </div>



                                                            {{-- ================

                                                        {{-- ================== --}}
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="projectinput1">وصف المنتج</label>
                                                                <input type="text"
                                                                        value="{{$product_edite-> desc}}"
                                                                        id="name"
                                                                        class="form-control"
                                                                        placeholder="ادخل وصف المنتج"
                                                                        name="desc">

                                                                @error('desc')
                                                                    <span class="text-danger">{{$message}}</span>
                                                                @enderror

                                                            </div>
                                                        </div>

                                                        {{-- ==================== --}}
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="cars"> اخر القسم</label>
                                                                        <select name="category" id="cars">
                                                                        {{-- @isset($categores) --}}
                                                                                @foreach ($categoroi_data as $categori)

                                                                                     <option value="{{$categori->id}}">{{$categori->name}}</option>

                                                                                @endforeach
                                                                            {{-- @endisset --}}

                                                                        </select>

                                                                    {{-- @error("category.$index.name")
                                                                    <span class="text-danger"> هذا الحقل مطلوب</span>
                                                                     @enderror--}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-actions">
                                            <button type="button" class="btn btn-warning mr-1"
                                                    onclick="history.back();">
                                                <i class="ft-x"></i> تراجع
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="la la-check-square-o"></i> حفظ
                                            </button>
                                        </div>
                                        {{-- @endforeach --}}
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- // Basic form layout section end -->
        </div>
    </div>
</div>
@endsection
