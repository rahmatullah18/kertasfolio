<?php

namespace App\Http\Livewire\Ebook;

use Livewire\Component;
use App\CategoryEbook;
use App\Ebook;

class EbookIndex extends Component
{
    public $ebook;
    public $category_ebook;

    public function mount(CategoryEbook $categoryebook)
    {
        $this->ebook = Ebook::where('category_id', '=', $categoryebook->id)->orderBy('id', 'desc')->get();
        $this->category_ebook = $categoryebook;
    }

    public function render()
    {
        return view('livewire.ebook.ebook-index');
    }
}
