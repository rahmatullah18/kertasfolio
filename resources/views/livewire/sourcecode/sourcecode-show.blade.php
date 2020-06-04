<div>
    {{-- The Master doesn't talk, he acts. --}}
    @section('title', $sourcecode->judul)
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                     <div class="card text-center">
                          <div class="card-header">
                            Dibuat Oleh : {{$sourcecode->pembuat}}
                          </div>
                          <div class="card-body">
                            <h5 class="card-title">
                                {{$sourcecode->judul}}
                            </h5>
                            <p class="card-text">{{$sourcecode->keterangan}}</p>
                            <a wire:click="keluar" href='{{$sourcecode->link}}' class="btn btn-primary">Unduh</a>
                            <div class="row justify-content-center mt-3">
                                <p  wire:loading wire:target="keluar" style="color: green">Link download tersedia...</p>
                            </div>
                          </div>
                          <div class="card-footer text-muted">
                            dibuat pada : {{$sourcecode->created_at}}
                          </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
