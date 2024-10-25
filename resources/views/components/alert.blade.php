<div @class([ 'flex flex-col w-full space-y-2 rounded px-4 py-4 text-base text-justify font-medium'=> true,
    'bg-blue-400 text-white' => $type === 'info',
    'bg-orange-400 text-white' => $type === 'warning',
    'bg-green-400 text-white' => $type === 'success',
    'bg-red-400 text-white' => $type === 'error'
    ]) role="alert">

    <div class="flex justify-center items-baseline space-x-2">
        @if($type == 'info')
        <i class="fa-solid text-center fa-circle-info fa-xl"></i>
        @elseif($type == 'warning')
        <i class="fa-solid fa-triangle-exclamation fa-xl"></i>
        @elseif($type == 'success')
        <i class="fa-solid fa-circle-check fa-xl"></i>
        @else
        <i class="fa-solid fa-xmark fa-xl"></i>
        @endif
        <span class="text-3xl font-bold">{{ $title }}</span>
    </div>

    <span class="text-2xl text-center">{{ $message }}</span>
</div>