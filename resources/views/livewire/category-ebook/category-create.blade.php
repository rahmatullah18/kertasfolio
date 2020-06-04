<div>
    {{-- Be like water. --}}
    <form wire:submit.prevent="store">
        <div class="form-group">
            <div class="form-row">
                <div class="col-lg-4 col-3 mb-3">
                    <input wire:model="nama" type="text" class="form-control @error('nama') is-invalid @enderror " placeholder="Category">
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
                    <button type="submit" wire:click="tambah" class="btn btn-dark">Tambahkan</button>
                </div>
            </div>
        </div>
    </form>
    <div wire:loading wire:target="tambah" class="valid-feedback">
        Menambahkan Data...
    </div>
</div>
