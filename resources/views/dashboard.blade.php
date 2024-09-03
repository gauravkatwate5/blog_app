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
    <div class="row">
        <div class="col-lg-8">
            <!-- Blog Post -->
            <div class="card mb-4">
                <img class="card-img-top" src="https://via.placeholder.com/750x300" alt="Blog Post Image">
                <div class="card-body">
                    <h2 class="card-title">Blog Post Title</h2>
                    <p class="card-text">This is a short excerpt of the blog post content. It gives a brief idea of what the post is about...</p>
                    <a href="#" class="btn btn-primary">Read More &rarr;</a>
                </div>
                <div class="card-footer text-muted">
                    Posted on January 1, 2024 by <a href="#">Author Name</a>
                </div>
            </div>
            <!-- End Blog Post -->

            <!-- Pagination -->
            <ul class="pagination justify-content-center mb-4">
                <li class="page-item">
                    <a class="page-link" href="#">&larr; Older</a>
                </li>
                <li class="page-item disabled">
                    <a class="page-link" href="#">Newer &rarr;</a>
                </li>
            </ul>
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">
            <!-- Search Widget -->
            <div class="card mb-4">
                <h5 class="card-header">Search</h5>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Categories Widget -->
            <div class="card mb-4">
                <h5 class="card-header">Categories</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#">Category 1</a>
                                </li>
                                <li>
                                    <a href="#">Category 2</a>
                                </li>
                                <li>
                                    <a href="#">Category 3</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#">Category 4</a>
                                </li>
                                <li>
                                    <a href="#">Category 5</a>
                                </li>
                                <li>
                                    <a href="#">Category 6</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Side Widget -->
            <div class="card mb-4">
                <h5 class="card-header">Side Widget</h5>
                <div class="card-body">
                    You can put anything you like here! It's a versatile and simple widget to add extra content.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
