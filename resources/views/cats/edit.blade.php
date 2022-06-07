@extends('layouts.admin', ['title' => 'Dashboard'])

@section('content')
    <h1 class="text-white text-3xl font-bold">Edit Cat</h1>
    @include('_inc.forms.edit-cat')
@endsection
