@extends('layouts.admin')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">products </h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="???">Main</a>
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
                                <h4 class="card-title">All Products </h4>
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
                                    <table
                                        class="table display nowrap table-striped table-bordered scroll-horizontal">
                                        <thead class="">
                                        <tr>
                                            <th>product name</th>

                                             <th>price </th>
                                             <th>sale </th>
                                             <th>Descount type </th>

                                             <th>Descrption</th>
                                             <th>product image</th>
                                             <th>Categori Name</th>
                                              <th>Attribute Name</th>
                                               <th>Atribute Value</th>
                                             <th>option</th>
                                        </tr>
                                        </thead>
                                        <tbody>


                                            @foreach($products_datas as $product)
                                                <tr>
                                                    <td>{{$product ->name}}</td>

                                                    <td>{{$product-> price}}</td>
                                                    <td>{{$product-> sale}}</td>
                                                    @if($product->descount_Type == 0 )
                                                    <td>flate</td>
                                                    @else
                                                    <td>percent %</td>
                                                    @endif



                                                    {{-- </td> --}}
                                                    <td>{{$product-> desc}}</td>

                                                    <td>
                                                        <div class="text-center">
                                                            <img
                                                            src="{{asset('images/products/'.$product->image)}}"
                                                            class="rounded-circle  height-150" alt="product image">
                                                        </div>
                                                    </td>
                                                    {{-- @endforeach --}}

                                                    {{-- @foreach($categori as $categoti) --}}
                                                    {{-- @foreach ($categori as $cate) --}}
                                                    <td>{{$product->cName}}</td>

                                                    {{-- @endforeach --}}


                                                    <td>{{$product->attName}}</td>

                                                    <td>{{$product->attvName}}</td>
                                                    {{-- @endforeach --}}

                                                {{-- @foreach($products_data as $product) --}}
                                                    <td>
                                                        <div class="btn-group" role="group"
                                                             aria-label="Basic example">
                                                            <a href="{{route('edite.product',$product-> id)}}"
                                                               class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>


                                                            <a href="{{route('delete.product',$product-> id)}}"
                                                               class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</a>


                                                            {{-- <a href="??????"
                                                               class="btn btn-outline-warning btn-min-width box-shadow-3 mr-1 mb-1"> --}}

                                                            </a>


                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach




                                        </tbody>
                                    </table>
                                <div style="widtg:20px; margin:auto" class="align-content-center">
                                        {{ $products_datas->links()}}
                                    </div>
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
