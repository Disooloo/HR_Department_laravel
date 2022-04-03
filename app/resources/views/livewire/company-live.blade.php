<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">{{ config('app.name', 'Отдел кадров') }}</h4>

                        {{--                        <div class="page-title-right">--}}
                        {{--                            <ol class="breadcrumb m-0">--}}
                        {{--                                <li class="breadcrumb-item"><a href="javascript: void(0);">Главная</a></li>--}}
                        {{--                                <li class="breadcrumb-item active">Dashboard</li>--}}
                        {{--                            </ol>--}}
                        {{--                        </div>--}}

                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="row">
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex text-muted">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="mb-1">Компания подключенно</p>
                                    @if($company_count <= 7 )
                                        <h5 class="mb-3">{{$company_count}} / 10</h5>
                                    @elseif($company_count <= 8)
                                        <h5 class="mb-3" style="color: #F48D18">{{$company_count}} / 10</h5>
                                    @elseif($company_count > 8)
                                        <h5 class="mb-3" style="color: red">{{$company_count}} / 10</h5>
                                    @endif
                                    <p class="text-truncate mb-0">
                                        <span class="text-success me-2"> {{$count_company_percent}} % </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->

                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="mb-1">Вакансий</p>
                                    <h5 class="mb-3">{{$vacancy_count}}</h5>
                                    <p class="text-truncate mb-0">
                                        <span class="text-success me-2"> 1.7%
                                            <i class="ri-arrow-right-up-line align-bottom ms-1"></i>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>


            <div class="card">
                <div>
                    <h4 class="mb-sm-0 m-3" >Добавление компании </h4>

                    <a class="btn btn-info m-3" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button"
                       aria-expanded="false" aria-controls="multiCollapseExample1">
                        <i class="fas fa-compress"></i>
                    </a>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <div class="card card-body">
                                @include('admin.company.store')
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if(!$isEdit)
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Поиск</label>
                                    <div class="input-group">
                                        <input wire:model="term" type="search" class="form-control form-control-lg">
                                        <div class="input-group-append">
                                            <button class="btn btn-lg btn-default">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('admin.company.index')
            @else
                @include("admin.company.edit")
            @endif
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script>
                    © Disooloo.
                </div>
            </div>
        </div>
    </footer>

</div>
<!-- end main content-->
