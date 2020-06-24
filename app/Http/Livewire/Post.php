<?php

namespace App\Http\Livewire;

use App\Post as PostModel;
use Livewire\Component;

class Post extends Component
{
    public $post;

    public function mount(PostModel $post)
    {
        $this->post = $post;
    }

    public function removePost()
    {
        $this->post->delete();
        $this->emit('postWasDeleted', $this->post->id);
    }

    public function render()
    {
        return view('livewire.post');
    }
}
