<div>
    {{-- In work, do what you enjoy. --}}
    <div class="col-lg-6 offset-lg-3 ">
        @include('layouts.alerts')
    </div>

    @if ($updateStatus == true)
        <livewire:ebook.ebook-back-end-update>
        @else
        <livewire:ebook.ebook-back-end-create>
    @endif

       <div wire:loading wire:target="getEbook" class="valid-feedback">
        Mengambil Data.....
    </div>
    <div wire:loading wire:target="destroy" class="invalid-feedback">
        Menghapus Data.....
    </div>
    <table class="table table-hover table-responsive">
        <thead class="text-center">
            <tr>
                <th>No</th>
                <th>Categori</th>
                <th>Judul</th>
                <th>Slug</th>
                <th>Link</th>
                <th>Di Buat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @php
                $i = ($ebooks->currentpage()-1)* $ebooks->perpage() + 1;
            @endphp
            @foreach ($ebooks as $ebook)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$ebook->category->nama_category}}</td>
                    <td>{{$ebook->judul}}</td>
                    <td>{{$ebook->slug}}</td>
                    {{-- <td>{{$ebook->keterangan}}</td> --}}
                    <td><a href="http://{{$ebook->link}}">{{$ebook->link}}</a></td>
                    <td>{{$ebook->created_at}}</td>
                    {{-- <td>{{$ebook->updated_at}}</td> --}}
                    <td>
                        <button wire:click="getEbook({{$ebook->id}})" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                        <button wire:click="destroy({{$ebook->id}})" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                @php
                    $i += 1;
                @endphp
            @endforeach
        </tbody>
    </table>
    <div class="row justify-content-center">
        {!! $ebooks->links() !!}
    </div>   
</div>
