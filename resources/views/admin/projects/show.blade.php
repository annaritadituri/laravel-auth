@extends('layouts.app')

@section('content')

    <div class="container pt-3">

        <h1 class="text-center">{{ $project->title }}</h1>
        <p class="text-center">{{ $project->description }}</p>

    </div>
    
@endsection