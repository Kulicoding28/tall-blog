@props(['post'])
<div {{ $attributes }}>
    <a href="#">
        <div>
            <img class="w-full rounded-xl" src="{{ $post->getThumbnail() }}">
        </div>
    </a>
    <div class="mt-3">
        <div class="flex items-center mb-2 gap-x-2">
            @if ($category = $post->categories()->first())
                <x-badge wire:navigate href="{{ route('posts.index', ['category' => $category->title]) }}"
                    :textColor="$category->text_color" :bgColor="$category->bg_color">{{ $category->title }}</x-badge>
            @endif
            <p class="text-red-500 text-sm">{{ $post->published_at }}</p>
        </div>
        <a href="#" class="text-xl font-bold text-red-700">{{ $post->title }}</a>
    </div>

</div>
