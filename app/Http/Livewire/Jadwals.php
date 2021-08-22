<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Jadwal;

class Jadwals extends Component
{
    public $jadwals;
    public $Home1,$Time1,$Away1;
    public $isOpens = 0;
    public function render()
    {
        $this->jadwals = Jadwal::all();
        return view('livewire.jadwals');
    }
    public function showModalw(){
        $this->isOpens = true;
    }
    public function hideModalw(){
        $this->isOpens = false;
    }
    public function storew(){       
        Jadwal::updateOrCreate([
                'Home1'=>$this->Home1 ,
                'Time1'=>$this->Time1 ,
                'Away1'=>$this->Away1 ,
        ]);
               $this->Home1='';
                $this->Time1 = '';
                $this->Away1 = '';
                $this->hideModalw();
    }
}
