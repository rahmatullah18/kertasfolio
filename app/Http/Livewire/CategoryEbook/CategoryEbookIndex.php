<?php

namespace App\Http\Livewire\CategoryEbook;

use Livewire\Component;
use App\CategoryEbook;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class CategoryEbookIndex extends Component
{
    use WithPagination;
    
    public $search;

    public function render()
    {
        if ($this->search === null) {
            $category_ebook = CategoryEbook::latest()->paginate(12);     
        }else{
             $category_ebook = CategoryEbook::where('nama_category', 'like', '%' . $this->search . '%')->orderBy('id', 'desc')->paginate(12);
        }
        
        return view('livewire.category-ebook.category-ebook-index', compact('category_ebook'));
    }
}
