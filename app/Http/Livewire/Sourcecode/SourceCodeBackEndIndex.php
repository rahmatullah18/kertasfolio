<?php

namespace App\Http\Livewire\Sourcecode;

use Livewire\Component;
use App\SourceCode;
use Livewire\WithPagination;

class SourceCodeBackEndIndex extends Component
{

    use WithPagination;   
    public $updateStatus = false;

    public $listeners = [
        'sourcecodeStored', 
        'sourcecodeUpdated',
    ];

    public function render()
    {
        $sourcecodes = SourceCode::latest()->paginate(5); 
        return view('livewire.sourcecode.source-code-back-end-index', compact('sourcecodes'));
    }

    public function sourcecodeStored($sourcecode)
    {
        session()->flash('add', 'Data <b>' . $sourcecode['judul'] . '</b> Ditambahkan');
    }

    public function destroy($id)
    {
        sleep(1);
        if ($id) {
            $data = SourceCode::find($id);
            $data->delete();

            session()->flash('delete', 'Data <b>' . $data['judul'] . '</b> Terhapus');
        }
    }

    public function getSourcecode($id){
        sleep(2);
        $this->updateStatus = true;
        $sourcecode = SourceCode::find($id);
        $this->emit('getSourcecode', $sourcecode);
    }


    public function sourcecodeUpdated($sourcecode)
    {
        session()->flash('update', 'Data <b>' . $sourcecode['judul'] . '</b> Diupdate');
        $this->updateStatus = false;
    }
}













