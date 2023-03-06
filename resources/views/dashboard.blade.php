
@extends('layouts.master')
@section('containt')

<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">

            <!-- Featured blog post-->
            {{-- <div class="card mb-4">
                <a href="#!"><img class="card-img-top" src="{{ asset('uploads/' . $latest_blog->image) }}"
                        width="750px" height="500px" alt="..." /></a>
                <div class="card-body">
                    <div class="small text-muted">January 1, 2022</div>
                    <h2 class="card-title">{{ $latest_blog->title }}</h2>
                    <p class="card-text">{!! $latest_blog->description !!}</p>
                    <a class="btn btn-primary" href="{{route('blog.detail',$latest_blog->id)}}">Read more →</a>
                </div>
            </div> --}}
            <!-- Nested row for non-featured blog posts-->
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-6">
                        <!-- Blog post-->
                        <div class="card mb-4">

                            <a href="#!"><img class="card-img-top"
                                    src="{{ asset('uploads/' . $blog->image) }}"width="700px" height="350px"
                                    alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted">January 1, 2022</div>
                                <h2 class="card-title h4">{{ $blog->title }}</h2>
                                <p class="card-text">{!! $blog->description !!}</p>
                                <a class="btn btn-primary" href="{{route('blog.detail',$blog->id)}}">Read more →</a>
                            </div>

                        </div>

                    </div>

                @endforeach

            </div>
            <!-- Pagination-->
            {{-- {{$data->links()}} --}}


        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            {{-- <div class="card mb-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Enter search term..."
                            aria-label="Enter search term..." aria-describedby="button-search" />
                        <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                    </div>
                </div>
            </div> --}}
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-sm-6">
                            @foreach ($data as $d)
                                <ul class="list-unstyled mb-2">
                                    <li><a href="{{route('category.view',$d->id)}}"> {{ $d->name }}</a></li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- Side widget-->
            {{-- <div class="card mb-4">
                <div class="card-header">Side Widget</div>
                <div class="card-body">You can put anything you want inside of these side widgets. They are easy to
                    use, and feature the Bootstrap 5 card component!</div>
            </div> --}}
        </div>
    </div>
</div>

@endsection
