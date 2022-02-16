@extends('layouts.admin')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">الاقسام الرئيسيه </h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="?????">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item active">الاقسام الرئيسيه
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- DOM - jQuery events table -->
            <section id="dom">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">جميع الاقسام</h4>
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
                                <div class="card-body card-dashboard">
                                    {{-- @foreach($categories as $category)

                                    <img  src="{{config('constans.images_path').$category-> image_path}}" alt='{{config('constans.images_path').$category-> image_path}}'>

                                    @endforeach --}}
                                    <table
                                        class="table display nowrap table-striped table-bordered scroll-horizontal">
                                        <thead class="">
                                        <tr>
                                            <th>اسم القسم </th>

                                            <th>عدد المنتجات </th>

                                            <th>صورة القسم</th>


                                            <th>الاجراءات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                                {{-- {{dd($sub_categorie)}} --}}

                                            @if($sub_categorie)
                                            @foreach($sub_categorie as $category)
                                                <tr>


                                                    <td>{{$category->name}}</td>
                                                    <td>category-count ?</td>

                                                    <td>
                                                         <img
                                                    src="{{asset('images/sub-categorie/'.$category->image)}}"
                                                    class="rounded-circle  height-150" alt="Categori image">
                                                      </td>

                                                    <td>
                                                        <div class="btn-group" role="group"
                                                             aria-label="Basic example">
                                                            <a href="{{route('edite.sub.categori',$category->id)}}"
                                                               class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>


                                                            <a href="{{route('delete.sub.categori',$category->id)}}"
                                                               class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</a>


                                                            {{-- <a href="??????"
                                                               class="btn btn-outline-warning btn-min-width box-shadow-3 mr-1 mb-1"> --}}

                                                            </a>


                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            @endif



                                        </tbody>
                                    </table>
                                    <div class="justify-content-center d-flex">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
