<div>
    @section('title', $category_ebook->nama_category . ' kertasfolio')
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="jumbotron bg-white text-center">
                          <h1 class="display-4">{{$category_ebook->nama_category}}</h1>
                          <p class="lead">{{$category_ebook->keterangan}}</p>
                          <hr class="my-4">
                          <div class="col-lg-8 offset-lg-2  p-0">
                              <div class="card">
                                  <ul class="list-group list-group-flush">
                                    @foreach ($ebook as $ebo)
                                    <a href="http://{{$ebo->link}}" style="text-decoration: none">
                                        <li class="page-link text-center">
                                          {{$ebo->judul}}
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
