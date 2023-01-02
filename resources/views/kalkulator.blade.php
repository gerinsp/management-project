@extends('layouts.main')

@section('container')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        </ol>
    </nav>

    {{-- toash --}}

    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center d-flex">
        <div class="col ">
            <div class="card ">
                <div class="card-header">
                    Kalkulator
                </div>
                <div class="card-body">
                    <div class="input-group mb-3">
                        <input id="input1" type="text" class="form-control">
                        <span id="operator" class="input-group-text"></span>
                        <input id="input2" type="text" class="form-control">

                    </div>
                    <p id="hasil_penjumlahan"></p>
                    <button id="tambah" class="btn btn-secondary btn-sm">Tambah</button>
                    <button id="kurang" class="btn btn-secondary btn-sm">Kurang</button>
                    <button id="kali" class="btn btn-secondary btn-sm">Kali</button>
                    <button id="bagi" class="btn btn-secondary btn-sm">Bagi</button>
                    <button id="hasil" class="btn btn-primary btn-sm">Hasil</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#tambah').on('click', function() {
                $('#operator').text('+');
            });
            $('#kurang').on('click', function() {
                $('#operator').text('-');
            });
            $('#kali').on('click', function() {
                $('#operator').text('x');
            });
            $('#bagi').on('click', function() {
                $('#operator').text('/');
            });
            $('#hasil').on('click', function() {
                var operator = $('#operator').text();
                var input1 = $("#input1").val();
                var input2 = $("#input2").val();
                var hasil;
                if (operator == "+") {
                    hasil = parseInt(input1) + parseInt(input2);
                } else if (operator == "x") {
                    hasil = parseInt(input1) * parseInt(input2);
                } else if (operator == "-") {
                    hasil = parseInt(input1) - parseInt(input2);
                } else if (operator == "/") {
                    hasil = parseInt(input1) / parseInt(input2);
                }
                $('#hasil_penjumlahan').text('= ' + hasil);
            });

        });
    </script>
@endsection
