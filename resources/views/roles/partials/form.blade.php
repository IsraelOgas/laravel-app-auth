<div class="flex flex-col">
    {!! Form::label('name', __('Name'), ['class' => 'font-bold']) !!}
    {!! Form::text('name', null, ['class' => 'border-gray-200 mb-2', 'placeholder' => __('Search role placeholder')]) !!}

    @error('name')
        <small class="text-red-500">{{ $message }}</small>
    @enderror
</div>

<h5 class="text-md my-2 font-bold">{{ __('List of permissions') }}</h5>
@foreach ($permissions as $permission)
    <div>
        <label for="{{ $permission->id }}">
            {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-2 cursor-pointer', 'id' => $permission->id]) !!}
            {{ $permission->description }}
        </label>
    </div>
@endforeach
