@extends('layouts.app')
@section('title', $data['post']->title)
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.9/styles/dracula.min.css" />
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body p-5">
                    <h1 class="text-center">{{$data['post']->title}}</h1>
                    <hr>
                    <div id="canvas">
                        {!! $data['post']->body !!}
                    </div>
                    <div>
                    <h3>Tags :</h3>
                    @if ($data['post']->tags->count() > 0)
                        <div>
                            @foreach ($data['post']->tags as $tag)
                                <div class="d-inline-flex">
                                    <a href="{{ route('blog.tag', $tag->slug) }}" class="btn btn-dark btn-sm">{{ $tag->name }}</a>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.9/highlight.min.js"></script>
<script>
    (function(){
        hljs.initHighlightingOnLoad();
        let targets = document.querySelectorAll('pre')
        targets.forEach(target => {
          hljs.highlightBlock(target)
        })
    })();
</script>
@endsection