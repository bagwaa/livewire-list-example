<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;

class Listing extends Component
{
    protected $listeners = [
        'removePost' => '$refresh'
    ];

    public function render()
    {
        return view('livewire.listing', [
            'posts' => Post::all()->sortBy('title')
        ]);
    }
}
