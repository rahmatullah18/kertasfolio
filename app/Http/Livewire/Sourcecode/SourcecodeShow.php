<?php

namespace App\Http\Livewire\Sourcecode;

use Livewire\Component;
use App\SourceCode;

class SourcecodeShow extends Component
{
    public $sourcecode;

    public function mount(SourceCode $sourcecode)
    {
        $this->sourcecode = $sourcecode;
    }

    public function render()
    {
        return view('livewire.sourcecode.sourcecode-show');
    }

    public function keluar()
    {
        sleep(3);
    }
}
