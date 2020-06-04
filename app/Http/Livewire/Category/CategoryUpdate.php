<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;
use App\Category;

class CategoryUpdate extends Component
{
    // property update
    public $nama,$keterangan;

    // property menampung inputan hidden id
    public $categoryId;

    public $listeners = [
        'getCategory'
    ];

   public function getCategory($category)
   {
        $this->nama =  $category['nama_category'];
        $this->keterangan = $category['keterangan'];
        $this->categoryId =  $category['id'];
   } 

   public function update()
   {    
    $this->validate([
        'nama' => 'required',
        'keterangan' => 'required',
    ]);

    // jika ada data di $categoryId
        if ($this->categoryId) {
            $category = Category::find($this->categoryId);
            $category->update([
                'nama_category' => $this->nama,
                'keterangan' => $this->keterangan,
            ]);

            $this->resetInput();

            // emit ke CategoryIndex
            $this->emit('categoryUpdated', $category);
        }
   }

   public function resetInput()
   {
        $this->nama = null;
        $this->keterangan = null;
   }

    public function render()
    {
        return view('livewire.category.category-update');
    }

    public function updateLoading()
    {
        
    }
}
