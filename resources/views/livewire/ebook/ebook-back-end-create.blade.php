<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="row">
        <div class="col-lg-12">
            <form wire:submit.prevent="store">
                <div class="form-group">
                    <input 
                    type="text" 
                    wire:model="judul" 
                    class="form-control @error('judul') is-invalid @enderror" 
                    placeholder="Masukan Judul">
                    @error('judul') 
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input 
                    type="text" 
                    wire:model="category_id" 
                    class="form-control @error('category_id') is-invalid @enderror" 
                    placeholder="masukan category_id">
                    <ul>
                        @foreach ($category_ebooks as $ce)
                            <li>{{$ce->nama_category}} = {{$ce->id}}</li>
                        @endforeach
                    </ul>
                    @error('category_id') 
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input 
                    type="text" 
                    wire:model="link" 
                    class="form-control @error('link') is-invalid @enderror" 
                    placeholder="Masukan link download">
                    @error('link') 
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-dark mb-3">Tambahkan</button>
            </form>
        </div>
    </div>
</div>
