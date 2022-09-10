<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          
        
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.menus.index') }}" class="px-4 py-2 bg-indigo-400 hover:bg-indigo-600 rounded-lg">Add Here</a>
            </div>

             <div class="m-2 p-2">
                 <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                       <form action="{{route('admin.menus.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf  
                            <div class="sm:col-span-6 pt-5 mt-3">
                                <label for="title" class="block text-sm font-medium text-gray-700">Name</label>
                               <div class="mt-1">
                                  <input type="text" name="title" id="title" class="block w-full transition">
                               </div>                           
                            </div>
                            <div class="sm:col-span-6 pt-5 mt-3">
                                <label for="image" class="block text-sm font-medium text-gray-700">Upload the image</label>
                               <div class="mt-1">
                                  <input type="file" name="image" id="title" class="block w-full transition">
                               </div>                           
                            </div>

                            <div class="sm:col-span-6 pt-5 mt-4">
                                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                               <div class="mt-1">
                                  <input type="number" min="0.00" max="100000.00" step="0.01" name="price" id="price" class="block w-full transition">
                               </div>                            
                            </div>

                            <div class="sm:col-span-6 pt-5 mt-4">
                                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                               <div class="mt-1">
                                  <textarea row="4" name="description" id="body" class="block w-full transition"></textarea>
                               </div>                            
                            </div>

                            <div class="sm:col-span-6 pt-5 mt-4">
                                <label for="description" class="block text-sm font-medium text-gray-700">Categories</label>
                               <div class="mt-1">
                                   <select id="categories" name="categories[]" class="form-multiselect block w-full mt-1" multiple>
                                       @foreach($categories as $category)
                                         <option value="{{ $category->id }}"> {{ $category->name }}</option>
                                       @endforeach

                                   </select>
                               </div>                            
                            </div>

                            <div class="mt-6 p-4">
                                <button type="submit" class="px-4 py-2 bg-indigo-400 hover:bg-indigo-600 rounded-lg">
                                     Store Data
                                </button>
                            </div>
                       </form>
                 </div>
             </div>
        

        </div>
    </div>
</x-admin-layout>
