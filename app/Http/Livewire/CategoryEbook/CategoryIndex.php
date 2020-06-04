<?php

namespace App\Http\Livewire\CategoryEbook;

use Livewire\Component;
use App\CategoryEbook;
use Livewire\WithPagination;

class CategoryIndex extends Component
{
    use WithPagination;
    public $updateStatus = false;

    public $listeners = [
        'categoryStored',
        'categoryUpdated',
    ];

    public function categoryStored($category)
    {
        session()->flash('add', 'Data <b>' . $category['nama_category'] . '</b> Telah Ditambahkan');
    }

    public function destroy($id)
    {
        if ($id) {
            $data = CategoryEbook::find($id);
            $data->delete();

            $this->updateStatus = false;
            session()->flash('delete', 'Data <b>' . $data['nama_category'] . '</b> Terhapus');
        }
    }

    public function getCategory($id)
    {
        $this->updateStatus = true;

        $category = CategoryEbook::find($id);
        $this->emit('getCategory', $category);
    }

    public function categoryUpdated($category)
    {
        session()->flash('update', 'Data <b>' . $category['nama_category'] . '</b> Terupdate');
        $this->updateStatus = false;
    }

    public function render()
    {
        $category_ebooks = CategoryEbook::latest()->paginate(5); 
        return view('livewire.category-ebook.category-index', compact('category_ebooks'));
    }
}
