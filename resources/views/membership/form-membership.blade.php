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
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->

            <!-- [ Main Content ] start -->
            <div class="card">
                <form action="" method="post">
                    <div class="card-header">
                        <h4 class="card-title d-flex flex-row justify-content-between">
                            {{ $pageTitle }}
                            <a href="{{ route('membership.index') }}" class="fs-5 float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        @csrf
                        @method('POST')
                        @if (Crypt::decrypt($paramForm) === 'update')
                            <div class="form-group mb-3" hidden>
                                <label class="form-label" for="id">ID</label>
                                <input type="text" class="form-control" id="id" name="id"
                                    value="{{ Crypt::decrypt($membership->id) }}" disabled>
                            </div>
                            <div class="form-group mb-3" hidden>
                                <label class="form-label" for="paramForm">Parameter</label>
                                <input type="text" class="form-control" id="paramForm" name="paramForm"
                                    value="{{ Crypt::decrypt($formParam) }}" readonly>
                            </div>
                        @endif
                        <div class="form-group mb-3">
                            <label class="form-label" for="name">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" required
                                placeholder="Username..." value="{{ $membership ? $membership->name : old('name') }}">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="phone">Phone Number <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="phone" name="phone" required
                                placeholder="Phone Number..." value="{{ $membership ? $membership->phone : old('phone') }}">
                            @error('phone')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email..."
                                value="{{ $membership ? $membership->email : old('email') }}">
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="block">Block Member <span class="text-danger">*</span></label>
                            <select name="block" id="block" name="block" class="form-control" required>
                                <option value="">-- Select Option --</option>
                                <option value="Yes"
                                    @if ($membership && $membership->block == '1') selected @elseif (old('block') == '1') selected @endif>
                                    Block
                                </option>
                                <option value="No"
                                    @if ($membership && $membership->block == '0') selected @elseif (old('block') == '0')
                                selected @endif>
                                    Unblock
                                </option>
                            </select>
                            @error('active')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary">
                            <i class="ti ti-database"></i>
                            Save Changes
                        </button>
                        <a href="{{ route('membership.index') }}" class="btn btn-secondary">
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
