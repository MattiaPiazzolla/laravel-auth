@extends('layouts.dashboard')

@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>{{ $project->name }}</h2>
                <img class="project_image" src="{{ asset('./storage/' . $project->project_image) }}"
                    alt="{{ $project->name }}">
                <p>{{ $project->slug }}</p>
                <p>{{ $project->summary }}</p>

            </div>
        </div>
    </div>
@endsection
