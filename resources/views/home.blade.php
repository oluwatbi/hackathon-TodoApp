@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Create Todolist</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                   {{-- form to create a new task--}}
                    <form method="post" action="/task/add">
                        @csrf

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <input type="text" name="title">
                                <button type="submit" class="btn btn-outline-secondary">Add</button>
                            </div>
                        </div>
                    </form>
                </div>

                @foreach($tasks as $task)
                    @if ($task->completed == 1)
                        <div class="card-body">
                            <strike>{{ $task->title }}</strike> <button class="btn btn-outline-secondary" disabled>Done</button>
                        </div>
                    @else
                        <div class="card-body">
                            {{ $task->title }} <a href="/task/delete/{{ $task->id }}"><button class="btn btn-outline-danger">Delete</button></a>
                            <a href="/task/edit/{{ $task->id }}"><button class="btn btn-outline-warning">Edit</button></a>
                            <a href="/task/complete/{{ $task->id }}}"><button class="btn btn-outline-success">Mark as completed</button></a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
