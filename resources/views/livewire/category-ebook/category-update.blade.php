<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <form wire:submit.prevent="update">
        <input type="hidden" wire:model="categoryId">
        <div class="form-group">
            <div class="form-row">
                <div class="col-lg-4 col-3 mb-3">
                    <input wire:model="nama" type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Category">
                    @error('nama')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div class="col-lg-4 col-9 mb-3">
                    <input wire:model="keterangan" type="text" class="form-control @error('keterangan') is-invalid @enderror " placeholder="Keterangan">
                    @error('keterangan')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div class="col-2">
                    <button type="submit" wire:click="updateLoading" class="btn btn-dark">Update</button>
                </div>
            </div>
        </div>
    </form>
    <div wire:loading wire:target="updateLoading" class="valid-feedback">
        Mengupdate Data.....
    </div>
</div>
