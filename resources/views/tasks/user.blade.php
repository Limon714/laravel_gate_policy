<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('User Tasks') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                    Title
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                    Actions
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            <!-- Table rows go here -->
                                           @foreach ($tasks as $task )
                                           <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <!-- Title column -->
                                                <div class="text-sm text-gray-900">{{ $task->name }}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <!-- Action column with buttons -->
                                                <div class="flex items-center space-x-4">
                                                    {{-- @can('task_edit') --}}
                                                    <button class="px-4 py-2 font-bold text-white bg-green-500 rounded hover:bg-blue-700">
                                                        Edit
                                                    </button>
                                                    {{-- @endcan --}}
                                                    {{-- @can('task_delete') --}}
                                                    <button class="px-4 py-2 font-bold text-white bg-red-500 rounded hover:bg-red-700">
                                                        Delete
                                                    </button>
                                                    {{-- @endcan --}}
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                           @endforeach
                                            <!-- Additional rows go here -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                     
                </div>
            </div>
        </div>
    </div>
</x-app-layout>