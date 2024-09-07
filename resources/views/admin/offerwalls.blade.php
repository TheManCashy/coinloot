@extends('layouts.admin')

@section('title', "Offerwalls manage")

@push('css')
    @livewireStyles
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                @livewire('offerwalls')
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('app-assets/js/scripts/pages/dashboard-analytics.js') }}"></script>
    @livewireScripts
@endpush
