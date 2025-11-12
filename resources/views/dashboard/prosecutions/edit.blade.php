@extends('dashboard.layouts.master', ['titlePage' => 'الجهات'])
@section('author_active', 'active')
@section('title', 'الجهات')
@section('content')
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('dashboard.prosecutions.update', $prosecution->slug) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">أسم الجهه <span class="text-danger">*</span></label>

                                    <input name="name" type="text" value="{{ old('name', $prosecution->name) }}"
                                        class="form-control @error('name') is-invalid @enderror" placeholder="أسم الجهه :">
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
                                <input type="submit" id="submit" name="send" class="btn btn-primary" value="Save">
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
