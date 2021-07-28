<div class="py-2">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col">
            <input type="text" wire:model.debounce.700ms="search"
                class="border-gray-200 rounded-sm mb-6 sm:mx-6 lg:mx-8"
                placeholder="{{ __('Search user placeholder') }}">
            @if ($users->count())
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 border-t border-gray-200">
                    <div class="py-4 align-middle inline-block min-w-full sm:px-12 lg:px-16">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg mb-4">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            ID
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            {{ __('Name') }}
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            {{ __('Email') }}
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            {{ __('Actions') }}
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="px-6 py-2 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $user->id }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-2 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $user->name }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-2 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $user->email }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-2 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <a href="{{ route('users.edit', $user) }}"
                                                        class="bg-yellow-500 rounded-sm px-4 py-1 text-md font-medium text-white">
                                                        Edit
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $users->links() }}
                    </div>
                </div>
            @else
                <div class="p-8">
                    <p class="text-center text-2xl font-bold">{{ __('No records') }}</p>
                </div>
            @endif
        </div>
    </div>
</div>
