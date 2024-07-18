@extends('layouts.app')

@section('content')

    <div class="container">

        <h1 class="text-center">All Projects</h1>
        <ul>
            @foreach ($projects as $project)
                <li>
                    <a href="{{ route('admin.projects.show', $project) }}">{{ $project['title'] }}</a>
                </li>
            @endforeach
        </ul>
        
    </div>
    
@endsection