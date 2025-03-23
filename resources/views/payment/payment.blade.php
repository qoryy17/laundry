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
                <div class="card-body">
                    <div class="dt-responsive table-responsive">
                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Transaction Code</th>
                                    <th>Customer</th>
                                    <th>Amount</th>
                                    <th>Paid</th>
                                    <th>Return</th>
                                    <th>Point Reward</th>
                                    <th>Payment Type</th>
                                    <th>Employee By</th>
                                    <th>Created At</th>
                                    <th>Print</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>{{ Str::uuid() }}</td>
                                    <td>Ahmad Ricard Bandawira</td>
                                    <td>Rp. {{ Number::Format(30000, 2) }}</td>
                                    <td>Rp. {{ Number::Format(30000, 2) }}</td>
                                    <td>Rp. {{ Number::Format(0, 2) }}</td>
                                    <td>300 Point</td>
                                    <td>Cash</td>
                                    <td>Fira Witasya Anindya</td>
                                    <td>2011/04/25</td>
                                    <td>
                                        <a href="#" class="avtar avtar-xs btn-light-secondary">
                                            <i class="ti ti-printer f-20"></i>
                                        </a>
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
