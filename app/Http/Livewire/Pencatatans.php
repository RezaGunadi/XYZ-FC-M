<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pencatatan;

class Pencatatans extends Component
{
    public $pencatatans;
    public $Name,$image,$Away,$Berat,$Posisi,$No;
    public $inOpens = 0;
    public function render()
    {
        $this->pencatatans = Pencatatan::all();
        return view('livewire.pencatatans');
    }
    public function showModals(){
        $this->inOpens = true;
    }
    public function hideModals(){
        $this->inOpens = false;
    }
    public function stores(){       
        Pencatatan::updateOrCreate([
                'Home'=>$this->Home ,
                'Time'=>$this->Time ,
                'Away'=>$this->Away ,
        ]);
               $this->Home='';
                $this->Time = '';
                $this->Away = '';
                $this->hideModals();
    }
}
