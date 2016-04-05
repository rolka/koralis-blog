@extends('masterPage')

@section('pageContent')

<!-- Page Header -->
<header class="intro-header" style="background-image: url('{{ asset("/images/home-bg.jpg")}}')";>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>Koralis Laravel Blog</h1>
                    <hr class="small">
                    <span class="subheading">Programming is an art form</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

            @foreach($blog_posts as $blog_post)

                <div class="post-preview">
                    <a href="{{ url('/', $blog_post->id) }}">
                        <h2 class="post-title">
                            {{ $blog_post->post_title  }}
                        </h2>
                    </a>
                    <p class="post-meta">
                        Posted by <a href="#">Admin</a> on {{ $blog_post->created_at->format('F jS, Y') }}
                    </p>
                </div>

                <hr>

            @endforeach

        </div>
    </div>
</div>

@stop

