@extends('layouts.master')

@section('content')
<div class="page-banner overlay-dark bg-image" style="background-image: url(/img/bg_image_1.jpg);">
    <div class="banner-section">
        <div class="container text-center wow fadeInUp">
            <nav aria-label="Breadcrumb">
                <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                </ol>
            </nav>
            <h1 class="font-weight-normal">News</h1>
        </div> <!-- .container -->
    </div> <!-- .banner-section -->
</div> <!-- .page-banner -->

<div class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">

                    @foreach ($blogs as $blog)
                    <div class="col-sm-6 py-2">
                        <div class="card-blog">
                            <div class="header">
                                <div class="post-category">
                                    <a href="#">{{$blog->category->name}}</a>
                                </div>
                                <a href="{{route('health.blog-details',['id'=>$blog->id])}}" class="post-thumb">
                                    <img src="{{URL::to('/')}}/img/blog/{{$blog->image}}" alt="Blog Photo ">
                                </a>
                            </div>
                            <div class="body">
                                <h5 class="post-title"><a class="block-ellipsis-front-view" href="{{route('health.blog-details',[$blog->id])}}">
                                        {!!$blog->description!!}
                                    </a></h5>
                                <div class="site-info">
                                    <div class="avatar mr-2">
                                        <div class="avatar-img">
                                            <img src="/img/person/person_1.jpg" alt="">
                                        </div>
                                        <span>{{$blog->user->name}}</span>
                                    </div>
                                    <span class="mai-time"></span> {{$blog->created_at->diffForHumans()}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach




                    <div class="col-12 my-5">
                        <nav aria-label="Page Navigation">
                            <ul class="pagination justify-content-center">
                                {{$blogs->links()}}

                            </ul>
                        </nav>
                    </div>
                </div> <!-- .row -->
            </div>
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="sidebar-block">
                        <h3 class="sidebar-title">Search</h3>
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                                <button type="submit" class="btn"><span class="icon mai-search"></span></button>
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-block">
                        <h3 class="sidebar-title">Categories</h3>
                        <ul class="categories">

                            @foreach ($categories as $category)
                            <li><a href="{{route('health.blogsByCategory',[$category->id])}}">{{$category->name}} <span>{{count($category->blogs)}}</span></a></li>

                            @endforeach </ul>
                    </div>

                    <div class="sidebar-block">
                        <h3 class="sidebar-title">Recent Blog</h3>
                        @foreach ($latestBlogs as $blog)

                        <div class="blog-item">
                            <a class="post-thumb" href="{{route('health.blog-details',[$blog->id])}}">
                                <img src="{{URL::to('/')}}/img/blog/{{$blog->image}}" alt="">
                            </a>
                            <div class="content">
                                <h5 class="post-title"><a href="#">{{$blog->title}}</a></h5>
                                <div class="meta">
                                    <a href="#">
                                        <span class="mai-calendar"></span>
                                        {{date('d-M-Y', strtotime($blog->created_at));}}
                                    </a>
                                    <a href="#"><span class="mai-person"></span> Admin</a>
                                    <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="sidebar-block">
                        <h3 class="sidebar-title">Tag Cloud</h3>
                        <div class="tagcloud">
                            <a href="#" class="tag-cloud-link">dish</a>
                            <a href="#" class="tag-cloud-link">menu</a>
                            <a href="#" class="tag-cloud-link">food</a>
                            <a href="#" class="tag-cloud-link">sweet</a>
                            <a href="#" class="tag-cloud-link">tasty</a>
                            <a href="#" class="tag-cloud-link">delicious</a>
                            <a href="#" class="tag-cloud-link">desserts</a>
                            <a href="#" class="tag-cloud-link">drinks</a>
                        </div>
                    </div>

                    <div class="sidebar-block">
                        <h3 class="sidebar-title">Paragraph</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                    </div>
                </div>
            </div>
        </div> <!-- .row -->
    </div> <!-- .container -->
</div> <!-- .page-section -->

@endsection
