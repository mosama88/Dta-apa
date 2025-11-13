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
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">أسم الجهه <span class="text-danger">*</span></label>
                                <input name="prosecution_id" type="text"
                                    value="{{ old('prosecution_id', $internetLine->prosecution->name) }}"
                                    class="form-control" readonly>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">كود الخط <span class="text-danger">*</span></label>

                                <input name="code_line" type="text"
                                    value="{{ old('code_line', $internetLine->code_line) }}" class="form-control" readonly>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">رقم الطلب <span class="text-danger">*</span></label>

                                <input name="order_number" type="text"
                                    value="{{ old('order_number', $internetLine->order_number) }}" class="form-control"
                                    readonly>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">سرعة الخط <span class="text-danger">*</span></label>

                                <input name="internet_speed" type="text"
                                    value="{{ old('internet_speed', $internetLine->internet_speed) }}" class="form-control"
                                    readonly>
                            </div>
                        </div><!--end col-->


                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">IP Address<span class="text-danger">*</span></label>

                                <input name="ip_address" type="text"
                                    value="{{ old('ip_address', $internetLine->ip_address) }}" class="form-control"
                                    readonly>
                            </div>
                        </div><!--end col-->


                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Mac Address<span class="text-danger">*</span></label>
                                <input name="mac_address" type="text"
                                    value="{{ old('mac_address', $internetLine->mac_address) }}" class="form-control"
                                    readonly>
                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">نوع الخط <span class="text-danger">*</span></label>
                                <input name="type_line" type="text"
                                    value="{{ old('type_line', $internetLine->type_line->label()) }}" class="form-control"
                                    readonly>
                            </div>
                        </div><!--end col-->


                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">أسم المحافظة <span class="text-danger">*</span></label>
                                <input name="governorate_id" type="text"
                                    value="{{ old('governorate_id', $internetLine->governorate->name) }}"
                                    class="form-control" readonly>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">أنشاء بواسطة</label>
                                <input readonly name="created_by" type="text"
                                    value="{{ old('created_by', $internetLine->createdBy->name . ' - ' . $internetLine->created_at->format('d/m/Y H:i')) }}"
                                    class="form-control text-center fw-bold"
                                    style="background-color: #f8fafc; border: 1px solid #cbd5e1; border-radius: 8px; color:#334155;"
                                    placeholder="أنشئ بواسطة :">

                            </div>
                        </div><!--end col-->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">تحديث بواسطة</label>
                                <input readonly name="updated_by" type="text"
                                    value="{{ old(
                                        'updated_by',
                                        $internetLine->updated_by
                                            ? $internetLine->updatedBy->name . ' - ' . $internetLine->updated_at->format('d/m/Y H:i')
                                            : 'لا يوجد تحديث',
                                    ) }}"
                                    class="form-control text-center fw-bold"
                                    style="background-color: #f8fafc; border: 1px solid #cbd5e1; border-radius: 8px; color:#334155;"
                                    placeholder="تحديث بواسطة :">
                            </div>
                        </div><!--end col-->
                    </div>

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
