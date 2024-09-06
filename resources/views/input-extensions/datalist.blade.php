@props(['extension'])
<datalist id="{{ $extension->getName() }}">
@foreach ($extension->getValue() as $item)
    <option value="{{ $item }}"></option>
@endforeach
</datalist>