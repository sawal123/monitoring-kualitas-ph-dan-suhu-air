@extends('master.app')

@section('content')
    <!-- Dynamic Table with Export Buttons -->
    <div class="block block-rounded" style="margin-top:60px">
        <div class="block-header block-header-default">
            <h3 class="block-title">Dynamic Table <small>Export Buttons</small></h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 mt-3">
                    @php
                        $filter = $_GET['filter'];
                    @endphp
                    <form action="" method="get">
                        @csrf
                        <div class="input-group " style="width: 250px; float: right; ">
                            <button type="submit" class="btn btn-primary">Filter</button>
                            <input type="date" aria-label="First name" class="form-control" name="filter"
                                value="<?= !$filter ? $date : $filter ?>">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <div class="table-responsive">
                <table
                    class="table table-responsive table-bordered table-striped table-vcenter js-dataTable-buttons text-center">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 5%;">No</th>
                            <th class="text-center" style="width: 10%;">Suhu Air</th>
                            <th class="text-center" style="width: 10%;">PH Air</th>
                            <th class="text-center" style="width: 20%;">Status</th>
                            <th class="text-center" style="width: 15%;">Tanggal</th>
                            <th class="text-center" style="width: 15%;">Waktu</th>
                            <th class="text-center" style="width: 15%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ph as $key => $phair)
                            <tr>
                                <td class="text-center fs-sm">{{ $key + 1 }}</td>
                                <td class="fw-semibold fs-sm"> {{ $sh[$key]->suhu }}&deg;</td>
                                <td class="fw-semibold fs-sm">
                                    {{ $phair->phair }}
                                </td>
                                <td class="fw-semibold fs-sm text-center">
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">
                                        @php
                                            if ($phair->status == '1' && $sh[$key]->status == '1') {
                                                echo 'Normal';
                                            } elseif ($phair->status == '0' && $sh[$key]->status == '1') {
                                                echo 'PH Tidak Normal';
                                            } elseif ($phair->status == '1' && $sh[$key]->status == '0') {
                                                echo 'Suhu Tidak Normal';
                                            } else {
                                                echo 'WARNING';
                                            }
                                        @endphp
                                    </span>
                                </td>
                                <td class="text-center">
                                    <span class="text-muted fs-sm">{{ date('Y-m-d', strtotime($phair->created_at)) }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-muted fs-sm">{{ date('H:i:s', strtotime($phair->created_at)) }}</span>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-alt-secondary" title="Edit"
                                            id="modaledit" data-bs-toggle="modal" data-bs-target="#modal-block-fromright"
                                            data-id="{{ $phair->id }}" data-idd="{{ $sh[$key]->id }}"
                                            data-suhu="{{ $sh[$key]->suhu }}" data-ph="{{ $phair->phair }}"
                                            data-stph="{{ $phair->status }}" data-stsuhu="{{ $sh[$key]->status }}"
                                            data-desh="{{ $sh[$key]->deskripsi }}" data-deph="{{ $phair->deskripsi }}">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </button>
                                        {{-- <form action="{{ url('/hapusdata/' . $phair->id) }}" method="post"> --}}
                                        @csrf
                                        <a type="submit" href="{{ url('/data/hapus/' . $phair->id) }}"
                                            class="btn btn-sm btn-alt-secondary button" data-bs-toggle="tooltip"
                                            title="Delete">
                                            <i class="fa fa-fw fa-times"></i>
                                        </a>
                                        {{-- </form> --}}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- From Right Block Modal -->
    <div class="modal fade" id="modal-block-fromright" tabindex="-1" role="dialog" aria-labelledby="modal-block-fromright"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-fromright" role="document">
            <div class="modal-content">
                <div class="block block-rounded block-transparent mb-0">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Edit Data</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <form action="{{ url('/update/data') }}" method="post">
                        {{ csrf_field() }}
                        @csrf
                        <div class="block-content fs-sm">
                            <input type="hidden" class="form-control" id="idsuhu" name="idsuhu">
                            <input type="hidden" class="form-control" id="idph" name="idph">
                            <input type="hidden" class="form-control" id="sph" name="sph">
                            <input type="hidden" class="form-control" id="ssh" name="ssh">
                            <input type="hidden" class="form-control" id="desh" name="desh">
                            <input type="hidden" class="form-control" id="deph" name="deph">
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" id="suhu" name="suhu"
                                    placeholder="John Doe">
                                <label for="suhu">Suhu Air</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" id="ph" name="ph"
                                    placeholder="John Doe">
                                <label for="ph">PH Air</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" id="status" name="status" readonly>
                                <label for="status">Status</label>
                            </div>
                        </div>
                        <div class="block-content block-content-full text-end bg-body">
                            <button type="button" class="btn btn-sm btn-alt-secondary me-1"
                                data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
