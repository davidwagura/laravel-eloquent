@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">yoooooh</h1>
        </div>
    
        <div class="w-6/6 py-10">
            @foreach ($cars as $car)
            <div  class="overflow-x-auto">
                <table class="table-auto min-w-full text-center grid grid-cols-auto place-content-center ...">
                    <tr class="px-4 py-3">
                        <th>Name</th>
                        <th class="pl-6">Founded</th>
                        <th class="pl-6">Description</th>
                    </tr>
                    <tr class="px-4 py-2">
                        <td>{{ $car->name }}</td>
                        <td>{{ $car->founded }}</td>
                        <td>{{ $car->description }}</td>
                    </tr>
                </table>
            </div>
        </div>
            @endforeach
        </div>
    </div>
@endsection