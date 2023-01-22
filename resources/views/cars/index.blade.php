@extends('layouts.scheme')

@section('page-title')
    Homepage
@endsection



@section('main-content')
    <section class="container">
        <section class="d-flex justify-content-between align-items-center">
            <h1>Homepage</h1>
            <a href="{{ route('cars.create') }}">
                <button class="btn btn-warning text-white">Add new car</button>
            </a>
        </section>
    
        <table class="table table-bordered text-white">
            <thead>
                <tr class="bg-success">
                    <th scope="col">#</th>
                    <th scope="col">Make</th>
                    <th scope="col">Model</th>
                    <th scope="col">Year</th>
                    <th scope="col">Color</th>
                    <th scope="col">Actions</th>
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
                        <td class="d-flex justify-content-around">
                            <a href="{{ route('cars.show', $car->id) }}">
                                <button class="btn btn-primary">More details</button>
                            </a>
                            <a href="{{ route('cars.edit', $car->id) }}">
                                <button class="btn btn-light">Edit</button>
                            </a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger modal-delete-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="{{$car->id}}">
                                Delete
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </section>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Deleting <span id="which-one">{{ null }}</span></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-dark">
                    Are you sure?
                </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <form class="modal-form" action="{{ null }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

