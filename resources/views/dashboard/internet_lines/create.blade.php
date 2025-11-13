@php
    use App\Enums\TypeLineEnum;
@endphp
@extends('dashboard.layouts.master', ['titlePage' => 'خطوط الانترنت'])
@section('internet_lines_active', 'active')
@section('title', 'خطوط الانترنت')
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .select2-container--default .select2-selection--single {
            height: 35px;
            /* ارتفاع الصندوق */
            font-size: 16px;
            /* حجم الخط */
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 37px;
            /* لمحاذاة النص عموديًا */
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 45px;
            /* ارتفاع السهم */
        }
    </style>
@endpush
@section('content')
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('dashboard.internet_lines.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">أسم الجهه <span class="text-danger">*</span></label>
                                    <select name="prosecution_id" class="form-select form-control select2"
                                        aria-label="Default select example">
                                        <option selected>-- أختر أسم الجهه --</option>
                                        @forelse ($other['prosecutions'] as $prosecution)
                                            <option @if (old('prosecution_id') == $prosecution->id) selected="selected" @endif
                                                value="{{ $prosecution->id }}">{{ $prosecution->name }}</option>
                                        @empty
                                            عفوآ لا توجد بيانات
                                        @endforelse
                                    </select>
                                    @error('prosecution_id')
                                        <span class="invalid-feedback text-right d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div><!--end col-->

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">كود الخط <span class="text-danger">*</span></label>

                                    <input name="code_line" type="text" value="{{ old('code_line') }}"
                                        class="form-control @error('code_line') is-invalid @enderror"
                                        placeholder="كود الخط :">
                                    @error('code_line')
                                        <span class="invalid-feedback text-right d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div><!--end col-->

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">رقم الطلب <span class="text-danger">*</span></label>

                                    <input name="order_number" type="text" value="{{ old('order_number') }}"
                                        class="form-control @error('order_number') is-invalid @enderror"
                                        placeholder="رقم الطلب :">
                                    @error('order_number')
                                        <span class="invalid-feedback text-right d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div><!--end col-->

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">سرعة الخط <span class="text-danger">*</span></label>

                                    <input name="internet_speed" type="text" value="{{ old('internet_speed') }}"
                                        class="form-control @error('internet_speed') is-invalid @enderror"
                                        placeholder="سرعة الخط :">
                                    @error('internet_speed')
                                        <span class="invalid-feedback text-right d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div><!--end col-->


                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">IP Address<span class="text-danger">*</span></label>

                                    <input name="ip_address" type="text" value="{{ old('ip_address') }}"
                                        class="form-control @error('ip_address') is-invalid @enderror"
                                        placeholder="IP Address  :">
                                    @error('ip_address')
                                        <span class="invalid-feedback text-right d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div><!--end col-->


                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Mac Address<span class="text-danger">*</span></label>

                                    <input name="mac_address" type="text" value="{{ old('mac_address') }}"
                                        class="form-control @error('mac_address') is-invalid @enderror"
                                        placeholder="Mac Address  :">
                                    @error('mac_address')
                                        <span class="invalid-feedback text-right d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div><!--end col-->

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">نوع الخط <span class="text-danger">*</span></label>
                                    <select name="type_line" class="form-select @error('type_line') is-invalid @enderror"
                                        id="exampleFormControlSelect1" aria-label="Default select example">
                                        <option selected value="">-- أختر نوع الخط --</option>
                                        <option value="{{ TypeLineEnum::Internet->value }}" @selected(old('type_line') == TypeLineEnum::Internet->value)>
                                            {{ TypeLineEnum::Internet->label() }}
                                        </option>
                                        <option value="{{ TypeLineEnum::VPN->value }}" @selected(old('type_line') == TypeLineEnum::VPN->value)>
                                            {{ TypeLineEnum::VPN->label() }}
                                        </option>
                                    </select>
                                    @error('type_line')
                                        <span class="invalid-feedback text-right d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div><!--end col-->


                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">أسم المحافظة <span class="text-danger">*</span></label>
                                    <select name="governorate_id" class="form-select form-control select2"
                                        aria-label="Default select example">
                                        <option selected>-- أختر أسم المحافظة --</option>
                                        @forelse ($other['governorates'] as $governorate)
                                            <option @if (old('governorate_id') == $governorate->id) selected="selected" @endif
                                                value="{{ $governorate->id }}">{{ $governorate->name }}</option>
                                        @empty
                                            عفوآ لا توجد بيانات
                                        @endforelse
                                    </select>
                                    @error('governorate_id')
                                        <span class="invalid-feedback text-right d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                        <div class="row text-center">
                            <div class="col-sm-12">
                                <input type="submit" id="submit" name="send" class="btn btn-primary"
                                    value="حفظ البيانات">
                            </div><!--end col-->
                        </div><!--end row-->
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.select2').select2({
                placeholder: "اختر النيابة",
                allowClear: true
            });
        });
    </script>
@endpush
