<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit') }} {{ __('Roles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                {!! Form::model($role, ['route' => ['roles.update', $role], 'method' => 'PUT']) !!}
                @include('roles.partials.form')
                {!! Form::submit(__('Edit'), ['class' => 'bg-blue-500 hover:bg-blue-600 rounded-sm px-4 py-2 my-2 text-md font-medium text-white cursor-pointer']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</x-app-layout>
