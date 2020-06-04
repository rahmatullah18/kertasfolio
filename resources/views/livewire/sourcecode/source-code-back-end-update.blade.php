<div>
    {{-- The whole world belongs to you --}}
    <div class="row">
        <div class="col-lg-12">
            <form wire:submit.prevent="update">
                <input 
                type="hidden" 
                wire:model="sourcecodeId">
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
                <div class="form-group">
                    <input 
                    type="text"
                    wire:model="pembuat" 
                    class="form-control @error('pembuat') is-invalid @enderror" 
                    placeholder="Nama Pembuat">
                    @error('pembuat') 
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <textarea 
                    class="form-control @error('keterangan') is-invalid @enderror" 
                    wire:model="keterangan"
                    placeholder="keterangan">   
                    </textarea>
                    @error('keterangan') 
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-dark mb-3">Update</button>
            </form>
        </div>
    </div>
</div>
