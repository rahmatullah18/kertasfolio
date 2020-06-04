<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="col-lg-6 offset-lg-3 ">
        @include('layouts.alerts')
    </div>

    @if ($updateStatus == true)
        <livewire:category.category-update>
        @else
            <livewire:category.category-create>
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
                $i = ($categories->currentpage()-1)* $categories->perpage() + 1;
            @endphp
            @foreach ($categories as $category)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$category->nama_category}}</td>
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
        {!! $categories->links() !!}
    </div>
</div>
