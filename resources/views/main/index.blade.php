@extends('layouts.main')

@section('content')

<main class="blog">
    
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Блог123123</h1>
            <h1>ТЕСТ ТЕСТ ТЕСТ</h1>
            <section class="featured-posts-section">
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{ 'storage/' . $post->preview_image }}" alt="blog post">
                            </div>
                            <div>
                                <p class="blog-post-category">{{ $post->category->title }}</p>
                                <p class="blog-post-category">{{ $post->category->title }}</p>
                                <form action="#">
                                    <button type="submit">
                                        <i class="fa fa-regular fa-heart"></i>
                                        <i class="fa fa-regular fa-thumbs-up"></i>
                                    </button>
                                </form>
                            </div>
                            <a href="{{ route('post.show', $post->id) }}" class="blog-post-permalink">
                                <h6 class="blog-post-title">{{ $post->title }}</h6>
                            </a>
                        </div>
                    @endforeach
                </div>
            </section>
            <div class="row">
                <div class="mx-auto" style="margin-top -80px;">
                    {{ $posts->links() }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <section>
                        <div class="row blog-post-row">
                            @foreach($randomPosts as $randomPost)
                                <div class="col-md-6 blog-post" data-aos="fade-up">
                                    <div class="blog-post-thumbnail-wrapper">
                                        <img src="{{ 'storage/' . $randomPost->preview_image }} " alt="blog post">
                                    </div>
                                    <p class="blog-post-category">{{ $randomPost->category->title }}</p>
                                    <a href="{{ route('post.show', $post->id) }}" class="blog-post-permalink">
                                        <h6 class="blog-post-title">{{ $randomPost->title }}</h6>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </section>
                </div>
                <div class="col-md-4 sidebar" data-aos="fade-left">
                   
                        <div class="widget widget-post-carousel">
                        <h5 class="widget-title">Популярные посты</h5>
                                                    
                        <div class="widget widget-post-list">
                            <ul class="post-list">
                                <li class="post">
                                     @foreach($likedPosts as $likedPost)
                                        <a href="{{ route('post.show', $post->id) }}" class="post-permalink media">
                                            <img src="{{ 'storage/' . $likedPost->preview_image }}"  alt="blog post">
                                            <div class="media-body">
                                                <h6 class="post-title">{{ $likedPost->title }}</h6>
                                            </div>
                                        </a>
                                    @endforeach
                                </li>
                            </ul>
                        </div>
                </div>
            </div>
        </div>

    </main>