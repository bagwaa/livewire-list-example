<?php

namespace App\Http\Livewire;

use App\Post as AppPost;
use Livewire\Component;

class Post extends Component
{
    public $post;

    public function mount(AppPost $post)
    {
        $this->post = $post;
    }

    public function removePost($id)
    {
        $this->emit('removePost', $id);
    }

    public function render()
    {
        return view('livewire.post');
    }
}
