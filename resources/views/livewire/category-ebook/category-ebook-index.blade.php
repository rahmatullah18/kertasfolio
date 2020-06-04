<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    @section('title', 'kertasfolio kumpulan ebook programing')
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="display-3 judul" style="font-family: Balsamiq Sans">Ebook</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card border-0">
                    <div class="card-body" style="background-color: #DEEAF6;">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 text-center">
                                <input wire:model="search" type="text" class="form-control form-control-sm" placeholder="Cari Source Code...">
                                <div wire:loading wire:target="search" class="mt-3 lead" style="color: green"><i class="fas fa-search"></i>Sedang Mencari.....</div>
                            </div>
                        </div>
                       <div class="row">
                            @foreach ($category_ebook as $ce)
                                <div class="col-lg-3 text-center mb-3 mt-3">
                                    <div class="card shadow">
                                        <div class="card-header bg-white">
                                            <h5 class="m-0"><svg class="bi bi-book" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                              <path fill-rule="evenodd" d="M3.214 1.072C4.813.752 6.916.71 8.354 2.146A.5.5 0 0 1 8.5 2.5v11a.5.5 0 0 1-.854.354c-.843-.844-2.115-1.059-3.47-.92-1.344.14-2.66.617-3.452 1.013A.5.5 0 0 1 0 13.5v-11a.5.5 0 0 1 .276-.447L.5 2.5l-.224-.447.002-.001.004-.002.013-.006a5.017 5.017 0 0 1 .22-.103 12.958 12.958 0 0 1 2.7-.869zM1 2.82v9.908c.846-.343 1.944-.672 3.074-.788 1.143-.118 2.387-.023 3.426.56V2.718c-1.063-.929-2.631-.956-4.09-.664A11.958 11.958 0 0 0 1 2.82z"/>
                                              <path fill-rule="evenodd" d="M12.786 1.072C11.188.752 9.084.71 7.646 2.146A.5.5 0 0 0 7.5 2.5v11a.5.5 0 0 0 .854.354c.843-.844 2.115-1.059 3.47-.92 1.344.14 2.66.617 3.452 1.013A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.276-.447L15.5 2.5l.224-.447-.002-.001-.004-.002-.013-.006-.047-.023a12.582 12.582 0 0 0-.799-.34 12.96 12.96 0 0 0-2.073-.609zM15 2.82v9.908c-.846-.343-1.944-.672-3.074-.788-1.143-.118-2.387-.023-3.426.56V2.718c1.063-.929 2.631-.956 4.09-.664A11.956 11.956 0 0 1 15 2.82z"/>
                                            </svg> {{$ce->nama_category}}</h5>
                                        </div>
                                        <div class="card-body">
                                            <p>{{Str::of($ce->keterangan)->limit(55,' ')}}<a  href="{{route('ebook.index', $ce->nama_category)}}" class="" >Selengkapnya.....</a></p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                       </div>
                       <div class=" mt-3 row justify-content-center">
                            {{$category_ebook->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
