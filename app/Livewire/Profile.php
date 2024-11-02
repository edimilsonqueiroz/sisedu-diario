<?php

namespace App\Livewire;

use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        $page = "Profile";
        return view('livewire.profile',[
            'page' => $page
        ]);
    }
}
