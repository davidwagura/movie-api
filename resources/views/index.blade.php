@extends('welcome')

@section('content')

<div class="text-center mt-32">
    <button onclick="location.href='{{ route('movie.create') }}' " class="bg-blue-500 hover:bg-blue-700 mt-20 text-white h-10 font-bold px-4 border border-blue-700 rounded">
       Add New Movie
    </button>
</div>


@endsection