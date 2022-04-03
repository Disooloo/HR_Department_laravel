<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Список вакансий</h4>

                <div class="table-responsive">
                    <table class="table table-centered table-nowrap mb-0">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Наименование компании</th>
                            <th scope="col">Ответственный</th>
                            <th scope="col">Активные вакансии</th>
                            <th scope="col">Дата создания</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($company as $item)
                            <tr>
                                <td># {{$item->id}}</td>
                                <td>
                                    <h5 class="font-size-15 mb-0">{{$item->name_company}}</h5>
                                </td>
                                <td>
                                    <h5 class="font-size-15 mb-0">{{$item->responsible}}</h5>
                                </td>
                                <td>
                                    @if($item->isVacancy == true)
                                        <p style="color: green">
                                            <i class="mdi mdi-checkbox-blank-circle text-success me-1"></i>Активна
                                        </p>
                                    @else
                                        <i class="mdi mdi-checkbox-blank-circle text-danger me-1"></i> Не активна
                                    @endif
                                </td>
                                <td>{{$item->created_at}}</td>
                                <td>
                                    <button type="button" class="btn btn-outline-success btn-sm">
                                        Редактировать
                                    </button>
                                    <button type="button" class="btn btn-outline-danger btn-sm">Удалить
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end card-body -->
            {{$company->links()}}
        </div>
    </div>
    <!-- end card -->
</div>
<!-- end col -->
