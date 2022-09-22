@extends('layout.master')
@section('PageHeader')
<div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome to Contact page</h1>
                    <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
                </div>
@endsection

@section('content')
<div>
    <h1>This is Contact page</h1>
    <x-header>
        <span>This is sub header from contact page.</span>
         <x-slot:title>
            <span>This is name slot from contact.</span>
        </x-slot>
    </x-header>
   
</div>
@endsection