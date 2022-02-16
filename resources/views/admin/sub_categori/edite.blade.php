@extends('layouts.admin')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">الرئيسية </a>
                            </li>
                            <li class="breadcrumb-item"><a href=""> الاقسام الرئيسية </a>
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

                                    <form class="form" action="{{route('update.categori',$categori_edite-> id)}}"
                                          method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        {{-- @foreach($categores as $categore) --}}
                                        {{-- {{dd($categore)}} --}}

                                        <div class="form-group">
                                            <div class="text-center">
                                                <img
                                                    src="{{asset('images/sub-categorie/'.$categori_edite ->image)}}"
                                                    class="rounded-circle  height-150" alt="Categori image">
                                            </div>
                                        </div>



{{-- =============================================================== --}}
                                        <div class="form-group">
                                            {{-- <label>صورة القسم </label> --}}
                                            <label id="projectinput7" class="file center-block">
                                                <input type='hidden'  name='id' value="{{$categori_edite-> id}}">

                                               <label>upload new image</label>
                                                <span class="file-custom"></span>
                                                <input type='file'  name='image'>
                                            </label>
                                            @error('image')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-body">

                                            <h4 class="form-section"><i class="ft-home"></i>تفاصيل القسم </h4>


                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="projectinput1">اسم القسم </label>
                                                                <input type="text" value="{{$categori_edite-> name}}" id="name"
                                                                       class="form-control"
                                                                       placeholder="  "
                                                                       name="name">
                                                                 @error("name")
                                                                 <span class="text-danger"> هذا الحقل مطلوب</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="projectinput1">وصف القسم</label>
                                                                <input type="text" value="{{$categori_edite-> desc}}" id="name"
                                                                       class="form-control"
                                                                       placeholder="  "
                                                                       name="desc">
                                                                 @error("desc")
                                                                 <span class="text-danger"> هذا الحقل مطلوب</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>


                                                       <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="projectinput1">اختر القسم الرئيسى </label>
                                                               <select name="categories" id="">
                                                                   @foreach ($categories as $categorie )

                                                                         <option value="{{$categorie->id}}">{{$categorie->name}}</option>

                                                                   @endforeach

                                                               </select>
                                                                @error("desc")
                                                                <span class="text-danger"> هذا الحقل مطلوب</span>
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
