@extends('welcome')

@section('content')
    <h1 class="mt-40 text-center bg-red">
        <u>
            Save Movie:
        </u>
    </h1>
    <div class="create-inputs flex justify-center items-center">
        <form class="flex flex-col space-y-4" action="{{ route('movie.store') }}" method="post">
            @csrf
            @method('post')

                <label class="mr-2" for="poster">Poster:</label>
                <input class="border rounded px-2 py-1" type="text" name="poster"><br>

                <label class="mr-2" for="title">Title:</label>
                <input class="border rounded px-2 py-1" type="text" name="title">

                <label class="mr-2" for="type">Type:</label>
                <input class="border rounded px-2 py-1" type="text" name="type">

                <label class="mr-2" for="year">Year:</label>
                <input class="border rounded px-2 py-1" type="text" name="year">

                <label class="mr-2" for="imdb_id">ImdbId:</label>
                <input class="border rounded px-2 py-1" type="text" name="imdb_id">


                <button class="bg-blue-500 hover:bg-blue-700 h-8 px-4 mt-4 border border-blue-700 rounded pr-4" type="submit">Submit</button>
        </form>
    </div>
@endsection