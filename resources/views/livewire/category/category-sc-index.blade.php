<div>
    @section('title', "kertasfolio kumpulan source code")
    {{-- The Master doesn't talk, he acts. --}}
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="display-3 judul mb-3" style="font-family: Balsamiq Sans">Source Code</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-5 text-center">
                <input wire:model="search" type="text" class="form-control-sm form-control" placeholder="Cari Source Code...">
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
            <div class="col-12 mt-2">
                <div class="card border-0">
                    <div class="card-body" style="background-color: #DEEAF6; ">
                        @if(sizeof($categorysc))
                        <div class="row">
                        @foreach ($categorysc as $csc)
                            <div class="col-lg-4 mb-3">
                                <div class="card h-100">
                                    <div class="card-body shadow text-center">
                                        <h3><svg class="bi bi-file-earmark-code" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M4 1h5v1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6h1v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z"/>
                                              <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 0 1 9 4.5z"/>
                                              <path fill-rule="evenodd" d="M8.646 6.646a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 9 8.646 7.354a.5.5 0 0 1 0-.708zm-1.292 0a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 0 .708l2 2a.5.5 0 0 0 .708-.708L5.707 9l1.647-1.646a.5.5 0 0 0 0-.708z"/>
                                            </svg> {{$csc->nama_category}}
                                        </h3>
                                        <p>{{Str::of($csc->keterangan)->limit(70,' ')}}<a  href="{{route('sourcecode.index', $csc->nama_category)}}" class="" >Selengkapnya.....</a></p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                        <div class=" mt-3 row justify-content-center">
                            {{$categorysc->links()}}
                        </div>
                        @else
                        <div class="row justify-content-center text-center">
                            <div class="col-lg-6">
                            <div class=" alert alert-danger text-center">Source Code <b>{{ $search }}</b> Tidak ditemukan</div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
