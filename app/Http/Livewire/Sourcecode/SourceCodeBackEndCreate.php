<?php

namespace App\Http\Livewire\Sourcecode;

use Livewire\Component;
use App\Category;
use App\SourceCode;
use Illuminate\Support\Str;

class SourceCodeBackEndCreate extends Component
{
    public $category_id;
    public $judul;
    public $slug;
    public $keterangan;
    public $link;
    public $pembuat;

    public function render()
    {
        $sourcecodes = Category::latest()->get(); 
        return view('livewire.sourcecode.source-code-back-end-create', compact('sourcecodes'));
    }

    public function store()
    {
        $this->validate([
            'judul' => 'required',
            'category_id' => 'required',
            'keterangan' => 'required',
            'link' => 'required',
            'pembuat' => 'required',
        ]);

        $sourcecode = SourceCode::create([
            'category_id' => $this->category_id,
            'judul' => $this->judul,
            'slug' => Str::slug($this->judul, '-'),
            'keterangan' => $this->keterangan,
            'link' => $this->link,
            'pembuat' => $this->pembuat,
        ]);
            $this->resetInput();

        $this->emit('sourcecodeStored', $sourcecode);
    }

    public function resetInput()
    {
        $this->judul = null;
        $this->category_id = null;
        $this->slug = null;
        $this->keterangan = null;
        $this->link = null;
        $this->pembuat = null;
    }

}
