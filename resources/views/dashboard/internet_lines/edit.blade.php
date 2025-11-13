@extends('dashboard.layouts.master', ['titlePage' => 'خطوط الانترنت'])
@section('internet_lines_active', 'active')
@section('title', 'خطوط الانترنت')
@section('content')
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('dashboard.internet_lines.update', $governorate->slug) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">أسم المحافظة <span class="text-danger">*</span></label>

                                    <input name="name" type="text" value="{{ old('name', $governorate->name) }}"
                                        class="form-control @error('name') is-invalid @enderror" placeholder="أسم المحافظة :">
                                    @error('name')
                                        <span class="invalid-feedback text-right d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                        <div class="row text-center">
                            <div class="col-sm-12">
                                <input type="submit" id="submit" name="send" class="btn btn-primary" value="تحديث البيانات">
                            </div><!--end col-->
                        </div><!--end row-->
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush
