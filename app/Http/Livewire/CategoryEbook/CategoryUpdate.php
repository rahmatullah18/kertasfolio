<?php

namespace App\Http\Livewire\CategoryEbook;

use Livewire\Component;
use App\CategoryEbook;

class CategoryUpdate extends Component
{
    public $nama, $keterangan;

    public $categoryId;

    public $listeners = [
        'getCategory',
    ];

    public function getCategory($category)
    {
        $this->nama = $category['nama_category'];
        $this->keterangan = $category['keterangan'];
        $this->categoryId = $category['id'];
    }

    public function update()
    {
        $this->validate([
            'nama' => 'required',
            'keterangan' => 'required'
        ]);

        if ($this->categoryId) {
            $category = CategoryEbook::find($this->categoryId);
            $category->update([
                'nama_category' => $this->nama,
                'keterangan' => $this->keterangan,
            ]);

            $this->resetInput();

            $this->emit('categoryUpdated', $category);
        }
    }

    public function resetInput()
    {
        $this->nama = null;
        $this->keterangan = null;
    }

    public function updateLoading()
    {
        
    }

    public function render()
    {
        return view('livewire.category-ebook.category-update');
    }
}
