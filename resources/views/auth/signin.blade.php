<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title>{{ $title ?? env('APP_NAME') }}</title>
    <x-meta-component />

    <!-- [Favicon] icon -->
    <link rel="icon" href="{{ asset('LAUNDRY Logo - Favicon - 32x32.png') }}" type="image/png" />
    <!-- [Google Font : Public Sans] icon -->
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/tabler-icons.min.css') }}">
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}">
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css') }}">
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/material.css') }}">
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" id="main-style-link">
    <link rel="stylesheet" href="{{ asset('assets/css/style-preset.css') }}">

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-5" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr"
    data-pc-theme="light">
    <div class="auth-main v2" style="background-image: url('{{ asset('assets/images/background-signin.jpg') }}')">
        <div class="bg-overlay bg-dark"></div>
        <div class="auth-wrapper">
            <div class="auth-sidecontent">
                <div class="auth-sidefooter">
                    <img src="{{ asset('LAUNDRY Logo.png') }}" class="img-fluid" alt="images" style="width: 200px;" />
                    <hr class="mb-3 mt-4" />
                    <div class="row">
                        <div class="col my-1">
                            <p class="m-0">Made with ♥ by {{ env('APP_AUTHOR') }}</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="auth-form">
                <div class="card my-5 mx-3">
                    <div class="card-body">
                        <img src="{{ asset('LAUNDRY Logo.png') }}" alt="logo" class="img-fluid"
                            style="width: 200px;" />
                        <h4 class="f-w-500 mb-1">{{ env('APP_NAME') }}</h4>
                        <p class="mb-3 text-primary">Akira Laundry
                            <br> <span class="text-dark">Jalan Merdeka No. 45 Medan Sumatera Utara</span>
                        </p>
                        <form action="" method="post">
                            @csrf
                            @method('post')
                            <label for="email">
                                Email <span class="text-danger">*</span>
                            </label>
                            <div class="mb-3">
                                <input type="email" required class="form-control" id="password"
                                    placeholder="Email Address" name="email">
                                @error('email')
                                    <small class="text-danger">* {{ $message }}</small>
                                @enderror
                            </div>
                            <label for="password">
                                Password <span class="text-danger">*</span>
                            </label>
                            <div class="mb-3">
                                <input type="password" required class="form-control" id="password"
                                    placeholder="Password" name="password">
                                @error('password')
                                    <small class="text-danger">* {{ $message }}</small>
                                @enderror
                            </div>
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                        <div class="saprator my-2">
                            <span>Informasi Aplikasi</span>
                        </div>
                        <p style="text-align: justify;">
                            {{ env('APP_DESC') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
    <!-- Required Js -->
    <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/fonts/custom-font.js') }}"></script>
    <script src="{{ asset('assets/js/pcoded.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/feather.min.js') }}"></script>
    <script>
        change_box_container('false');
        layout_sidebar_change('light');
        layout_change('light');
        layout_caption_change('true');
        layout_rtl_change('false');
        preset_change("preset-5");
    </script>
</body>

</html>
