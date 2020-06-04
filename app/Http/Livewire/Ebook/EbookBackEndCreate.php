<?php

namespace App\Http\Livewire\Ebook;

use Livewire\Component;
use App\CategoryEbook;
use App\Ebook;
use Illuminate\Support\Str;

class EbookBackEndCreate extends Component
{
    public $judul, $category_id, $link;

    public function render()
    {
        $category_ebooks = CategoryEbook::all();
        return view('livewire.ebook.ebook-back-end-create', compact('category_ebooks'));
    }

    public function store()
    {
        $this->validate([
            'judul' => 'required',
            'link' => 'required',
            'category_id' => 'required'
        ]);

        $ebook = Ebook::create([
            'judul' => $this->judul,
            'link' => $this->link,
            'slug' => Str::slug($this->judul, '-'),
            'category_id' => $this->category_id,
        ]);

        $this->resetInput();
        $this->emit('ebookStored', $ebook);
    }

    public function resetInput()
    {
        $this->judul =  null;
        $this->link =  null;
        $this->category_id =  null;
    }
}
