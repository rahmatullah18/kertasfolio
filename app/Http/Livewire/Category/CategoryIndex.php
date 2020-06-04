<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;
use App\Category;
use Livewire\WithPagination;

class CategoryIndex extends Component
{
    use WithPagination;

    // untuk update status
    public $updateStatus = false;

    protected $listeners = [
        'categoryStored',
        'categoryUpdated',
    ];

    public function render()
    {
        $categories = Category::latest()->paginate(5);
        return view('livewire.category.category-index', compact('categories'));
    }

    public function categoryStored($category)
    {
        // pesan
        session()->flash('add', 'Data <b>' . $category['nama_category'] . '</b> Telah Ditambahkan');
    }

    public function destroy($id)
    {
        if ($id) {
            $data = Category::find($id);
            $data->delete();
            $this->updateStatus = false;

            session()->flash('delete', 'Data <b>' . $data['nama_category'] . '</b> Terhapus');
        }
    }

    // untuk kirim ke CategoryUpdate
    public function getCategory($id)
    {
        $this->updateStatus = true;

        sleep(1);
        $category = Category::find($id);
        $this->emit('getCategory', $category);
    }

    // data diterima dari categoryUpdate
    public function categoryUpdated($category)
    {
        // pesa
        session()->flash('update', 'Data <b>' . $category['nama_category'] . '</b> Terupdate');
        $this->updateStatus = false;
    }

}






