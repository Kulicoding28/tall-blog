@props(['post'])
<div class="">
    <a href="#">
        <div>
            <img class="w-full rounded-xl" src="{{ $post->image }}">
        </div>
    </a>
    <div class="mt-3">
        <div class="flex items-center mb-2">
            <a href="#" class="bg-red-700 text-white rounded-xl px-3 py-1 text-sm mr-3">
                Laravel
            </a>
            <p class="text-red-500 text-sm">{{ $post->published_at }}</p>
        </div>
        <a href="#" class="text-xl font-bold text-red-700">{{ $post->title }}</a>
    </div>

</div>
