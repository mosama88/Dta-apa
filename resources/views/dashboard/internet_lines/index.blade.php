@php
    use App\Livewire\Dashboard\InternetLineTable;
@endphp
@extends('dashboard.layouts.master', ['titlePage' => 'خطوط الانترنت'])
@section('internet_lines_active', 'active')
@section('title', 'خطوط الانترنت')
@section('content')
    @include('dashboard.layouts.messages')

    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                @livewire(InternetLineTable::class)
            </div>
        </div>
    </div>
@endsection
