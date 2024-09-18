 <div class=" px-3 lg:px-7 py-6">
     <div class="flex justify-between items-center border-b border-gray-100 p-2">
         <div class="flex items-center space-x-4 font-light ">
             <button class="{{ $sort == 'desc' ? 'text-red-700 border-b border-white' : 'text-red-500' }} py-4"
                 wire:click="setSort('desc')">Latest</button>
             <button class="{{ $sort == 'asc' ? 'text-red-700 border-b border-white' : 'text-red-500' }} py-4"
                 wire:click="setSort('asc')">Oldest</button>
         </div>
     </div>
     <div class="py-4">
         @foreach ($this->posts as $post)
             <x-posts.post-item :post="$post" />
         @endforeach
     </div>

     <div class="my-5">
         {{ $this->posts->onEachSide(1)->links() }}
     </div>
 </div>
