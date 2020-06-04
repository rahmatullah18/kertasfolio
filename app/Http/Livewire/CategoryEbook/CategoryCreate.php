<?php

namespace App\Http\Livewire\CategoryEbook;

use Livewire\Component;
use App\CategoryEbook;


class CategoryCreate extends Component
{
    public $nama, $keterangan;

    public function store()
    {
        $this->validate([
            'nama' => 'required',
            'keterangan' => 'required',
        ]);

        $category_ebook = CategoryEbook::create([
            'nama_category' => $this->nama,
            'keterangan' => $this->keterangan,
        ]); 

        $this->resetInput();
        $this->emit('categoryStored', $category_ebook);
    }

    public function resetInput()
    {
        $this->nama = null;
        $this->keterangan = null;
    }

    public function tambah()
    {

    }

    public function render()
    {
        return view('livewire.category-ebook.category-create');
    }
}
