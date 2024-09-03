@extends('layout.app')

@section('content')
<!-- Start Content-->
<div class="container-fluid mt-5 pt-5">
    <!-- Blog Post Section -->
    <div class="row">
        <div class="col-lg-8">
            <!-- Blog Post -->
            <div class="card mb-4">
                @if($blog->blog_img)
                    <img class="card-img-top" src="{{ asset('images/' . $blog->blog_img) }}" alt="{{ $blog->blog_title }}">
                @else
                    <img class="card-img-top" src="https://via.placeholder.com/750x300" alt="Blog Post Image">
                @endif
                <div class="card-body">
                    <h2 class="card-title">{{ $blog->blog_title }}</h2>
                    <p class="card-text">{!! $blog->content !!}</p>
                </div>
                <div class="card-footer text-muted">
                    Posted on {{ $blog->created_at->format('F j, Y') }} by <a href="#">Author Name</a><br>
                    <span>Views: {{ $blog->views }}</span>
                </div>
            </div>
            <!-- End Blog Post -->

            <!-- Comments Section -->
            <div class="card my-4">
                <h5 class="card-header">Leave a Comment:</h5>
                <div class="card-body">
                    <form method="POST" action="{{ route('store-comment') }}">
                        @csrf
                        <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                        <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                        <!-- Assuming user is authenticated -->
                        <div class="form-group">
                            <label for="userName">Your Name</label>
                            <input type="text" class="form-control" id="userName" name="user_name"
                                value="{{ auth()->user()->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="commentContent">Your Comment</label>
                            <textarea class="form-control" id="commentContent" name="content" rows="3"
                                placeholder="Enter your comment here" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

            <!-- Display Comments -->
            @if($blog->comments->count())
                <div class="card my-4">
                    <h5 class="card-header">Comments:</h5>
                    <div class="card-body">
                        @foreach($blog->comments as $comment)
                            <div class="media mb-4">
                                <div class="media-body">
                                    <p class="mb-1">{{ $comment->comment }}</p>
                                    <small class="text-muted">Posted on : {{ $comment->created_at->format('F j, Y') }}</small>
                                    <small class="text-muted mx-5">Writed By : {{ $comment->user_name }}</small>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection