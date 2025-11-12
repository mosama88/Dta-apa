@php
    use App\Livewire\Dashboard\GovernorateTable;
@endphp
@extends('dashboard.layouts.master', ['titlePage' => 'المحافظات'])
@section('governorates_active', 'active')
@section('title', 'المحافظات')
@section('content')
    @include('dashboard.layouts.messages')

    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                @livewire(GovernorateTable::class)
            </div>
        </div>
    </div>
@endsection
