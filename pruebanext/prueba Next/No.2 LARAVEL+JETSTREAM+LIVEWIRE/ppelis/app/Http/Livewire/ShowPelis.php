<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ppelis;
use Illuminate\Support\Facades\Auth;

class ShowPelis extends Component
{
    
    public $title;//variable que viene de la directiva de blade
    
    /*public function mount($title){
        $this -> titulo = $title;
    }*/

    public $search;
    public $idUser;
    public function render()
    {
        //$pelis = Ppelis::all();
       
        $pelis = Ppelis::where('id_user', Auth::user()->id)
                ->where('title', 'like', '%' . $this->search . '%')->get();
        return view('livewire.show-pelis', compact('pelis'));
    }
}
