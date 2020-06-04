<div>
    {{-- Do your work, then step back. --}}
    @section('title', 'Amati Tiru Modifikasi KertasFolio')
    <div class="row justify-content-center">
        <div class="col-lg-4 text-center">
            <input type="text" wire:model="search" class="form-control form-control-sm mb-1 shadow-sm" placeholder="Cari Artikel....">
            <div wire:loading wire:target="search" class="mb-1 mt-1">
                <div class="spinner-grow text-danger" role="status">
                  <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow text-warning" role="status">
                  <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow text-info" role="status">
                  <span class="sr-only">Loading...</span>
                </div>
            </div><br>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-9">
            <div class="row">
            @foreach ($posts as $post)
            <div class="col-lg-4 mb-4">                
                <div class="card shadow-lg bg-white rounded card-efek">
                    <a href="{{route('blog.show' , $post->slug)}}">
                        <div class="wrapper">
                            <img src="{{$post->featured_image}}" class="card-img-top" alt="{{$post->caption}}">
                        </div>
                    </a>
                  <div class="card-body">
                    <a href="{{route('blog.show' , $post->slug)}}" style="text-decoration: none;color: black;">
                        <h5 class="card-title" style="font-weight: 700">{{$post->title}}</h5>    
                    </a>
                    <p class="card-text">{{Str::of($post->summary)->limit(33,'....')}}</p>
                    @foreach ($post->tags as $tag)
                        <a href="{{ route('blog.tag', $tag->slug) }}" class="btn btn-sm btn-dark">{{$tag->name}}</a>
                    @endforeach
                  </div>
                </div>
            </div>
            @endforeach
            </div>
            <div class="row justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>
        <div class="col-lg-3">
            <h3 class="text-center" style="font-weight: 700 ; font-family: Balsamiq Sans">Topik</h3>
            <ul class="list-group shadow-sm">
                @foreach ($topics as $topic)
                    <li class="list-group-item p-0 pl-2 pr-2 d-flex  align-items-center">
                        <a class="lead" href="{{ route('blog.topic', $topic->slug) }}">{{$topic->name}}</a><hr>
                        <span class="badge badge-primary badge-pill">{{$topic->posts_count}}</span>
                    </li>
                @endforeach
            </ul>
            <h3 class="text-center mt-3" style="font-weight: 700 ; font-family: Balsamiq Sans">Tag</h3>
            @foreach ($tags as $tag)
                <a href="{{ route('blog.tag', $tag->slug) }}" class="btn btn-sm mb-2 btn-dark  card-efek">{{$tag->name}}</a>
            @endforeach
        </div>
    </div>
</div>
