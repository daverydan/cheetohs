@extends('layouts.admin', ['title' => 'Dashboard'])

@section('content')
    <h1 class="text-white text-3xl font-bold">Admin Dashboard</h1>
    <hr class="my-2">
    <h2 class="text-white text-xl font-bold">Welcome, {{ auth()->user()->name }}</h2>

    @include('_inc.forms.add-cat')
@endsection
