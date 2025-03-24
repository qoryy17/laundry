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
                <form action="" method="POST">
                    <div class="card-header">
                        <h5 class="card-title">Setting Your Application In Here</h5>
                    </div>
                    <div class="card-body">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="laundryName">
                                Laundry Name <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="laundryName" placeholder="Laundry Name..."
                                name="laundryName" required>
                            @error('laundryName')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="slogan">
                                Slogan Laundry <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="slogan" placeholder="Laundry Name..."
                                name="slogan" required>
                            @error('slogan')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="description">
                                Description <span class="text-danger">*</span>
                            </label>
                            <textarea name="description" id="description" class="form-control" placeholder="Description..." required></textarea>
                            @error('description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="address">
                                Address <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="address" placeholder="Address..."
                                name="address" required>
                            @error('address')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="contact">
                                Contact Phone <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="contact" placeholder="contact..."
                                name="contact" required>
                            @error('contact')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">
                                Email <span class="text-danger">*</span>
                            </label>
                            <input type="email" class="form-control" id="email" placeholder="email..." name="email"
                                required>
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-file mb-3">
                            <label class="form-label" for="logo">Logo
                                <span class="text-danger">*</span>
                            </label>
                            <input type="file" class="form-control" aria-label="logo" id="logo" name="logo">
                            @error('logo')
                                <small class="text-danger mt-1">* {{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary">
                            <i class="ti ti-database"></i>
                            Save Changes
                        </button>
                        <a href="{{ route('users.index') }}" class="btn btn-secondary">
                            <i class="ti ti-corner-up-left"></i>
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
@endsection
