<?php

namespace App\Http\Livewire\Ebook;

use Livewire\Component;
use App\Ebook;
use Illuminate\Support\Str;

class EbookBackEndUpdate extends Component
{
    public $judul, $link, $category_id, $slug;
    public $ebookId;

    public $listeners = [
        'getEbook'
    ];

    public function render()
    {
        return view('livewire.ebook.ebook-back-end-update');
    }

    public function getEbook($ebook)
    {
        $this->judul = $ebook['judul'];
        $this->link = $ebook['link'];
        $this->category_id = $ebook['category_id'];
        $this->ebookId = $ebook['id'];
        $this->slug = $ebook['slug'];
    }

    public function update()
    {
        $this->validate([
            'judul' => 'required',
            'link' => 'required',
            'category_id' => 'required',
        ]);

        if($this->ebookId){
            $ebook = Ebook::find($this->ebookId);
            $ebook->update([
                'judul' => $this->judul,
                'link' => $this->link,
                'category_id' => $this->category_id,
                'id' => $this->ebookId,
                'slug' => Str::slug($this->judul, '-'),
            ]);

            $this->resetInput();

            $this->emit('ebookUpdated', $ebook);
        }
    }

    public function resetInput()
    {
        $this->judul = null;
        $this->link = null;
        $this->category_id = null;
    }
}
