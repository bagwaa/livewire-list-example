<div>
    <li>
        {{ $post->title }}
        <button wire:click="removePost({{ $post->id }})">Delete</button>
    </li>
</div>
