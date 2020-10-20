@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tarcking-wider text-orange-500 text-lg font-semibold">Popular Movies</h2>
            <div class="grid grid-col-4 gap-16">
                <div class="mt-8">
                    <a href="#">
                        <img src="/Movie/resources/img/BridsOfPrey.jpg" alt="BridsOfPrey">
                    </a>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/Movie/resources/img/game.jpg" alt="BridsOfPrey">
                    </a>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/Movie/resources/img/game.jpg" alt="BridsOfPrey">
                    </a>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/Movie/resources/img/BridsOfPrey.jpg" alt="BridsOfPrey">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection