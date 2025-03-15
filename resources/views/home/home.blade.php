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
            <div class="row">
                <div class="col-lg-6">
                    <div class="card statistics-card-1">
                        <div class="card-body">
                            <img src="{{ asset('assets/images/widget/img-status-3.svg') }}" alt="img"
                                class="img-fluid img-bg">
                            <div class="d-flex align-items-center">
                                <div class="avtar bg-brand-color-4 text-white me-3">
                                    <i class="ph-duotone ph-currency-dollar f-26"></i>
                                </div>
                                <div>
                                    <p class="text-muted mb-0">Income This Month</p>
                                    <div class="d-flex align-items-end">
                                        <h2 class="mb-0 f-w-500">Rp. 5.000.000</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card statistics-card-1">
                        <div class="card-body">
                            <img src="{{ asset('assets/images/widget/img-status-3.svg') }}" alt="img"
                                class="img-fluid img-bg">
                            <div class="d-flex align-items-center">
                                <div class="avtar bg-brand-color-4 text-white me-3">
                                    <i class="ph-duotone ph-currency-dollar f-26"></i>
                                </div>
                                <div>
                                    <p class="text-muted mb-0">Income This Year</p>
                                    <div class="d-flex align-items-end">
                                        <h2 class="mb-0 f-w-500">Rp. 23.000.000</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card statistics-card-1">
                        <div class="card-body">
                            <img src="{{ asset('assets/images/widget/img-status-3.svg') }}" alt="img"
                                class="img-fluid img-bg">
                            <div class="d-flex align-items-center">
                                <div class="avtar bg-brand-color-4 text-white me-3">
                                    <i class="ph-duotone ph-shopping-cart-simple f-26"></i>
                                </div>
                                <div>
                                    <p class="text-muted mb-0">Transaction</p>
                                    <div class="d-flex align-items-end">
                                        <h2 class="mb-0 f-w-500">230</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card statistics-card-1">
                        <div class="card-body">
                            <img src="{{ asset('assets/images/widget/img-status-3.svg') }}" alt="img"
                                class="img-fluid img-bg">
                            <div class="d-flex align-items-center">
                                <div class="avtar bg-brand-color-4 text-white me-3">
                                    <i class="ph-duotone ph-users f-26"></i>
                                </div>
                                <div>
                                    <p class="text-muted mb-0">Members</p>
                                    <div class="d-flex align-items-end">
                                        <h2 class="mb-0 f-w-500">230</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chart -->
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Income Graph</h5>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center mb-1">
                        <h3 class="mb-0">$894.39 <small class="text-muted">/+$200.10</small></h3>
                        <span class="badge bg-light-success ms-2">36%</span>
                    </div>
                    <p>Income Transaction On 2025</p>
                    <div id="income-graph"></div>
                </div>
            </div>
            <!-- End Chart -->

            <!-- New Member -->
            <div class="row">
                <!-- Member Information -->
                <div class="col-lg-12">
                    <div class="card table-card">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5 class="mb-0">Latest Membership</h5>
                                <button class="btn btn-sm btn-link-primary">View All</button>
                            </div>
                        </div>
                        <div class="card-body pb-0">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Joining Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h6 class="mb-0">Airi Satou</h6>
                                            </td>
                                            <td>satou123@gmail.com</td>
                                            <td>2023/09/12</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Member Information -->
            </div>
            <!-- End Member -->

            <!-- Cashier, Promo And History -->
            <div class="row">
                <div class="col-lg-4">
                    <!-- Promo Active -->
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <div class="avtar bg-light-danger">
                                        <i class="ti ti-credit-card f-24"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <p class="mb-1">Promo Active</p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h4 class="mb-0">DISKON 30%</h4>
                                    </div>
                                    <span class="text-danger fw-medium">Valid until 13 September 2025</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Promo Active-->
                    <!-- Cashier -->
                    <div class="card">
                        <div class="card-body position-relative">
                            <div class="text-center mt-3">
                                <div class="chat-avtar d-inline-flex mx-auto">
                                    <img class="rounded-circle img-fluid wid-90 img-thumbnail"
                                        src="../assets/images/user/avatar-1.jpg" alt="User image">
                                    <i class="chat-badge bg-danger me-2 mb-2"></i>
                                </div>
                                <h5 class="mb-0">William Bond</h5>
                                <p class="text-muted text-sm">Active Now
                                    <a href="#" class="link-primary"> @williambond
                                    </a> 😍
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- History -->
                <div class="col-lg-8">
                    <div class="card latest-activity-card">
                        <div class="card-header">
                            <h5>Latest Activities History</h5>
                        </div>
                        <div class="card-body">
                            <div class="latest-update-box">
                                <div class="row p-t-20 p-b-30">
                                    <div class="col-auto text-end update-meta">
                                        <p class="text-muted m-b-0 d-inline-flex">08:00 AM</p>
                                        <div class="border border-2 border-success text-success update-icon">20</div>
                                    </div>
                                    <div class="col">
                                        <a href="#!" class="d-inline-flex align-items-center">
                                            <h6 class="mb-0 me-2">Create report</h6>
                                            <span class="badge bg-success">Done</span>
                                        </a>
                                        <p class="text-muted m-b-0">The trip was an amazing and a life changing
                                            experience!!</p>
                                    </div>
                                </div>
                                <div class="row p-b-30">
                                    <div class="col-auto text-end update-meta">
                                        <p class="text-muted m-b-0 d-inline-flex">08:20 AM</p>
                                        <div class="border border-2 border-primary text-primary update-icon"><i
                                                class="ph-duotone ph-rocket"></i></div>
                                    </div>
                                    <div class="col">
                                        <a href="#!" class="d-inline-flex align-items-center">
                                            <h6 class="mb-0 me-2">Create report</h6>
                                            <span class="badge bg-primary">Running</span>
                                        </a>
                                        <p class="text-muted m-b-0">Free courses for all our customers at A1 Conference
                                            Room - 9:00 am tomorrow!</p>
                                    </div>
                                </div>
                                <div class="row p-b-30">
                                    <div class="col-auto text-end update-meta">
                                        <p class="text-muted m-b-0 d-inline-flex">08:20 AM</p>
                                        <div class="border border-2 border-warning text-warning update-icon"><i
                                                class="ph-duotone ph-hand-palm"></i></div>
                                    </div>
                                    <div class="col">
                                        <a href="#!" class="d-inline-flex align-items-center">
                                            <h6 class="mb-0 me-2">Create report</h6>
                                            <span class="badge bg-warning">Pending</span>
                                        </a>
                                        <p class="text-muted m-b-0">Free courses for all our customers at A1 Conference
                                            Room - 9:00 am tomorrow!</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-auto text-end update-meta">
                                        <p class="text-muted m-b-0 d-inline-flex">09:15 AM</p>
                                        <div class="border border-2 border-danger text-danger update-icon">N</div>
                                    </div>
                                    <div class="col">
                                        <a href="#!" class="d-inline-flex align-items-center">
                                            <h6 class="mb-0 me-2">Create report</h6>
                                            <span class="badge bg-danger">Not Start</span>
                                        </a>
                                        <p class="text-muted m-b-0">Happy Hour! Free drinks at <span> <a href="#!"
                                                    class="text-primary">Cafe-Bar all </a> </span>day long!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- Apex Chart -->
    <script src="{{ asset('assets/js/plugins/apexcharts.min.js') }}"></script>
    <script>
        'use strict';
        document.addEventListener('DOMContentLoaded', function () {
            setTimeout(function () {
                floatchart();
            }, 500);
        });

        function floatchart() {
            (function () {
                var options = {
                    chart: {
                        type: 'area',
                        height: 230,
                        toolbar: {
                            show: false
                        }
                    },
                    colors: ['#D10809'],
                    fill: {
                        type: 'gradient',
                        gradient: {
                            shadeIntensity: 1,
                            type: 'vertical',
                            inverseColors: false,
                            opacityFrom: 0.5,
                            opacityTo: 0
                        }
                    },
                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        width: 1
                    },
                    plotOptions: {
                        bar: {
                            columnWidth: '45%',
                            borderRadius: 4
                        }
                    },
                    grid: {
                        strokeDashArray: 4
                    },
                    series: [{
                        data: [30, 60, 40, 70, 50, 90, 50, 55, 45, 60, 50, 65]
                    }],
                    xaxis: {
                        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov',
                            'Dec'
                        ],
                        labels: {
                            hideOverlappingLabels: true,
                        },
                        axisBorder: {
                            show: false
                        },
                        axisTicks: {
                            show: false
                        }
                    }
                };
                var chart = new ApexCharts(document.querySelector('#income-graph'), options);
                chart.render();
            })();
        }
    </script>
@endsection
