@section('title', 'Dashboard Konsultasi')

@extends('dashboard.dokter.dashboard-dokter-template')

@section('style')
    <style>
        #A01 {
            position: relative;
            width: 100%;
            height: 100px;
            border: 1px solid #ced4da;
            border-radius: 0.5rem;
            padding: 0.375rem 0.75rem;
            background: #e9ecef;
        }

        #A02 {
            height: 100%;
            overflow: auto;
            font-size: 1rem;
        }
    </style>
@endsection

@if (isset($buatKonsultasi))
    @section('contentx')
        <!-- ======= Breadcrumb Konsultasi Dokter ======= -->
        <div class="pagetitle">
            <h1>Konsultasi</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Home</a></li>
                    <li class="breadcrumb-item active">Konsultasi</li>
                </ol>
            </nav>
        </div>
        <!-- ======= End Breadcrumb Konsultasi Dokter ======= -->

        <!-- ======= Form Konsultasi Dokter ======= -->
        <section class="section konsultasi">
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">Form Konsultasi</h5>
                        <form>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Keluhan</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" style="height: 100px"></textarea>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= End Form Konsultasi Dokter ======= -->
    @endsection
@else
    @section('contentx')
        <!-- ======= Breadcrumb Konsultasi Dokter ======= -->
        <div class="pagetitle">
            <h1>Konsultasi</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Home</a></li>
                    <li class="breadcrumb-item active">Konsultasi</li>
                </ol>
            </nav>
        </div>
        <!-- ======= End Breadcrumb Konsultasi Dokter ======= -->

        <!-- ======= Konsultasi Dokter ======= -->
        <section class="section profile">
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="card-title">Konsultasi Dokter</h5>
                            </div>
                            <div class="col-6">
                                <form method="POST" action="{{ route('dashboard.pasien.konsultasi.action') }}">
                                    <input type="text" name="buatKonsultasi" hidden class="form-control" required
                                        value="{{ $user->id }}">
                                    @csrf
                                </form>
                            </div>
                        </div>
                        <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Keluhan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataKonsultasi as $data)
                                    <tr>
                                        <td>{{ $data->pasien->user->name }}</td>
                                        <td>{{ $data->keluhan }}</td>
                                        <td>
                                            <form method="POST" action="{{ route('dashboard.dokter.konsultasi.action') }}">
                                                @csrf
                                                <input type="text" name="konsultasiID" hidden class="form-control"
                                                    required value="{{ $data->id }}">

                                                <button type="button" class="btn btn-primary mb-0 mt-0 shadow rounded"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#KonsulatsiModal{{ $loop->iteration }}"><i
                                                        class="bi bi-chat-square-text"
                                                        style="padding-right: 10px"></i>Balas</button>

                                                <div class="modal fade" id="KonsulatsiModal{{ $loop->iteration }}"
                                                    tabindex="-1" aria-labelledby="KonsulatsiModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-xl modal-dialog-scrollable">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="KonsulatsiModalLabel">Balas
                                                                    Keluhan</h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <label for="recipient-name"
                                                                        class="col-form-label">Kepada:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="recipient-name" disabled
                                                                        value="{{ $data->pasien->user->name }}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="recipient-name"
                                                                        class="col-form-label">Keterangan:</label>

                                                                    <div class="form-control" id="A01">
                                                                        <div class="input-content" id="A02">
                                                                            <p>{{ $data->keterangan }}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="message-text"
                                                                        class="col-form-label">Jawaban:</label>
                                                                    <textarea style="height: 200px" class="form-control" id="message-text" name="jawaban"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button"
                                                                    class="btn btn-secondary shadow rounded"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit"
                                                                    class="btn btn-success shadow rounded">Kirim
                                                                    Jawaban</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= End Konsultasi Dokter ======= -->
    @endsection
@endif
