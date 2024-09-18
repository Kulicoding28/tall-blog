 <div class=" px-3 lg:px-7 py-6">
     <div class="flex justify-between items-center border-b border-gray-100">
         <div class="flex items-center space-x-4 font-light ">
             <button class="text-red-500 py-4">Latest</button>
             <button class="text-red-700 py-4 border-b border-gray-600">Oldest</button>
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
