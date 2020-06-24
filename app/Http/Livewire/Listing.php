<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;

class Listing extends Component
{
    public function removePost($id)
    {
        Post::find($id)->delete();
    }

    public function render()
    {
        return view('livewire.listing', [
            'posts' => Post::all()->sortBy('title')
        ]);
    }
}
