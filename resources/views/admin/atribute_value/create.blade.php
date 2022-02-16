@extends('layouts.admin')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">الرئيسيه </a>
                            </li>
                            <li class="breadcrumb-item"><a href="">الاقسام الرئيسيه</a>
                            </li>
                            <li class="breadcrumb-item active">اضافه قسم رئيسى
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
                                <h4 class="card-title" id="basic-layout-form">اضافه قسم رئيسى</h4>
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
                                    {{-- {{route('insert.categori')}} --}}
                                    <form class="form" id="creatcat" action="{{route('store.atribuite.value')}}"
                                          method="POST"
                                          enctype="multipart/form-data">
                                        @csrf


                                        <div class="form-body">

                                            <h4 class="form-section"><i class="ft-home"></i> atribute Detailes</h4>


                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="projectinput1"> atrbute value</label>
                                                                <input type="text" value="" id="name"
                                                                       class="form-control"
                                                                       placeholder="Example: red, xl ,adidas "
                                                                       name="name">
                                                                @error("name")
                                                                 <span class="text-danger">this failed required</span>
                                                                 @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                        {{-- ############################################################################# --}}
                                                            <div class="col-md-12">
                                                                <div class="form-group">


                                                                    <label> <h5>atribute name</h5></label>
                                                                        <select style="margin-top: 5px" name="atribue_id" id="cars">
                                                                            @foreach ($atributes as $atribute)
                                                                             <option value="{{$atribute->id}}">{{$atribute->name}}</option>
                                                                            @endforeach
                                                                    </select>
                                                                    @error("atribue_id")
                                                                        <span class="text-danger">{{$message}}</span>
                                                                         @enderror
                                                                </div>
                                                            </div>



                                        {{-- ################################################################################## --}}

                                        </div>


                                        <div class="form-actions">
                                            {{-- success massage --}}
                                            <div id="succes-msg" class="alert alert-success" style="display:none; text-align:center" >
                                                <h2>تم اضافه البيانات بنجاح</h2>
                                            </div>

                                             {{-- failed massage --}}
                                             <div id="succes-msg" class="alert alert-danger" style="display:none; text-align:center" >
                                                <h2>برجاء المحاوله مره اخرى </h2>
                                            </div>

                                            <button type="button" class="btn btn-warning mr-1"
                                                    onclick="history.back();">
                                                <i class="ft-x"></i> تراجع
                                            </button>
                                            {{-- <button type="button" onclick="upload_data('#creatcat',{{route('insert.categori')}})" class="btn btn-primary">
                                                <i class="la la-check-square-o"></i> حفظ
                                            </button> --}}

                                            <button type="submit"  class="btn btn-primary">
                                                <i class="la la-check-square-o"></i> حفظ
                                            </button>
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
