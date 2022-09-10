<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Menu') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">      
         <div class="flex justify-end m-2 p-2">
            <a href="{{ route('admin.menus.create') }}" class="px-4 py-2 bg-indigo-400 hover:bg-indigo-600 rounded-lg">Add New</a>
         </div>
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Name
                            </th>
                            <th scope="col" class="py-3 px-6">
                               Image
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Price
                            </th>
                            <th scope="col" class="py-3 px-6">
                               Description
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Action
                            </th>
                        </tr>
                    </thead>
                <tbody>

                @foreach($menus as $menu)
                    <tr class="bg-gray-50 border-b dark:bg-gray-800 dark:border-gray-700">
                        <td scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                             {{ $menu->name }}
                        </td>
                        <td scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                             <img src="{{ Storage::url($menu->image) }}" class="w-16 h-16 rounded"  alt="">
                        </td>
                        <td scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                             {{ $menu->price }}
                        </td>
                        <td scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                             {{ $menu->description }}
                        </td>

                        <td scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                             <div class="flex space-x-2">
                                 <a href="{{ route('admin.menus.edit', $menu->id) }}" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg">
                                        Edit
                                 </a>
                                 <form action="{{ route('admin.menus.destroy', $menu->id )}}" class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg"
                                     method="POST" onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete</button>
                                  </form>
                             </div>                       
                        </td>
                    </tr>                       
                @endforeach
                

                </tbody>
             </table>
          </div>

        </div>
    </div>
</x-admin-layout>
