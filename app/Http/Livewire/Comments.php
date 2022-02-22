<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comments extends Component
{
    public $comments=[
            [
                'body'=>"This is first comment",
            'creator'=>"Khairunissa",
            'created_at'=>"3min ago"
            ]
    ];

    public function add_comment(){
       
            $this->comments[]=[
                'body'=>"This is second comment",
            'creator'=>"amna",
            'created_at'=>"1min ago"
            ];
   

    }
  
    public function render()
    {
        return view('livewire.comments');
    }
}
