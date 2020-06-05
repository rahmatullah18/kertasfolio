<div>
    @section('title', $category->nama_category . ' kertasfolio')
    
    {{-- The Master doesn't talk, he acts. --}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="jumbotron bg-white text-center">
                          <h1 class="display-4">{{$category->nama_category}}</h1>
                          <p class="lead">{{$category->keterangan}}</p>
                          <hr class="my-4">
                          <div class="col-lg-8 offset-lg-2  p-0">
                              <div class="card border-0">
                                  <ul class="list-group list-group-flush">
                                    @foreach ($sourcecodes as $sc)
                                    <a href="{{route('sourcecode.show', [$category->nama_category, $sc->slug])}}" style="text-decoration: none">
                                        <li class="page-link text-center card-efek border-0">
                                          {{$sc->judul}}
                                        </li>
                                    </a>
                                    @endforeach

                                  </ul>
                               </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
