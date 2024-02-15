<div>
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Tambah Diagnosa</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Diagnosa</a></li>
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
                                    <label class="col-sm-3 col-form-label">Nama Kelompok</label>
                                    <div class="col-sm-5">
                                        <select class="form-control" wire:model="selectedKelompok" required>
                                            <option> --- Pilih Kelompok --- </option>
                                            @foreach ($kelompoks as $kelompok)
                                                @if (old('kelompoks_id') == $kelompok->id)
                                                    <option value="{{ $kelompok->id }}" selected>{{ $kelompok->name }}
                                                    </option>
                                                @else
                                                    <option value="{{ $kelompok->id }}">{{ $kelompok->name }}
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
                            <h4 class="card-title">Diagnosa</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kode Diagnosa</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" wire:model.lazy='kodeDiagnosa'
                                            value="{{ old('kode_diagnosa') }}" required maxlength="10">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Diagnosa</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" wire:model.lazy='namaDiagnosa'
                                            value="{{ old('nama_diagnosa') }}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Deskripsi Diagnosa</label>
                                    <div class="col-sm-5">
                                        <textarea class="ckeditor form-control"  wire:model.lazy='deskripsiDiagnosa'>{{ old('deskripsi_diagnosa') }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h4 class="card-title">SLKI</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kode SLKI</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" wire:model.lazy='kodeSLKI'
                                            value="{{ old('kode_slki') }}" required maxlength="10">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama SLKI</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" wire:model.lazy='namaSLKI'
                                            value="{{ old('nama_slki') }}" required maxlength="10">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Deskripsi SLKI</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" wire:model.lazy='deskripsiSLKI'
                                            value="{{ old('deskripsi_slki') }}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h4 class="card-title">SIKI</h4>
                        </div>
                        @for ($i = 0; $i < count($inputs); $i++)
                            <div class="card-body">
                                <div class="basic-form">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Kode SIKI</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control"
                                                wire:model.lazy='inputs.{{ $i }}.kode_siki'
                                                value="{{ old('kode_siki') }}" required maxlength="10">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama SIKI</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control"
                                                wire:model.lazy='inputs.{{ $i }}.nama_siki'
                                                value="{{ old('nama_siki') }}" required maxlength="10">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Deskripsi SIKI</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control"
                                                wire:model.lazy='inputs.{{ $i }}.deskripsi_siki'
                                                value="{{ old('deskripsi_siki') }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Observasi</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control"
                                                wire:model.lazy='inputs.{{ $i }}.observasi'
                                                value="{{ old('observasi') }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Terapeutik</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control"
                                                wire:model.lazy='inputs.{{ $i }}.terapeutik'
                                                value="{{ old('terapeutik') }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Edukasi</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control"
                                                wire:model.lazy='inputs.{{ $i }}.edukasi'
                                                value="{{ old('edukasi') }}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <button wire:click="addNew" type="button" class="btn btn-success"><i
                                            class="bi bi-plus-square-fill" style="margin-right: 10px"></i>Tambah SIKI
                                        Baru</button>
                                    <button wire:click='remove({{ $i }})' type="button"
                                        class="btn btn-danger"><i class="bi bi-trash"
                                            style="margin-right: 10px"></i>Hapus SIKI</button>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
