@extends('layouts.main')

@section('title')
    Home
@endsection

@section('content')

    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
            @foreach($articles as $article)
                <!-- Post preview-->
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">{{$article->title}}</h2>
                            <h3 class="post-subtitle">{{ Str::limit($article->body, 100) }}</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">{{$article->user->name}}</a>
                            on {{$article->created_at->format('M d, Y')}}
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4"/>
                @endforeach

                {{--                <!-- Pager-->--}}
                {{--                <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts--}}
                {{--                        →</a></div>--}}
            </div>
        </div>
    </div>



@endsection
