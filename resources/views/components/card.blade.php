@props(['highlight' => false])

<div @class([
    'bg-white rounded border border-gray-200 px-3 py-3 my-2 flex justify-between items-center',
    'border-l-4 border-l-red-500' => $highlight
]) >
    {{ $slot }}
    <a {{ $attributes }} class="rounded px-3 py-2 bg-gray-200 hover:bg-red-500 hover:text-white">View Details</a>
</div>
