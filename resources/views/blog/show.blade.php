@extends('layouts.app')
@section('title', $data['post']->title)
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.9/styles/dracula.min.css" />
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-lg">
                <div class="card-body pt-lg-5">
                    <h1 class="judul text-center">{{$data['post']->title}}</h1>
                    <div id="canvas" class="lead pl-lg-5 pr-lg-5 text-justify">
                        {!! $data['post']->body !!}
                    </div>
                    <div class="pr-lg-5 pl-lg-5 mt-5">
                    @if ($data['post']->tags->count() > 0)
                        <div><p class="lead d-inline-flex">Tag :</p>
                            @foreach ($data['post']->tags as $tag)
                                <div class="d-inline-flex mb-2">
                                    <a href="{{ route('blog.tag', $tag->slug) }}" class="btn btn-dark btn-sm">{{ $tag->name }}</a>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="row justify-content-center mt-4 p-3">
                    <script async data-uid="c7865a8c76" src="https://skilled-originator-8470.ck.page/c7865a8c76/index.js"></script>
                </div>
                <div class="m-lg-5">
                    @comments(['model' => $data['post']])
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
{{-- <script>
    window.Canvas = @json($scripts);
</script> --}}
<script type="text/javascript" src="{{ mix('js/app.js', 'vendor/canvas') }}"></script>
@endsection