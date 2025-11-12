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
                    </div><!--end row-->

                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush
