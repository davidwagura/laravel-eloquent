@extends('layouts.app')

@section('content')
    <h1 class="mt-20 text-center font-bold">
        <u>
            Add new car:
        </u>
    </h1>
    <div class="create-inputs flex justify-center items-center">
        <form class="flex flex-col space-y-4 ..." action="{{ route('cars.store') }}" method="post">
            @csrf
            @method('post')
                <label class="mr-2" for="name">Name:</label>
                <input class="border rounded px-2 py-1" type="text" name="name">

                <label class="mr-2" for="founded">Year of Foundation:</label>
                <input class="border rounded px-2 py-1" type="text" name="founded"><br>

                <label class="mr-2" for="brand_id">Brand Id:</label>
                <input class="border rounded px-2 py-1" type="text" name="brand_id"><br>

                <label class="mr-2" for="description">Description:</label>
                <input class="border rounded px-2 py-1" type="text" name="description"><br>


                <button class="bg-blue-500 hover:bg-blue-700 h-8 px-4 mt-4 border border-blue-700 rounded pr-4" type="submit">Submit</button>
        </form>
    </div>
@endsection