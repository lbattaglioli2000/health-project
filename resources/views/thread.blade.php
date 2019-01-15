@extends('layouts.app')

@section('content')
    <div class="card" style="margin-top: 20px;">
        <div class="card-body">
            <h1>{{ $thread->title }}</h1>
            <p><b>Thread purpose: </b>{{ $thread->description }}</p>
        </div>
    </div>

    <br>

    <h2>Post to this thread...</h2>

    <div class="card">
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('post.post') }}" method="post">

                @csrf

                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="thread_id" value="{{ $thread->id }}">

                <div class="form-group">
                    <label>Post Title</label>
                    <input type="text" name="title" class="form-control">
                </div>

                <div class="form-group">
                    <label>Post Body</label>
                    <textarea rows="5" name="post" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-lg btn-outline-primary">
                </div>

            </form>
        </div>
    </div>

    <br>

    @if($thread->posts->count() <= 0)
        <div class="alert alert-info">
            Hey, there's no posts in this thread!
        </div>
    @else
        <h2>Current posts in this thread...</h2>
        @foreach($thread->posts as $post)
            <div class="card">
                <div class="card-body">
                    <div class="media text-muted pt-3">
                        <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect fill="#007bff" width="100%" height="100%"></rect><text fill="#007bff" dy=".3em" x="50%" y="50%">32x32</text></svg>
                        <p class="media-body pb-3 mb-0 small lh-125">
                            <strong class="d-block text-gray-dark">{{ $post->title }} by {{ $post->user->name }}</strong>
                            {{ $post->post }}
                        </p>
                    </div>
                </div>
            </div>
            <br>
        @endforeach
    @endif

@endsection