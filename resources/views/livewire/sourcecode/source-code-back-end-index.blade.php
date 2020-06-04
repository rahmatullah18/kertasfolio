<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
     <div class="col-lg-6 offset-lg-3 ">
        @include('layouts.alerts')
    </div>

    @if ($updateStatus == true)
        <livewire:sourcecode.source-code-back-end-update>
        @else
        <livewire:sourcecode.source-code-back-end-create>
    @endif

   {{--  @if ($updateStatus == true)
        <livewire:category.category-update>
        @else
            <livewire:category.category-create>
    @endif --}}
    <div wire:loading wire:target="getSourcecode" class="valid-feedback">
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
                {{-- <th>Keterangan</th> --}}
                <th>Link</th>
                <th>Pembuat</th>
                <th>Di Buat</th>
                {{-- <th>Di Update</th> --}}
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @php
                $i = ($sourcecodes->currentpage()-1)* $sourcecodes->perpage() + 1;
            @endphp
            @foreach ($sourcecodes as $sourcecode)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$sourcecode->category->nama_category}}</td>
                    <td>{{$sourcecode->judul}}</td>
                    <td>{{$sourcecode->slug}}</td>
                    {{-- <td>{{$sourcecode->keterangan}}</td> --}}
                    <td><a href="http://{{$sourcecode->link}}">{{$sourcecode->link}}</a></td>
                    <td>{{$sourcecode->pembuat}}</td>
                    <td>{{$sourcecode->created_at}}</td>
                    {{-- <td>{{$sourcecode->updated_at}}</td> --}}
                    <td>
                        <button wire:click="getSourcecode({{$sourcecode->id}})" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                        <button wire:click="destroy({{$sourcecode->id}})" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                @php
                    $i += 1;
                @endphp
            @endforeach
        </tbody>
    </table>
    <div class="row justify-content-center">
        {!! $sourcecodes->links() !!}
    </div>   
</div>
