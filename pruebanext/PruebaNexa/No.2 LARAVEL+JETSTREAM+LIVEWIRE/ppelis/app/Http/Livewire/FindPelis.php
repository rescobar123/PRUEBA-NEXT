<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ppelis;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;

class FindPelis extends Component
{
    public $title='';
    public $year;
    public $plot;
    public $link;
    public function render()
    {   
        $link = 'http://www.omdbapi.com/?t='.$this->title.'&y='.$this->year.'&plot='.$this->plot.'&apikey=4f8b3d5f';
        $pelis = HTTP::get($link);
        $pelisArray = json_decode($pelis, true);
        $id = '';
        if(isset($pelisArray['imdbID'])){
            $idPeliDB = Ppelis::select('imdbID', 'id')->where('imdbID', $pelisArray['imdbID'])->where('id_user', Auth::user()->id)->get();
            foreach($idPeliDB as $idPeli){
                $idPeliDB = $idPeli->imdbID;
                $id = $idPeli->id;
            }
        }else{
            $idPeliDB = '';
            
        }
        return view('livewire.find-pelis', compact('pelisArray'), compact('idPeliDB'))->with('id', $id);
    }

    public function addPeli(Request $request){
        $peli = new Ppelis;
        $peli->title=$request->title;
        $peli->year=$request->year;
        $peli->ratings='ratings';
        $peli->imdbID=$request->imdbID;
        $peli->id_user=Auth::user()->id;
        $peli->poster=$request->poster;
        $peli->save();
        
        return redirect('/home');
    }
    public function deletePeli(Request $request){
        $peli = new Ppelis;
        $peli = Ppelis::find($request->idDB);
        
        $peli->delete();
        return redirect('/home');
    }
}


