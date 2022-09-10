<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          
        
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.categories.index') }}" class="px-4 py-2 bg-indigo-400 hover:bg-indigo-600 rounded-lg">Add Here</a>
            </div>

             <div class="m-2 p-2">
                 <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                       <form action="{{ route('admin.categories.update', $category->id ) }}"  method="POST" enctype="multipart/form-data">
                            
                       @csrf
                       @method('PUT')
                       <!-- method="POST"  -->
                       
                            <div class="sm:col-span-6 pt-5 mt-3">
                                <label for="title" class="block text-sm font-medium text-gray-700">Name</label>
                               <div class="mt-1">
                                  <input type="text" value="{{ $category->name }}" name="name" id="name" class="block w-full transition">
                               </div>                           
                            </div>
                            @error('name')
                             <div class="text-sm text-red-500">
                                   {{ $message }}
                             </div>
                            @enderror

                            <div class="sm:col-span-6 pt-5 mt-3">
                                <label for="image" class="block text-sm font-medium text-gray-700">Upload the image</label>
                               <div>
                                    <img src="{{ Storage::url($category->image) }}" alt="" class="w-32 h-32">
                               </div>
                                <div class="mt-1">
                                  <input type="file" name="image" id="image" class="block w-full transition">
                               </div>                       
                            </div>

                            @error('image')
                             <div class="text-sm text-red-500">
                                   {{ $message }}
                             </div>
                            @enderror

                            <div class="sm:col-span-6 pt-5 mt-4">
                                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                               <div class="mt-1">
                                  <textarea row="4" name="description" id="description" class="block w-full transition">  {{ $category->description }}</textarea>
                               
                                </div>                           
                            </div>

                            @error('description')
                             <div class="text-sm text-red-500">
                                   {{ $message }}
                             </div>
                            @enderror

                            <div class="mt-6 p-4">
                                <button type="submit" class="px-4 py-2 bg-indigo-400 hover:bg-indigo-600 rounded-lg">
                                     Update
                                </button>
                            </div>
                       </form>
                 </div>
             </div>
        

        </div>
    </div>
</x-admin-layout>
