<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          
        
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.tables.index') }}" class="px-4 py-2 bg-indigo-400 hover:bg-indigo-600 rounded-lg">Add Here</a>
            </div>

             <div class="m-2 p-2">
                 <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                       <form action="{{ route('admin.tables.store') }}" method="POST" enctype="multipart/form-data">
                            
                            @csrf
                            <div class="sm:col-span-6 pt-5 mt-3">
                                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                               <div class="mt-1">
                                  <input type="text" name="name" id="name"  class="block w-full transition">
                               </div>                           
                            </div>
                            
                            <div class="sm:col-span-6 pt-5 mt-3">
                                <label for="guest_number" class="block text-sm font-medium text-gray-700">Guest Number</label>
                               <div class="mt-1">
                                  <input type="number" name="guest_number" id="guest_number"  class="block w-full transition">
                               </div>                           
                            </div>

                           

                            <div class="sm:col-span-6 pt-5 mt-4">
                                <label for="description" class="block text-sm font-medium text-gray-700">Status</label>
                               <div class="mt-1">
                                   <select id="status" name="status" class="form-multiselect block w-full mt-1">
                                   @foreach(App\Enums\TableStatus::cases() as $status)
                                         <option value="{{ $status->value }}">{{ $status->name }}</option>    
                                    @endforeach      
                                    
                                   </select>
                               </div>                            
                            </div>

                            <div class="sm:col-span-6 pt-5 mt-4">
                                <label for="description" class="block text-sm font-medium text-gray-700">Location</label>
                               <div class="mt-1">
                                   <select id="location" name="location" class="form-multiselect block w-full mt-1">
                                        @foreach(App\Enums\TableLocation::cases() as $location)
                                         <option value="{{ $location->value }}">{{ $location->name }}</option>    
                                         @endforeach                       
                                   </select>
                               </div>                            
                            </div>


   <!-- error fix -->
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
