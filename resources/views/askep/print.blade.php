<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ $title }}</title>
    <!-- Favicon icon -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    {{-- <link rel="stylesheet" href="css/pdf.css"> --}}
    <link rel="stylesheet" href="css/pdf-kajian.css">
</head>

<body>
    <style>
        .kop-surat div {
            line-height: 10%
        }
    </style>
    <h1 style="text-align: center">IDENTITAS PASIEN</h1>
    <hr>
    <div class="header-left">
        <div style="display: block">
            <p><strong>Nama Kelompok</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                {{ $askep->diagnosas->kelompoks->name }}</p>
            <p><strong>Alamat</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                {!! $askep->alamat !!}</p>
        </div>
    </div>
    <div class="header-right">
        <div style="display: block">
            <p><strong>Petugas</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                {{ $askep->users->name }}
            </p>
            <p><strong>Tanggal Dibuat</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                {{ $askep->tanggal }}</p>
        </div>
    </div>
    <table style="margin-top: 7rem">
        <thead>
            <th>No</th>
            <th>Data</th>
            <th>Diagnosa Keperawatan (SDKI)</th>
            <th>Tujuan (SLKI)</th>
            <th>Intervensi Keperawatan (SIKI)</th>
        </thead>
        <tbody>
            <td></td>
            <td>{!! $askep->data !!}</td>
            <td>
                <span>
                    <strong>{{ $askep->diagnosas->nama_diagnosa }}</strong>
                </span>
                <p>
                    <strong>{{ $askep->diagnosas->kode_diagnosa }}</strong>
                </p>
                <strong>Definisi :
                </strong>
                <p>{{ $askep->diagnosas->deskripsi_diagnosa }}</p>
            </td>
            <td>
                <span>
                    <strong>{{ $askep->diagnosas->nama_slki }}</strong>
                </span>
                <p>
                    <strong>{{ $askep->diagnosas->kode_slki }}</strong>
                </p>
                <strong>Definisi :
                </strong>
                <p>{{ $askep->diagnosas->deskripsi_slki }}</p>
            </td>
            <td>
                <span>
                    <strong>{{ $askep->diagnosas->nama_siki }}</strong>
                </span>
                <p>
                    <strong>{{ $askep->diagnosas->kode_siki }}</strong>
                </p>
                <strong>Definisi :
                </strong>
                <p>{{ $askep->diagnosas->deskripsi_siki }}</p>
                <p>
                    <strong>Tindakan : </strong>
                </p>
                <strong>Observasi :
                </strong>
                <p>{{ $askep->diagnosas->observasi }}</p>
                <strong>Terapeutik :
                </strong>
                <p>{{ $askep->diagnosas->terapeutik }}</p>
                <strong>Edukasi :
                </strong>
                <p>{{ $askep->diagnosas->edukasi }}</p>
            </td>
        </tbody>
    </table>
</body>

</html>
