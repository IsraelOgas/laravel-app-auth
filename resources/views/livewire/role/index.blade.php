<div class="py-2">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col">
            <a href="{{ route('roles.create') }}"
                class="bg-gray-500 hover:bg-gray-600 rounded-sm px-4 py-1 sm:mx-6 lg:mx-8 text-md font-medium text-white w-32 text-center mb-4 self-end cursor-pointer">
                {{ __('Add') }}
            </a>
            <input type="text" wire:model.debounce.700ms="search"
                class="border-gray-200 rounded-sm mb-6 sm:mx-6 lg:mx-8"
                placeholder="{{ __('Search role placeholder') }}">
            @if ($roles->count())
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
                                        <th scope="col" colspan="2"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            {{ __('Actions') }}
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($roles as $role)
                                        <tr>
                                            <td class="px-6 py-2 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $role->id }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-2 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $role->name }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-2 whitespace-nowrap" width="10">
                                                <div class="flex items-center gap-2">
                                                    <a href="{{ route('roles.edit', $role) }}"
                                                        class="bg-yellow-500 hover:bg-yellow-600 rounded-sm px-4 py-1 text-md font-medium text-white cursor-pointer">
                                                        {{ __('Edit') }}
                                                    </a>
                                                    {{-- {!! Form::model($role, ['route' => ['roles.destroy', $role], 'method' => 'DELETE']) !!}
                                                    {!! Form::submit(__('Delete'), ['class' => 'bg-red-500 hover:bg-red-600 rounded-sm px-4 py-1 text-md font-medium text-white cursor-pointer']) !!}
                                                    {!! Form::close() !!} --}}

                                                    <x-jet-danger-button
                                                        wire:click="confirmRoleDeletion({{ $role->id }})"
                                                        wire:loading.attr="disabled">{{ __('Delete') }}
                                                    </x-jet-danger-button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $roles->links() }}
                    </div>
                </div>
                <x-jet-dialog-modal wire:model="confirmingRoleDeletion">
                    <x-slot name="title">
                        {{ __('Delete') }} {{ __('Role') }}
                    </x-slot>

                    <x-slot name="content">
                        {{ __('Are you sure you want to delete this role?') }}
                    </x-slot>

                    <x-slot name="footer">
                        <x-jet-secondary-button wire:click="$set('confirmingRoleDeletion', false)"
                            wire:loading.attr="disabled">
                            {{ __('Nevermind') }}
                        </x-jet-secondary-button>

                        <x-jet-danger-button class="ml-2" wire:click="deleteRole({{ $confirmingRoleDeletion }})"
                            wire:loading.attr="disabled">
                            {{ __('Delete') }} {{ __('Role') }}
                        </x-jet-danger-button>
                    </x-slot>
                </x-jet-dialog-modal>
            @else
                <div class="p-8">
                    <p class="text-center text-2xl font-bold">{{ __('No records') }}</p>
                </div>
            @endif
        </div>
    </div>
</div>
