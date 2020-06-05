@extends('layouts.app')

@section('title', 'Topic Artikel')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="display-4 text-center mb-4">{{ $topic->name }}</div>
                <div class="row mb-3">
                    @foreach ($data['posts'] as $post)
                        <div class="col-lg-4 mb-4">
                            <div class="card">
                            <a href="{{route('blog.show' , $post->slug)}}">
                                <img src="{{$post->featured_image}}" class="card-img-top" alt="{{$post->caption}}">
                            </a>
                          <div class="card-body">
                            <a href="{{route('blog.show' , $post->slug)}}" style="text-decoration: none;color: black">
                                <h5 class="card-title">{{$post->title}}</h5>    
                            </a>
                            <p class="card-text">{{$post->summary}}</p>
                          </div>
                        </div>
                        </div>
                    @endforeach
                </div>
                {{$data['posts']->links()}}
            </div>
        </div>
    </div>
@endsection