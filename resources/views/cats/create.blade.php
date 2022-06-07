@extends('layouts.admin', ['title' => 'Add a Cat'])

@section('content')
    <h1 class="text-white text-3xl font-bold">Add Cat</h1>
    @include('_inc.forms.add-cat')
@endsection
