@extends('layouts.admin')

@section('content')
@section('title','Dashboard')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div id="crypto-stats-3" class="row">
                    <div class="col-xl-4 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-6">
                                            <h1>{{App\Models\User::count()}}</h1>
                                        </div>

                                        {{-- <div class="col-5 pl-2">
                                            <h4>Users count</h4>
                                            <h6 class="text-muted">Bitcoin</h6>
                                        </div> --}}
                                        <div class="col-5 text-right">
                                            <h1>عدد العملاء</h1>
                                            {{-- <h6 class="success darken-4">31% <i class="la la-arrow-up"></i></h6> --}}
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="row">
                                    <div class="col-12">
                                        <canvas id="btc-chartjs" class="height-75"></canvas>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    {{-- ================================================ --}}
                    <div class="col-xl-4 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-6">
                                            <h1>{{App\Models\Categorie::count()}}</h1>
                                        </div>

                                        <div class="col-6 text-right">
                                            <h1>عدد الاقسام</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="eth-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- =============================================== --}}
                     <div class="col-xl-4 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-6">
                                            <h1>{{App\Models\sub_categorie::count()}}</h1>
                                        </div>
          <div class="col-6 text-right">
                                            <h1>  عدد الاقسام الفرعيه</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="eth-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- ====================================== --}}
                    <div class="col-xl-4 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-6">
                                            <h1>{{App\Models\product::count()}}</h1>
                                        </div>

                                        <div class="col-6 text-right">
                                            <h1>عدد المنتجات</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="eth-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

    </div>
@endsection
