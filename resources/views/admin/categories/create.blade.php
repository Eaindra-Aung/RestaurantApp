<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">       
             <div class="m-2 p-2 bg-slate-200 rounded">
                <div class="flex m-2 p-2">
                    <a href="{{ route('admin.categories.index') }}" class="px-4 py-2 bg-indigo-400 hover:bg-indigo-600 rounded-lg">Add Here</a>
                </div>
                
                 <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form action="{{ route('admin.categories.store') }}" method="POST" 
                    enctype="multipart/form-data">
                      @csrf
                           <div class="sm:col-span-6 pt-5 mt-3">
                                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                               <div class="mt-1">
                                  <input type="text" name="name" id="name" class="block w-full apperance-none bg-white border
                                  border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition
                                  duration-150 ease-in-out sm:text-sm sm:leading-5 ">
                               </div>                           
                            </div>

                            @error('name')
                             <div class="text-sm text-red-500">
                                   {{ $message }}
                             </div>
                            @enderror

                            <div class="sm:col-span-6 pt-5 mt-3">
                                <label for="image" class="block text-sm font-medium text-gray-700">Upload the image</label>
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
                                  <textarea row="4" name="description" id="description" class="block w-full transition"></textarea>
                               </div>                           
                            </div>

                            @error('description')
                             <div class="text-sm text-red-500">
                                   {{ $message }}
                             </div>
                            @enderror

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
