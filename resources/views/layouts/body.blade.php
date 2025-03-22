@include('layouts.header')
@if (session()->has('success'))
    <script>
        'use strict';
        window.onload = function() {
            Swal.fire({
                icon: "success",
                title: "Notification",
                text: "{{ session('success') }}"
            });
        }
    </script>
@elseif (session()->has('error'))
    <script>
        'use strict';
        window.onload = function() {
            Swal.fire({
                icon: "error",
                title: "Notification",
                text: "{{ session('error') }}"
            });
        }
    </script>
@endif
<!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>
<!-- [ Pre-loader ] End -->
<!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="{{ route('dashboard.index') }}" class="b-brand text-primary">
                <img style="width : 150px;" src="{{ asset('LAUNDRY Logo.png') }}" alt="logo" />
            </a>
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item pc-caption">
                    <label>Navigation</label>
                </li>
                <li class="pc-item">
                    <a href="{{ route('dashboard.index') }}" class="pc-link">
                        <span class="pc-micon">
                            <i class="ti ti-home"></i>
                        </span>
                        <span class="pc-mtext">Home</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="{{ route('users.index') }}" class="pc-link">
                        <span class="pc-micon">
                            <i class="ti ti-users"></i>
                        </span>
                        <span class="pc-mtext">Users</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="{{ route('membership.index') }}" class="pc-link">
                        <span class="pc-micon">
                            <i class="ti ti-users"></i>
                        </span>
                        <span class="pc-mtext">Memberships</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="{{ route('laundry-item.index') }}" class="pc-link">
                        <span class="pc-micon">
                            <i class="ti ti-building-warehouse"></i>
                        </span>
                        <span class="pc-mtext">Laundry Items</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="{{ route('promo-service.index') }}" class="pc-link">
                        <span class="pc-micon">
                            <i class="ti ti-report-money"></i>
                        </span>
                        <span class="pc-mtext">Promo Service</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="" class="pc-link">
                        <span class="pc-micon">
                            <i class="ti ti-database"></i>
                        </span>
                        <span class="pc-mtext">Transaction</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="" class="pc-link">
                        <span class="pc-micon">
                            <i class="ti ti-database"></i>
                        </span>
                        <span class="pc-mtext">Payment</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="" class="pc-link">
                        <span class="pc-micon">
                            <i class="ti ti-report-analytics"></i>
                        </span>
                        <span class="pc-mtext">Report Transaction</span>
                    </a>
                </li>
                <li class="pc-item pc-caption">
                    <label>Setting</label>
                    <i class="ph-duotone ph-buildings"></i>
                </li>
                <li class="pc-item">
                    <a href="" class="pc-link">
                        <span class="pc-micon">
                            <i class="ti ti-settings"></i>
                        </span>
                        <span class="pc-mtext">Application</span></a>
                </li>
            </ul>
            <div class="card nav-action-card bg-brand-color-4">
                <div class="card-body"
                    style="background-image: url('{{ asset('assets/images/layout/nav-card-bg.svg') }}')">
                    <h5 class="text-dark">Help Center</h5>
                    <p class="text-dark text-opacity-75">Please contact us for more questions.</p>
                    <a href="#" class="btn btn-primary" target="_blank">
                        Go to help Center
                    </a>
                </div>
            </div>
        </div>
        <div class="card pc-user-card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('assets/images/user/avatar-1.jpg') }}" alt="user-image"
                            class="user-avtar wid-45 rounded-circle" />
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <div class="dropdown">
                            <a href="#" class="arrow-none dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false" data-bs-offset="0,20">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 me-2">
                                        <h6 class="mb-0">Jonh Smith</h6>
                                        <small>Administrator</small>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="btn btn-icon btn-link-secondary avtar">
                                            <i class="ph-duotone ph-windows-logo"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li>
                                        <a class="pc-user-links">
                                            <i class="ph-duotone ph-user"></i>
                                            <span>My Account</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="pc-user-links">
                                            <i class="ph-duotone ph-power"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- [ Sidebar Menu ] end -->
<!-- [ Header Topbar ] start -->
<header class="pc-header">
    <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
        <div class="me-auto pc-mob-drp">
            <ul class="list-unstyled">
                <!-- ======= Menu collapse Icon ===== -->
                <li class="pc-h-item pc-sidebar-collapse">
                    <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>
                <li class="pc-h-item pc-sidebar-popup">
                    <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- [Mobile Media Block end] -->
        <div class="ms-auto">
            <ul class="list-unstyled">
                <li class="dropdown pc-h-item d-none d-md-inline-flex">
                    <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="ph-duotone ph-circles-four"></i>
                    </a>
                    <div class="dropdown-menu dropdown-qta dropdown-menu-end pc-h-dropdown">
                        <div class="overflow-hidden">
                            <div class="qta-links m-n1">
                                <a href="#!" class="dropdown-item">
                                    <i class="ph-duotone ph-shopping-cart"></i>
                                    <span>Transcation</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="ph-duotone ph-scroll"></i>
                                    <span>Invoice</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="ph-duotone ph-identification-badge"></i>
                                    <span>Membership</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="ph-duotone ph-money"></i>
                                    <span>Promo</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="ph-duotone ph-user-circle"></i>
                                    <span>Users</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="ph-duotone ph-gear"></i>
                                    <span>Settings</span>
                                </a>

                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown pc-h-item">
                    <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="ph-duotone ph-bell"></i>
                        <span class="badge bg-danger pc-h-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
                        <div class="dropdown-header d-flex align-items-center justify-content-between">
                            <h5 class="m-0">Notifications</h5>
                            <ul class="list-inline ms-auto mb-0">
                                <li class="list-inline-item">
                                    <a href="../application/mail.html" class="avtar avtar-s btn-link-hover-primary">
                                        <i class="ti ti-link f-18"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown-body text-wrap header-notification-scroll position-relative"
                            style="max-height: calc(100vh - 235px)">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <p class="text-span">Today</p>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <img src="{{ asset('assets/images/user/avatar-2.jpg') }}"
                                                alt="user-image" class="user-avtar avtar avtar-s" />
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 me-3 position-relative">
                                                    <h6 class="mb-0 text-truncate">Keefe Bond added new tags to 💪
                                                        Design system</h6>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <span class="text-sm">2 min ago</span>
                                                </div>
                                            </div>
                                            <p class="position-relative mt-1 mb-2"><br /><span
                                                    class="text-truncate">Lorem Ipsum has been the
                                                    industry's standard dummy text ever since the 1500s.</span></p>
                                            <span class="badge bg-light-primary border border-primary me-1 mt-1">web
                                                design</span>
                                            <span
                                                class="badge bg-light-warning border border-warning me-1 mt-1">Dashobard</span>
                                            <span class="badge bg-light-success border border-success me-1 mt-1">Design
                                                System</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="avtar avtar-s bg-light-primary">
                                                <i class="ph-duotone ph-chats-teardrop f-18"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 me-3 position-relative">
                                                    <h6 class="mb-0 text-truncate">Message</h6>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <span class="text-sm">1 hour ago</span>
                                                </div>
                                            </div>
                                            <p class="position-relative mt-1 mb-2"><br /><span
                                                    class="text-truncate">Lorem Ipsum has been the
                                                    industry's standard dummy text ever since the 1500s.</span></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <p class="text-span">Yesterday</p>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="avtar avtar-s bg-light-danger">
                                                <i class="ph-duotone ph-user f-18"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 me-3 position-relative">
                                                    <h6 class="mb-0 text-truncate">Challenge invitation</h6>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <span class="text-sm">12 hour ago</span>
                                                </div>
                                            </div>
                                            <p class="position-relative mt-1 mb-2"><br /><span
                                                    class="text-truncate"><strong> Jonny aber </strong>
                                                    invites to join the challenge</span></p>
                                            <button
                                                class="btn btn-sm rounded-pill btn-outline-secondary me-2">Decline</button>
                                            <button class="btn btn-sm rounded-pill btn-primary">Accept</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="avtar avtar-s bg-light-info">
                                                <i class="ph-duotone ph-notebook f-18"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 me-3 position-relative">
                                                    <h6 class="mb-0 text-truncate">Forms</h6>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <span class="text-sm">2 hour ago</span>
                                                </div>
                                            </div>
                                            <p class="position-relative mt-1 mb-2">Lorem Ipsum is simply dummy
                                                text of the printing and
                                                typesetting industry. Lorem Ipsum has been the industry's standard
                                                dummy text ever since the 1500s.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <img src="{{ asset('assets/images/user/avatar-2.jpg') }}"
                                                alt="user-image" class="user-avtar avtar avtar-s" />
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 me-3 position-relative">
                                                    <h6 class="mb-0 text-truncate">Keefe Bond added new tags to 💪
                                                        Design system</h6>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <span class="text-sm">2 min ago</span>
                                                </div>
                                            </div>
                                            <p class="position-relative mt-1 mb-2"><br /><span
                                                    class="text-truncate">Lorem Ipsum has been the
                                                    industry's standard dummy text ever since the 1500s.</span></p>
                                            <button
                                                class="btn btn-sm rounded-pill btn-outline-secondary me-2">Decline</button>
                                            <button class="btn btn-sm rounded-pill btn-primary">Accept</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="avtar avtar-s bg-light-success">
                                                <i class="ph-duotone ph-shield-checkered f-18"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 me-3 position-relative">
                                                    <h6 class="mb-0 text-truncate">Security</h6>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <span class="text-sm">5 hour ago</span>
                                                </div>
                                            </div>
                                            <p class="position-relative mt-1 mb-2">Lorem Ipsum is simply dummy
                                                text of the printing and
                                                typesetting industry. Lorem Ipsum has been the industry's standard
                                                dummy text ever since the 1500s.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown-footer">
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="d-grid"><button class="btn btn-primary">See More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown pc-h-item header-user-profile">
                    <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false">
                        <img src="{{ asset('assets/images/user/avatar-2.jpg') }}" alt="user-image"
                            class="user-avtar" />
                    </a>
                    <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                        <div class="dropdown-header d-flex align-items-center justify-content-between">
                            <h5 class="m-0">Profile</h5>
                        </div>
                        <div class="dropdown-body">
                            <div class="profile-notification-scroll position-relative"
                                style="max-height: calc(100vh - 225px)">
                                <ul class="list-group list-group-flush w-100">
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{ asset('assets/images/user/avatar-2.jpg') }}"
                                                    alt="user-image" class="wid-50 rounded-circle" />
                                            </div>
                                            <div class="flex-grow-1 mx-3">
                                                <h5 class="mb-0">Qori Chairawan</h5>
                                                <a class="link-primary"
                                                    href="mailto:qorichairawan17@gmail.com">qorichairawan17@gmail.com</a>
                                            </div>
                                            <span class="badge bg-primary">PRO</span>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="dropdown-item">
                                            <span class="d-flex align-items-center">
                                                <i class="ph-duotone ph-key"></i>
                                                <span>Change password</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="dropdown-item">
                                            <span class="d-flex align-items-center">
                                                <i class="ph-duotone ph-user-circle"></i>
                                                <span>Edit profile</span>
                                            </span>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <span class="d-flex align-items-center">
                                                <i class="ph-duotone ph-bell"></i>
                                                <span>Notifications</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="dropdown-item">
                                            <span class="d-flex align-items-center">
                                                <i class="ph-duotone ph-power"></i>
                                                <span>Logout</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>
<!-- [ Header ] end -->

<!-- [ Main Content ] start -->
@yield('content')
<!-- [ Main Content ] end -->

<!-- Footer -->
<x-footer-component />
@include('layouts.footer')
