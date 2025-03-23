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
                    <form action="">
                        <label for="transactionDate">Choose Transaction Date</label>
                        <div class="input-group mt-2">
                            <input type="text" class="form-control" name="transactionDate" id="transactionDate"
                                placeholder="Choose Expired..." readonly required />
                            <button class="btn btn-primary" type="button">
                                <i class="ti ti-search"></i>
                            </button>
                        </div>
                    </form>

                    <a href="" class="btn btn-primary mt-2">
                        <i class="ti ti-printer"></i> Print Transaction
                    </a>
                </div>
                <div class="card-body">
                    <div class="dt-responsive table-responsive">
                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Transaction Code</th>
                                    <th>Customer</th>
                                    <th>Promo Service</th>
                                    <th>Amount</th>
                                    <th>Point</th>
                                    <th>Payment Type</th>
                                    <th>Employee</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>TRN0001</td>
                                    <td>Quinn Flynn</td>
                                    <td>Laundry 100% Free</td>
                                    <td>Rp. 100.000</td>
                                    <td class="text-center">
                                        <b class="text-warning">
                                            <i class="ti ti-star"></i>
                                            8090
                                        </b>
                                    </td>
                                    <td>Cash</td>
                                    <td>Vira Nadhira</td>
                                    <td>2011/04/25</td>
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
    <!-- bootstrap-datepicker -->
    <script src="{{ asset('assets/js/plugins/datepicker-full.min.js') }}"></script>
    <script>
        // [ Zero Configuration ] start
        $('#simpletable').DataTable();

        (function() {
            const d_week = new Datepicker(document.querySelector("#transactionDate"), {
                buttonClass: "btn",
            });
        })();

        document.addEventListener('DOMContentLoaded', function() {
            let collapse = document.querySelector('.pc-sidebar');
            if (collapse) {
                window.addEventListener('load', function() {
                    collapse.classList.add('pc-trigger');
                    collapse.classList.add('pc-sidebar-hide');
                });
            }
        });
    </script>
@endsection
