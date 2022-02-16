@extends('layouts.admin')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        {
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-form"> إضافة منتج  </h4>
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
                                    <form class="form" action="{{route('store.product')}}"
                                          method="POST"
                                          enctype="multipart/form-data">


                                        @csrf
                                        @csrf_field
                                        <div class="form-group">
                                            <label>صورة المنتج</label>
                                            <label id="projectinput7" class="file center-block">
                                                <input type="file" id="file" name="image">
                                                <span class="file-custom"></span>
                                            </label>
                                            @error('image')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                        {{-- ################################################################################ --}}

                                        <div class="form-body">

                                            <h4 class="form-section"><i class="ft-home"></i> تفاصيل المنتج</h4>


                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="projectinput1">اسم المنتج</label>
                                                                <input type="text" value="" id="name"
                                                                       class="form-control"
                                                                       placeholder="product name"
                                                                       name="name"
                                                                       required>
                                                                       @error("name")
                                                                        <span class="text-danger">{{$message}}</span>
                                                                         @enderror
                                                            </div>
                                    {{-- ################################################################################ --}}

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="projectinput1"> سعر المنتج</label>
                                                                    <input type="number" value="" id="name"
                                                                           class="form-control"
                                                                           placeholder=" $product price"
                                                                           name="price"
                                                                           required>
                                                                    @error("price")
                                                                        <span class="text-danger">{{$message}}</span>
                                                                         @enderror
                                                                </div>
                                                            </div>

                                                {{-- ################################################################################ --}}

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="projectinput1">  الخصم</label>
                                                                    <input type="number" value="" id="name"class="form-control"placeholder=" product sale"name="sale"required>

                                                                    <label> <h5>نوع الخصم</h5></label>
                                                                    <div>
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
                                                            </div>
                                                {{-- ################################################################################ --}}

                                                {{-- @livewire('admin.poductlive') --}}
                                                 <div class="col-md-12">
                                                                    <label> <h5>Atribute Name</h5></label>

                                                                <div class="form-group">
                                                                        <select style="margin-top: 5px" name="attr_name" id="cars">
                                                                                <option>اختر</option>
                                                                                @foreach($attr_names as $attr_name)
                                                                                <option value="{{$attr_name->id}}">{{$attr_name->name}}</option>

                                                                                @endforeach
                                                                    </select>
                                                                    @error("attr_name")
                                                                        <span class="text-danger">{{$message}}</span>
                                                                         @enderror
                                                                </div>
                                                            </div> --
                                                {{-- #######################################################################################3 --}}
                                                  <div class="col-md-12">
                                                                    <label> <h5>Atribute valu</h5></label>

                                                                <div class="form-group">

                                                                        <select style="margin-top: 5px" name="attr_value" id="cars">
                                                                                <option>select</option>
                                                                                @foreach($attr_vals as $attr_val)
                                                                                <option value="{{$attr_val->id}}">{{$attr_val->name}}</option>

                                                                                @endforeach
                                                                    </select>

                                                                    @error("attr_value")
                                                                        <span class="text-danger">{{$message}}</span>
                                                                         @enderror
                                                                </div>
                                                            </div>



                                                {{-- #################################################################################### --}}

                                                            {{-- ================================================ --}}
                                                             <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="projectinput1">الكميه</label>
                                                                    <input type="number" value="" id="qty"
                                                                           class="form-control"
                                                                           placeholder="product quntity"
                                                                           name="qty"
                                                                           required>
                                                                    @error("qty")
                                                                        <span class="text-danger">{{$message}}</span>
                                                                         @enderror
                                                                </div>
                                                            </div>



                                                            {{-- ============================================== --}}
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="projectinput1">وصف المنتج</label>
                                                                    <input type="text" value="" id="name"
                                                                           class="form-control"
                                                                           placeholder="ادخل وصف المنتج"
                                                                           name="desc"
                                                                           required>

                                                                     @error("desc")
                                                                        <span class="text-danger">{{$message}}</span>
                                                                         @enderror

                                                                </div>
                                                            </div>

                                                            {{-- ================================================ --}}
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="cars"> اختر القسم</label>
                                                                        {{-- <input type='select' name='cid'> --}}
                                                                            <select name="category" id="cars">
                                                                            @isset($categorie_data)
                                                                                    @foreach ($categorie_data as $categori)

                                                                                         <option value="{{$categori-> id}}">{{$categori->name}}</option>

                                                                                    @endforeach
                                                                                @endisset

                                                                            </select>

                                                                        @error("category")
                                                                        <span class="text-danger">{{$message}}</span>
                                                                         @enderror
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

                                            {{-- <button id='save_offer' class="btn btn-primary">
                                                <i class="la la-check-square-o"></i> حفظ
                                            </button> --}}
                                        </div>
                                        </div>
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
{{-- ==================== ajax============== --}}
