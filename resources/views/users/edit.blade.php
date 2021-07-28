<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Assign role') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if (session('info'))
            <div class="bg-green-300 border-l-4 border-green-500 text-gray-700 p-4 mx-4 mb-3" role="alert">
                <p class="font-bold">{{ session('info') }}</p>
            </div>
        @endif

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                <h3 class="text-sm my-2">{{ __('Name') }}:</h3>
                <p class="border border-gray-200 rounded-sm p-2 text-gray-500 mb-3">{{ $user->name }}</p>

                <h5 class="text-md my-2 font-bold">{{ __('List of roles') }}</h5>
                {!! Form::model($user, ['route' => ['users.update', $user], 'method' => 'PUT']) !!}
                @foreach ($roles as $role)
                    <div>
                        <label>
                            {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-2']) !!}
                            {{ $role->name }}
                        </label>
                    </div>
                @endforeach
                {!! Form::submit(__('Assign role'), ['class' => 'bg-indigo-500 rounded-sm px-3 py-2 text-white mt-2']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</x-app-layout>
