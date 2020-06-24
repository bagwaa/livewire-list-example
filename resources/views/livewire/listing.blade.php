<div>
    <ul>
        @foreach($posts as $post)
            <livewire:post :post="$post" wire:key="{{ $loop->index }}" />
        @endforeach
    <ul>
</div>
