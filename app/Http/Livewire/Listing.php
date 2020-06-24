<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;

class Listing extends Component
{
    public $posts;

    protected $listeners = ['postWasDeleted'];

    public function mount()
    {
        $this->posts = Post::all();
    }

    public function postWasDeleted($id)
    {
        /* dd("post ${id} was deleted"); */
    }

    public function render()
    {
        return view('livewire.listing');
    }
}
