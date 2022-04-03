<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <h4 class="mb-sm-0 p-3">Добавление компании</h4>
            <div class="card-body">
                <!-- name_company -->
                <div class="form-group">
                    <label>Название</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-heading"></i> </span>
                        </div>
                        <input wire:model="name_company" type="text" class="form-control">
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- responsible -->
                <div class="form-group">
                    <label>Ответственный</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-user"></i> </span>
                        </div>
                        <input wire:model="responsible" type="text" class="form-control">
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- phone -->
                <div class="form-group">
                    <label>Телефон</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-phone"></i> </span>
                        </div>
                        <input wire:model="phone" type="text" class="form-control">
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- email -->
                <div class="form-group">
                    <label>email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-mail-bulk"></i> </span>
                        </div>
                        <input wire:model="email" type="email" class="form-control">
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- name_company -->
                <div class="form-group">
                    <label>Сайт</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-sitemap"></i> </span>
                        </div>
                        <input wire:model="site" type="text" class="form-control">
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- address -->
                <div class="form-group">
                    <label>Адресс</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-address-card"></i> </span>
                        </div>
                        <input wire:model="address" type="text" class="form-control">
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- coordinate -->
                <div class="form-group">
                    <label>Координаты</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-address-book"></i> </span>
                        </div>
                        <input wire:model="coordinate" type="text" class="form-control">
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->
                <button wire:click="store" type="button" class="btn btn-primary mt-3">Отправить</button>
            </div>
        </div>
    </div>
</div>
