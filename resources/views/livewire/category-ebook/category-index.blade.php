<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="col-lg-6 offset-lg-3 ">
        @include('layouts.alerts')
    </div>
    @if ($updateStatus == true)
        <livewire:category-ebook.category-update>  
        @else
        <livewire:category-ebook.category-create>
    @endif

    <div wire:loading wire:target="getCategory" class="valid-feedback">
        Mengambil Data.....
    </div>
    <div wire:loading wire:target="destroy" class="invalid-feedback">
        Menghapus Data.....
    </div>

    <table class="table table-hover">
        <thead class="text-center">
            <tr>
                <th>No</th>
                <th>Categori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @php
                $i = ($category_ebooks->currentpage()-1)* $category_ebooks->perpage() + 1;
            @endphp
            @foreach ($category_ebooks as $category)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$category->nama_category}}</td>
                    {{-- <td>{{$category->keterangan}}</td> --}}
                    <td>
                        <button wire:click="getCategory({{$category->id}})" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                        <button wire:click="destroy({{$category->id}})" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                @php
                    $i += 1;
                @endphp
            @endforeach
        </tbody>
    </table>
    <div class="row justify-content-center">
        {!! $category_ebooks->links() !!}
    </div>

</div>
