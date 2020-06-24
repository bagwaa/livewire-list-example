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

    public function removePost()
    {
        $this->post->delete();
        $this->emit('removePost', $this->post->id);
    }

    public function render()
    {
        return view('livewire.post');
    }
}
