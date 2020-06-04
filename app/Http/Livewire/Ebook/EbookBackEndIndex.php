<?php

namespace App\Http\Livewire\Ebook;

use Livewire\Component;
use App\Ebook;
use App\CategoryEbook;
use Livewire\WithPagination;

class EbookBackEndIndex extends Component
{
    use WithPagination;

    public $updateStatus = false;

    public $listeners = [
        'ebookStored', 'ebookUpdated'
    ];

    public function render()
    {
        $ebooks = Ebook::latest()->paginate(5); 
        return view('livewire.ebook.ebook-back-end-index', compact('ebooks'));
    }

    public function ebookStored($ebook)
    {
        session()->flash('add', 'Data <b>' . $ebook['judul'] . '</b> Ditambahkan');
    }

    public function destroy($id)
    {
        if ($id) {
            $data = Ebook::find($id);
            $data->delete();

            session()->flash('delete', 'Data <b>' . $data['judul'] . '</b> Terhapus');
            $this->updateStatus = false;
        }
    }

    public function getEbook($id)
    {
        $this->updateStatus = true;

        sleep(1);
        $ebook = Ebook::find($id);
        $this->emit('getEbook', $ebook);        
    }

    public function ebookUpdated($ebook)
    {
        session()->flash('update', 'Data <b>' . $ebook['judul'] . '</b> Terupdated');
        $this->updateStatus = false;
    }
}
