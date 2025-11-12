@extends('dashboard.layouts.master', ['titlePage' => 'الجهات'])
@section('author_active', 'active')
@section('title', 'الجهات')
@section('content')
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">أسم الجهه <span class="text-danger">*</span></label>

                                <input readonly name="name" type="text" value="{{ old('name', $prosecution->name) }}"
                                    class="form-control @error('name') is-invalid @enderror" placeholder="أسم الجهه :">
                                @error('name')
                                    <span class="invalid-feedback text-right d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
