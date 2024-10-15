 <div>
     <h3 class="text-lg font-semibold text-red-700 mb-3">Recommended Topics</h3>
     <div class="topics flex flex-wrap justify-start">
         @foreach ($categories as $category)
             <x-badge>{{ $category->title }}</x-badge>
         @endforeach
     </div>
 </div>
