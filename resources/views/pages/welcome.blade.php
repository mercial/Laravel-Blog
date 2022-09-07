@extends('main')
@section('title', ' | Главная страница')
@section('header')
    <header class="masthead" style="background-image: url('/assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h3>Познаю Laravel</h3>
                    <span class="subheading">Блог Владислава Озоровского</span>
                </div>
            </div>
        </div>
    </div>
    </header>
@endsection
@section('content')
        <!-- Main Content-->

        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
@foreach ($posts as $post)
                    <div class="post-preview">
                        <a href="/posts/{{ $post->slug}}">
                            <h2 class="post-title">{{ $post->title }}</h2>
                            <h3 class="post-subtitle">{!! $post->excerpt !!}</h3>
                        </a>
                        <p class="post-meta">Опубликовано {{ $post->created_at }}</p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
@endforeach

                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Предыдущие посты →</a></div>
                </div>
            </div>
        </div>
@endsection