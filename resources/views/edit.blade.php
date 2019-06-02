@extends('layouts.app')

@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-header"><h3>Edit Todolist</h3></div>


                    <p>You are about to edit "<em>{{ $task->title }}</em></p>
                    <form method="patch">
                        @csrf

                        <div class="form-group">
                            <textarea name="title" class="form-control"  rows="3" placeholder=""></textarea>
                        </div>
                        <a href="/task/update/{{ $task->id }}">
                            <button type="submit" class="btn btn-outline-primary">Update</button>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
