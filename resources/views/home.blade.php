@extends('layout.app')

@section('content')
<!-- Start Content-->
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title font-weight-bold">Blog</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <!-- Blog Posts Section -->
    @if($blogs->isEmpty())
        <div class="row">
            <p>No blogs available.</p>
        </div>
    @else
        @foreach($blogs as $blog)
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
                            <a href="{{ route('blog-view', $blog->id) }}" class="btn btn-primary">Read More &rarr;</a>
                            <span class="ml-3 text-end">Views: {{ $blog->views }}</span>
                        </div>
                        <div class="card-footer text-muted">
                            Posted on {{ $blog->created_at->format('F j, Y') }} by <a href="#">Author Name</a><br>
                        </div>
                    </div>
                    <!-- End Blog Post -->
                </div>
            </div>
        @endforeach
    @endif
</div>
@endsection
