@extends('components.index')

@section('body')
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Diagnosa</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Asuhan Keperawatan</a></li>
            </ol>
        </div>
    </div>
    <a class="btn btn-success col-2 mb-xl-4" style="color:#ffff" href={{ route('diagnosa.create') }}><i
            class="bi bi-person-add mr-2"></i> Tambah Diagnosa</a>
    <a class="btn btn-success col-2 mb-xl-4" style="color:#ffff" href={{ route('noc') }}><i
            class="bi bi-person-add mr-2"></i> Tambah NOC</a>
    <a class="btn btn-success col-2 mb-xl-4" style="color:#ffff" href={{ route('diagnosa.create') }}><i
            class="bi bi-person-add mr-2"></i> Tambah NIC</a>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tabel Pelayanan Asuhan Keperawatan</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="myTable" class="display" style="min-width: 100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Pemeriksaan</th>
                                    <th>Nama Petugas</th>
                                    <th>Poli</th>
                                    <th>No Registrasi</th>
                                    <th>Nama</th>
                                    <th>NIK</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach () --}}
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="d-flex">
                                            <a href="" class="btn btn-info mr-2"
                                                target="_blank"><i class="bi bi-printer"></i></a>
                                            <a href="" class="btn btn-warning mr-2"><i
                                                    class="bi bi-pencil-square"></i></a>
                                            <form action="" method="POST">
                                                @method('delete')
                                                @csrf
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit" class="btn btn-danger show-alert-delete-box"
                                                    data-toggle="tooltip" title='Delete'><i
                                                        class="bi bi-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                {{-- @endforeach --}}
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Pemeriksaan</th>
                                    <th>Nama Petugas</th>
                                    <th>Poli</th>
                                    <th>No Registrasi</th>
                                    <th>Nama</th>
                                    <th>NIK</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $('.show-alert-delete-box').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                title: "Anda Yakin Menghapus Data?",
                text: "Data Akan Dihapus Secara Permanen",
                icon: "warning",
                type: "warning",
                buttons: ["Cancel", "Yes"],
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Data Terhapus'
            }).then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
        });
    </script>
@endsection
