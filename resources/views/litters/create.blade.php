@extends('layouts.admin', ['title' => 'Add a Cat'])

@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
@endsection

@section('content')
    <h1 class="text-white text-3xl font-bold">Add Litter</h1>

    {{-- <form action="/litter" method="POST" class="py-8" enctype="multipart/form-data">
        @csrf
        <input type="text" id="datepicker" name="birthday">
        <button type="submit" class="bg-gold text-white px-3 py-2">Submit</button>
    </form> --}}

    @include('_inc.forms.add-litter')
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
    <script>
        new Pikaday({
            field: document.getElementById('datepicker'),
            format: 'MM/DD/YYYY'
        })
    </script>
@endsection
