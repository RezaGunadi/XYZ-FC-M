<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class Posts extends Component
{
    public $posts;
    public $Name,$image,$Tinggi,$Berat,$Posisi,$No;
    public $isOpen = 0;
    public function render()
    {
        $this->posts = Post::all();
        return view('livewire.posts');
    }
    public function showModal(){
        $this->isOpen = true;
    }
    public function hideModal(){
        $this->isOpen = false;
    }
    public function store(){       
        Post::updateOrCreate([
                'Name'=>$this->Name ,
                'image'=>$this->image ,
                'Tinggi'=>$this->Tinggi ,
                'Berat'=>$this->Berat ,
                'Posisi'=>$this->Posisi ,
                'No'=>$this->No
        ]);
               $this->Name='';
                $this->image = '';
                $this->Tinggi = '';
                $this->Berat = '';
                $this->Posisi = '';
                $this->No = '';
                $this->hideModal();
    }
}
