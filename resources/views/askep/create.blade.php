@extends('components.index')

@section('body')
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
                <form action={{ route('askep.store') }} method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header">
                                <h4 class="card-title">Kelompok</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Kelompok</label>
                                        <div class="col-sm-5">
                                            <select class="form-control" id="diagnosa" name="diagnosas_id" required>
                                                <option> --- Pilih Diagnosa --- </option>
                                                @foreach ($diagnosas as $diagnosa)
                                                    @if (old('diagnosas_id') == $diagnosa->id)
                                                        <option value="{{ $diagnosa->id }}" selected>
                                                            {{ $diagnosa->kelompoks->name }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $diagnosa->id }}">{{ $diagnosa->kelompoks->name }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header">
                                <h4 class="card-title">Identitas</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal</label>
                                        <div class="col-sm-5">
                                            <input type="date" class="form-control" name="tanggal"
                                                value="{{ old('tanggal') }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Petugas</label>
                                        <div class="col-sm-5">
                                            <select class="form-control" id="petugas" name="users_id" required>
                                                <option> --- Pilih Petugas --- </option>
                                                @foreach ($users as $user)
                                                    @if (old('users_id') == $user->id)
                                                        <option value="{{ $user->id }}" selected>
                                                            {{ $user->name }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $user->id }}">{{ $user->name }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Alamat</label>
                                        <div class="col-sm-5">
                                            <textarea class="ckeditor form-control" name="alamat">{{ old('alamat') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Data</label>
                                        <div class="col-sm-5">
                                            <textarea class="ckeditor form-control" name="data">{{ old('data') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
