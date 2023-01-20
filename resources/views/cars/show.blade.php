@extends('layouts.scheme')

@section('page-title')
    Show-cars
@endsection

@section('main-content')
    <section class="container">
        <h1>Show page</h1>

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
                <tr>
                    <th scope="row">{{ $car->id }}</th>
                    <td>{{ $car->make }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->year }}</td>
                    <td>{{ $car->color }}</td>
                </tr>
            </tbody>
        </table>

        <a href="{{ route('cars.index') }}" class="btn btn-primary">Torna alla homepage</a>
    </section>
@endsection