@extends('layouts.app')

@section('content')

    <div class="container">

    <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input
                    type="text"
                    class="form-control @if ($errors->get('title')) is-invalid @endif"
                    id="title"
                    name="title"
                >
                @if ($errors->get('title'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('title') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea
                    class="form-control @if ($errors->get('description')) is-invalid @endif"
                    id="description"
                    rows="3"
                    name="description"
                ></textarea>
                @if ($errors->get('description'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('description') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="start_date" class="form-label">Start date</label>
                <input
                    type="text"
                    class="form-control @if ($errors->get('start_date')) is-invalid @endif"
                    id="start_date"
                    name="start_date"
                >
                @if ($errors->get('start_date'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('start_date') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            <button type="submit" class="btn btn-primary mb-3">CREA</button>
        </form>

    </div>
    
@endsection