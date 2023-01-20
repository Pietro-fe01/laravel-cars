@extends('layouts.scheme')

@section('page-title')
    Create-car
@endsection

@section('main-content')
    <section class="container">
        <h1>Add new Car</h1>

        <form action="{{ route('cars.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="d-block" for="make">Car make*</label>
                <input type="text" id="make" name="make" required maxlength="150">
            </div>

            <div class="mb-4">
                <label class="d-block" for="model">Car model*</label>
                <input type="text" id="model" name="model" required maxlength="150">
            </div>

            <div class="mb-4">
                <label class="d-block" for="year">Car year*</label>
                <input type="number" id="year" name="year" min="1945" max="2023" required>
            </div>

            <div class="mb-4">
                <label class="d-block" for="color">Car color*</label>
                <input type="text" id="color" name="color" required>
            </div>

            <button type="submit" class="btn btn-success">ADD</button>
            <button type="reset" class="btn btn-primary mx-3">RESET</button>
            <a href="{{ route('cars.index') }}">
                <button type="button" class="btn btn-danger">COME BACK TO HOMEPAGE</button>
            </a>
        </form>
    </section>
@endsection