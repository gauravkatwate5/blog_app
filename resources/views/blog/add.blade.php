@extends('layout.app')

@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title font-weight-bold text-uppercase"> Add Blog </h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <!-- Start Form  -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    @if (count($errors))
                        <div class="alert alert-danger">
                            <strong>Validation Errors : Please fix the following issues</strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <h4 class="header-title text-uppercase"> Blog Info</h4>
                    <hr>
                    <form class="needs-validation" method="post" action="{{ route('create-blog') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="blogTitle">Title</label>
                                    <input type="text" name="blog_title" class="form-control border-bottom" id="blogTitle" placeholder="Enter blog title" required>
                                    <div class="invalid-feedback">
                                        Please provide a blog title.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="blogImage">Blog Image</label>
                                    <input type="file" name="blog_img" class="form-control border-bottom" id="blogImage" required>
                                    <div class="invalid-feedback">
                                        Please provide an image for the blog.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="blogContent">Content</label>
                            <textarea id="blogtext" name="content" class="form-control border-bottom" id="blogContent" rows="5" placeholder="Enter blog content" required></textarea>
                            <div class="invalid-feedback">
                                Please provide blog content.
                            </div>
                        </div>

                        <br>
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button class="btn btn-secondary" type="reset">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
