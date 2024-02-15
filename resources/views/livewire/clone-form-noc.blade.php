<div>
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Tambah NOC</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">NOC</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form wire:submit.prevent="store">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="card-body">
                            <div class="basic-form">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kode Diagnosa</label>
                                    <div class="col-sm-5">
                                        <select class="form-control" id="noc" wire:model.lazy="selectedDiagnosas"
                                            required>
                                            <option> --- Pilih Diagnosa --- </option>
                                            @foreach ($diagnosas as $diagnosa)
                                                @if (old('diagnosas_id') == $diagnosa->id)
                                                    <option value="{{ $diagnosa->id }}" selected>
                                                        {{ $diagnosa->kode_diagnosa }} -
                                                        {{ $diagnosa->deskripsi_diagnosa }}
                                                    </option>
                                                @else
                                                    <option value="{{ $diagnosa->id }}">{{ $diagnosa->kode_diagnosa }} -
                                                        {{ $diagnosa->deskripsi_diagnosa }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h4 class="card-title">NOC</h4>
                        </div>
                        <div class="card-body">
                            @for ($i = 0; $i < count($inputs); $i++)
                                <div class="basic-form">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Kode NOC</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control"
                                                wire:model.lazy='inputs.{{ $i }}.kode_noc'
                                                value="{{ old('kode_noc') }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Deskripsi NOC</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control"
                                                wire:model.lazy='inputs.{{ $i }}.deskripsi_noc'
                                                value="{{ old('deskripsi_noc') }}" required>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <button wire:click='remove({{ $i }})' type="button"
                                                class="btn btn-danger"><i class="bi bi-trash"
                                                    style="margin-right: 10px"></i>Hapus Diagnosa</button>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <button wire:click="addNew" type="button" class="btn btn-success"><i class="bi bi-plus-square-fill"
                            style="margin-right: 10px"></i>Tambah Baru</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
        </div>
        </form>
    </div>
</div>
</div>
