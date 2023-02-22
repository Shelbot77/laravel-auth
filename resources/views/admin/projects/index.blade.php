@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <a class="btn btn-info mb-5" href="{{route('admin.projects.create')}}">Create a new project</a>
    <div class="row gx-4 gy-3">
        @foreach ($projects as $project)
            
        <div class="col-4">
            <div class="card">
                <h4>{{$project->title}}</h4>
                <pre>{{$project->github_reference}}</pre>
                <div>

                    <a class="btn btn-info" href="{{route('admin.projects.show', $project->id)}}">Show</a>
                    <a class="btn btn-warning" href="{{route('admin.projects.edit', $project->id)}}">Edit</a>
                    <a class="btn btn-danger" href="">Delete</a>
                </div>


                
            </div>
        </div>
        @endforeach
    </div>
    
</div>
@endsection