<div>
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Tambah Kelompok</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Kelompok</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form wire:submit.prevent="store">
                        @csrf
                        <div class="card-body">
                            @for ($i = 0; $i < count($inputs); $i++)
                                <div class="basic-form">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Kelompok</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control"
                                                wire:model.lazy='inputs.{{ $i }}.name'
                                                value="{{ old('name') }}" required>
                                        </div>
                                        <button wire:click='remove({{ $i }})' type="button"
                                            class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                    </div>
                                </div>
                            @endfor
                            <button wire:click="addNew" type="button" class="btn btn-success"><i class="bi bi-plus-square-fill"></i></button>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
