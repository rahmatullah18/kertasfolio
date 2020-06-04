<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;
use App\Category;
use Livewire\WithPagination;
use Illuminate\Support\Str;
class CategoryScIndex extends Component
{
    use WithPagination;
    public $search;

    public function render()
    {
        if ($this->search === null) {
            $categorysc = Category::latest()->paginate(12);   
        }else{
            $categorysc = Category::where('nama_category', 'like', '%' . $this->search . '%')->orderBy('id', 'desc')->paginate(12);
        }
        return view('livewire.category.category-sc-index', compact('categorysc'));
    }
}
