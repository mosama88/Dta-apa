@php
    use App\Livewire\Dashboard\ProsecutionTable;
@endphp
@extends('dashboard.layouts.master', ['titlePage' => 'الجهات'])
@section('prosecutions_active', 'active')
@section('title', 'الجهات')
@section('content')
    @include('dashboard.layouts.messages')

    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                @livewire(ProsecutionTable::class)
            </div>
        </div>
    </div>
@endsection
