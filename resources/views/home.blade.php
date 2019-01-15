@extends('layouts.app')

@section('content')
    <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm">
        <div class="lh-100">
            <h6 class="mb-0 text-white lh-100">Welcome, {{ Auth::user()->name }}</h6>
            <br>
            <small>User Since {{ Auth::user()->created_at->diffForHumans() }}</small>
        </div>
    </div>

    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0">Forum <small>Threads</small></h6>
        @foreach(App\Thread::all() as $thread)
            <div class="media text-muted pt-3">
            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect fill="#007bff" width="100%" height="100%"></rect><text fill="#007bff" dy=".3em" x="50%" y="50%">32x32</text></svg>
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <strong class="d-block text-gray-dark">{{ $thread->title }}</strong>
                {{ $thread->description }}
                <br>
                <br>
                <a href="{{ route('thread.get', $thread->id) }}" class="btn btn-sm btn-outline-primary">View this thread</a>
            </p>
        </div>
        @endforeach
    </div>

    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0">Create a new thread</h6>
        <div class="media text-muted pt-3">
            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <strong class="text-gray-dark">Want to talk about something in particular? Create a new thread</strong>
                </div>

                <br>

                <form method="post" action="{{ route('thread.post') }}">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @csrf

                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                    <div class="form-group">
                        <label>Thread title</label>
                        <input class="form-control" type="text" name="title" placeholder="Dealing with depression">
                    </div>

                    <div class="form-group">
                        <label>Thread description</label>
                        <input class="form-control" type="text" name="description" placeholder="This is a thread where people can go to talk about how they're struggling to deal with depression, and to seek advice on ways for them to deal with their depression.">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-lg btn-outline-primary">
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection