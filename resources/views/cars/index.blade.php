@extends('layouts.scheme')

@section('page-title')
    Homepage
@endsection

@section('main-content')
    <section class="container text-white">
        <h1>Homepage</h1>
    
        <table class="table table-bordered text-white">
            <thead>
                <tr class="bg-success">
                    <th scope="col">#</th>
                    <th scope="col">Make</th>
                    <th scope="col">Model</th>
                    <th scope="col">Year</th>
                    <th scope="col">Color</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cars as $car)
                    <tr>
                        <th scope="row">{{ $car->id }}</th>
                        <td>{{ $car->make }}</td>
                        <td>{{ $car->model }}</td>
                        <td>{{ $car->year }}</td>
                        <td>{{ $car->color }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection