<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;
use App\Category;
use Illuminate\Support\Str;

class CategoryCreate extends Component
{
    public $nama,$keterangan;

    public function render()
    {
        return view('livewire.category.category-create');
    }

    public function store()
    {
        $this->validate([
            'nama' => 'required',
            'keterangan' => 'required',
        ]);

        $category = Category::create([
            'nama_category' => $this->nama,
            'keterangan' => $this->keterangan,
        ]);

        $this->resetInput();
        $this->emit("categoryStored", $category);
    }

    public function resetInput()
    {
        $this->nama = null;
        $this->keterangan = null;
    }

    public function tambah()
    {

    }
}
