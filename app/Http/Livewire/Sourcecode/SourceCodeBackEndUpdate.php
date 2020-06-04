<?php

namespace App\Http\Livewire\Sourcecode;

use Livewire\Component;
use App\SourceCode;
use Illuminate\Support\Str;

class SourceCodeBackEndUpdate extends Component
{

    public $category_id,$judul,$slug,$keterangan,$link,$pembuat;
    public $sourcecodeId;

    public $listeners = [
        'getSourcecode'
    ];

    public function render()
    {
        return view('livewire.sourcecode.source-code-back-end-update');
    }

    public function getSourcecode($sourcecode)
    {
        $this->category_id = $sourcecode['category_id'];
        $this->sourcecodeId = $sourcecode['id'];
        $this->judul = $sourcecode['judul'];
        $this->slug = $sourcecode['slug'];
        $this->keterangan = $sourcecode['keterangan'];
        $this->link = $sourcecode['link'];
        $this->pembuat = $sourcecode['pembuat'];
    }

    public function update()
    {
        $this->validate([
            'judul' => 'required',
            'category_id' => 'required',
            'keterangan' => 'required',
            'link' => 'required',
            'pembuat' => 'required',
        ]);
        
        if ($this->sourcecodeId) {
            $sourcecode = SourceCode::find($this->sourcecodeId);
            $sourcecode->update([
                'category_id' => $this->category_id,
                'judul' => $this->judul,
                'slug' =>  Str::slug($this->judul, '-'),
                'keterangan' => $this->keterangan,
                'link' => $this->link,
                'pembuat' => $this->pembuat,
            ]);

            $this->resetInput();
            $this->emit('sourcecodeUpdated', $sourcecode);
        }
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
