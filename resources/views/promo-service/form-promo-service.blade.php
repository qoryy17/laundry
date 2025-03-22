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
                            <a href="{{ route('promo-service.index') }}" class="fs-5 float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        @csrf
                        @method('POST')
                        @if (Crypt::decrypt($paramForm) == 'update')
                            <div class="form-group mb-3" hidden>
                                <label class="form-label" for="id">ID</label>
                                <input type="text" class="form-control" id="id" name="id"
                                    value="{{ Crypt::decrypt($promoService->id) }}" disabled>
                            </div>
                        @endif
                        <div class="form-group mb-3" hidden>
                            <label class="form-label" for="paramForm">Parameter</label>
                            <input type="text" class="form-control" id="paramForm" name="paramForm"
                                value="{{ Crypt::decrypt($paramForm) }}" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="promoCode">Promo Code <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="promoCode" name="promoCode" required
                                placeholder="Promo Code..."
                                value="{{ $promoService ? $promoService->promoCode : old('promoCode') }}">
                            @error('promoCode')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="promoName">Promo Name <span class="text-danger">*</span></label>
                            <div class="d-flex" style="gap: 10px;">
                                <input type="text" class="form-control" id="promoName" name="promoName" required
                                    placeholder="Promo Name..."
                                    value="{{ $promoService ? $promoService->promoName : old('promoName') }}">
                                <button class="btn btn-primary" title="Auto Generate">
                                    <i class="ti ti-switch"></i>
                                </button>
                            </div>
                            @error('promoName')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="promoExpired">Promo Expired</label>
                            <input type="text" class="form-control" name="promoExpired" id="promoExpired"
                                placeholder="Choose Expired..." readonly required
                                value="{{ $promoService ? Carbon\Carbon::createFromFormat('Y-m-d', $promoService->promo_expired)->format('m/d/Y') : old('promoExpired') }}">
                            @error('promoExpired')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="promoType">Promo Type <span class="text-danger">*</span></label>
                            <select name="promoType" id="promoType" name="promoType" class="form-control" required>
                                <option value="">-- Select Option --</option>
                                <option value="Yes"
                                    @if ($promoService && $promoService->promoType == \App\Enum\PromoTypeEnum::FREE->value) selected @elseif (old('promoType') == \App\Enum\PromoTypeEnum::FREE->value) selected @endif>
                                    Free
                                </option>
                                <option value="No"
                                    @if ($promoService && $promoService->promoType == \App\Enum\PromoTypeEnum::DISCOUNT->value) selected @elseif (old('promoType') == \App\Enum\PromoTypeEnum::DISCOUNT->value)
                                selected @endif>
                                    Discount
                                </option>
                            </select>
                            @error('promoType')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="required">
                                Required Maximum <span class="text-danger">*</span>
                            </label>
                            <input type="number" class="form-control" id="required" name="required" required
                                placeholder="Required Maximum Promo..."
                                value="{{ $promoService ? $promoService->required : old('required') }}">
                            @error('required')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="discount">
                                Discount(in Percent)/ Price (in IDR) <span class="text-danger">*</span>
                            </label>
                            <input type="number" class="form-control" id="discount" name="discount" required
                                placeholder="Discount/ Price Promo..."
                                value="{{ $promoService ? $promoService->discount : old('discount') }}">
                            @error('discount')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="active">Active <span class="text-danger">*</span></label>
                            <select name="active" id="active" name="active" class="form-control" required>
                                <option value="">-- Select Option --</option>
                                <option value="Yes"
                                    @if ($promoService && $promoService->active == '1') selected @elseif (old('active') == '1') selected @endif>
                                    Active
                                </option>
                                <option value="No"
                                    @if ($promoService && $promoService->active == '0') selected @elseif (old('active') == '0')
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
                        <a href="{{ route('promo-service.index') }}" class="btn btn-secondary">
                            <i class="ti ti-corner-up-left"></i>
                            Cancel
                        </a>
                    </div>
                </form>
            </div>

            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- bootstrap-datepicker -->
    <script src="{{ asset('assets/js/plugins/datepicker-full.min.js') }}"></script>
    <script>
        (function() {
            const d_week = new Datepicker(document.querySelector("#promoExpired"), {
                buttonClass: "btn",
            });
        })();
    </script>
@endsection
