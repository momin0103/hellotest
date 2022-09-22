@extends('layout.master')
@section('PageHeader')
<div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome to About page</h1>
                    <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
                </div>
@endsection

@section('content')
<div>
    <h1>This is about page</h1>
    <x-header>
        <span>This is sub header from about page</span>
        <x-slot:title>
            <span>This is name slot from About.</span>
        </x-slot>
    </x-header>
    
    
</div>
@endsection