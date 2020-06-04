<?php

namespace App\Http\Livewire\Sourcecode;

use Livewire\Component;
use App\SourceCode;
use App\Category;

class SourceCodeIndex extends Component
{
    public $sourcecodes;
    public $category;

    public function mount(Category $category)
    {
        $this->category = $category;
        $this->sourcecodes = SourceCode::where('category_id', '=' , $category->id)->orderBy('id', 'desc')->get(); 
    }

    public function render()
    {
        return view('livewire.sourcecode.source-code-index');
    }

    // public function destroy($id)
    // {
    //     if ($id) {
    //         $data = SourceCode::where('id', $id);
    //         $data->delete();

    //         session()->flash('delete', 'Data <b>' . '</b> Terhapus');
    //     }
    // }
}
