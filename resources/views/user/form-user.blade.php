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
                            <a href="{{ route('users.index') }}" class="fs-5 float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        @csrf
                        @method('POST')
                        @if (Crypt::decrypt($paramForm) === 'update')
                            <div class="form-group mb-3" hidden>
                                <label class="form-label" for="id">User ID</label>
                                <input type="text" class="form-control" id="id" name="id"
                                    value="{{ Crypt::decrypt($user->id) }}" disabled>
                            </div>
                            <div class="form-group mb-3" hidden>
                                <label class="form-label" for="paramForm">Parameter</label>
                                <input type="text" class="form-control" id="paramForm" name="paramForm"
                                    value="{{ Crypt::decrypt($formParam) }}" readonly>
                            </div>
                        @endif
                        <div class="form-group mb-3">
                            <label class="form-label" for="name">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" required placeholder="Username..."
                                value="{{ $user ? $user->name : old('name') }}">
                            @error('name')
                                <small class="text-danger">{{ $error }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="email">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" required placeholder="Email..."
                                value="{{ $user ? $user->email : old('email') }}">
                            @error('email')
                                <small class="text-danger">{{ $error }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="password">Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" id="password" name="password" required
                                placeholder="Password..." value="">
                            <small>Leave password it's blank if you don't want to change...</small>
                            @error('password')
                                <small class="text-danger">{{ $error }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="role">Role <span class="text-danger">*</span></label>
                            <select name="role" id="role" name="role" class="form-control" required>
                                <option value="">-- Select Role --</option>
                                <option value="{{ \App\Enum\RoleEnum::OWNER->value }}" @if($user && $user->role === \App\Enum\RoleEnum::OWNER->value) selected
                                @elseif(old('role') === \App\Enum\RoleEnum::OWNER->value) selected @endif>
                                    {{ \App\Enum\RoleEnum::OWNER->value }}
                                </option>
                                <option value="{{ \App\Enum\RoleEnum::EMPLOYEE->value }}" @if($user && $user->role === \App\Enum\RoleEnum::EMPLOYEE->value) selected
                                @elseif(old('role') === \App\Enum\RoleEnum::OWNER->value) selected @endif>
                                    {{ \App\Enum\RoleEnum::EMPLOYEE->value }}
                                </option>
                            </select>
                            @error('role')
                                <small class="text-danger">{{ $error }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="active">Active <span class="text-danger">*</span></label>
                            <select name="active" id="active" name="active" class="form-control" required>
                                <option value="">-- Select Active --</option>
                                <option value="Yes" @if ($user && $user->active == 'Yes') selected @elseif (old('active') == 'Yes') selected @endif>
                                    Yes (Active)
                                </option>
                                <option value="No" @if ($user && $user->active == 'No') selected @elseif (old('active') == 'No')
                                selected @endif>
                                    No (Deactive)
                                </option>
                            </select>
                            @error('active')
                                <small class="text-danger">{{ $error }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="photo">Photo Profile</label>
                            <input type="file" class="form-control" id="photo" name="photo" accept="image/*" required>
                            @error('photo')
                                <small class="text-danger">{{ $error }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="phone">Phone Number</label>
                            <input type="text" class="form-control" id="phone" name="phone" required
                                placeholder="Phone Number....">
                            @error('phone')
                                <small class="text-danger">{{ $error }}</small>
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
