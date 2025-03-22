@extends('layouts.body')
@section('title', $title)
@section('content')
    <div class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                @foreach ($breadCumbs as $breadItem)
                                    <li class="breadcrumb-item" {{ $breadItem['page'] }}>
                                        <a href="{{ $breadItem['link'] }}">{{ $breadItem['title'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-2 mt-2">{{ $pageTitle }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->

            <!-- [ Main Content ] start -->
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('promo-service.form', ['param' => 'add', 'id' => Crypt::encrypt('null')]) }}"
                        class="btn btn-primary">
                        <i class="ti ti-businessplan"></i> Add New Promo
                    </a>
                </div>
                <div class="card-body">

                    <div class="dt-responsive table-responsive">
                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Promo Code</th>
                                    <th>Promo Name</th>
                                    <th>Promo Expired</th>
                                    <th>Type</th>
                                    <th>Required</th>
                                    <th>Discount</th>
                                    <th>Adding By</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>L099</td>
                                    <td>Freedom NKRI</td>
                                    <td>
                                        17 Desember 2024
                                        <br>
                                        Active
                                    </td>
                                    <td>Discount</td>
                                    <td>10 Promo</td>
                                    <td>10%</td>
                                    <td>Vira Nadhira</td>
                                    <td>2011/04/25</td>
                                    <td>2011/04/25</td>
                                    <td>
                                        <div class="flex-shrink-0">
                                            <a href="#" class="avtar avtar-xs btn-light-secondary">
                                                <i class="ti ti-eye f-20"></i>
                                            </a>
                                            <a href="#" class="avtar avtar-xs btn-light-secondary">
                                                <i class="ti ti-edit f-20"></i>
                                            </a>
                                            <a href="#" class="avtar avtar-xs btn-light-secondary"
                                                onclick=" Swal.fire({
                                                icon: 'warning',
                                                title: 'Hapus Data ?',
                                                text: 'Data yang dihapus tidak dapat dikembalikan !',
                                                showCancelButton: true,
                                                confirmButtonText: 'Hapus',
                                                cancelButtonText: 'Batal',
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        document.getElementById('deleteForm').submit();
                                                    }
                                                });">
                                                <i class="ti ti-trash f-20"></i>
                                            </a>
                                            <form id="deleteForm" action="" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>

    <!-- datatable Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('assets/js/plugins/dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/dataTables.bootstrap5.min.js') }}"></script>
    <script>
        // [ Zero Configuration ] start
        $('#simpletable').DataTable();
    </script>
@endsection
