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
                            <a href="{{ route('laundry-item.index') }}" class="fs-5 float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        @csrf
                        @method('POST')
                        @if (Crypt::decrypt($paramForm) === 'update')
                            <div class="form-group mb-3" hidden>
                                <label class="form-label" for="id">ID</label>
                                <input type="text" class="form-control" id="id" name="id"
                                    value="{{ Crypt::decrypt($laundryItem->id) }}" disabled>
                            </div>
                            <div class="form-group mb-3" hidden>
                                <label class="form-label" for="paramForm">Parameter</label>
                                <input type="text" class="form-control" id="paramForm" name="paramForm"
                                    value="{{ Crypt::decrypt($formParam) }}" readonly>
                            </div>
                        @endif
                        <div class="form-group mb-3">
                            <label class="form-label" for="name">Item Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" required
                                placeholder="Item Name..." value="{{ $laundryItem ? $laundryItem->name : old('name') }}">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="price">Price</label>
                            <input type="price" class="form-control" id="price" name="price"
                                placeholder="Price Per Weight(Kg)..."
                                value="{{ $laundryItem ? $laundryItem->price : old('price') }}">
                            @error('price')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="active">Active Item <span class="text-danger">*</span></label>
                            <select name="active" id="active" name="active" class="form-control" required>
                                <option value="">-- Select Option --</option>
                                <option value="Yes"
                                    @if ($laundryItem && $laundryItem->active == '1') selected @elseif (old('active') == '1') selected @endif>
                                    Active
                                </option>
                                <option value="No"
                                    @if ($laundryItem && $laundryItem->active == '0') selected @elseif (old('active') == '0')
                                selected @endif>
                                    UnActive
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
                        <a href="{{ route('laundry-item.index') }}" class="btn btn-secondary">
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
