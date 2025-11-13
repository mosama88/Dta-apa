@extends('dashboard.layouts.master', ['titlePage' => 'المحافظات'])
@section('governorates_active', 'active')
@section('title', 'المحافظات')
@section('content')
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">أسم المحافظة <span class="text-danger">*</span></label>

                                <input readonly name="name" type="text" value="{{ old('name', $governorate->name) }}"
                                    class="form-control" placeholder="أسم المحافظة :">
                            </div>
                        </div><!--end col-->

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">أنشاء بواسطة</label>
                                    <input readonly name="created_by" type="text"
                                        value="{{ old('created_by', $governorate->createdBy->name . ' - ' . $governorate->created_at->format('d/m/Y H:i')) }}"
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
                                            $governorate->updated_by
                                                ? $governorate->updatedBy->name . ' - ' . $governorate->updated_at->format('d/m/Y H:i')
                                                : 'لا يوجد تحديث',
                                        ) }}"
                                        class="form-control text-center fw-bold"
                                        style="background-color: #f8fafc; border: 1px solid #cbd5e1; border-radius: 8px; color:#334155;"
                                        placeholder="تحديث بواسطة :">
                                </div>
                            </div><!--end col-->
                        </div>

                    </div><!--end row-->

                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush
