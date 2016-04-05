@extends('masterPage')

@section('pageContent')

<!-- Page Header -->
<header class="intro-header" style="background-image: url('{{ asset("/images/home-bg.jpg")}}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-heading">
                    <h1>{{ $post->post_title }}</h1>
                    <span class="meta">Posted by <a href="#">Admin</a> on {{ $post->created_at->format('F jS, Y') }}</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>{{ $post->post_content }}</p>
            </div>
        </div>
    </div>
</article>

<hr>

@stop
