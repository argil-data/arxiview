@props([
    'size' => 'sm', 'md', 'lg',
    'type' => 'primary', 'secondary', 'error', 'success', 'filled', 'outlined',
    'sm' => false,
    'md' => false,
    'lg' => false,
    'link' => '',
    '_blank' => false,
    'gray' => false,
    'darkGray' => false,
    'disabled' => false,
    'disabled' => false,
])

<div class="py-4">
    <button 
        {{-- class="inline-flex items-center px-2 lg:px-4 py-2 lg:py-3 border-2 rounded-md border-iris-500 text-iris-500 hover:bg-iris-500 hover:text-white active:bg-iris-600 active:text-white focus:outline-none disabled:opacity-50 fox-transition text-sm lg:text-base font-medium" --}}
        {{-- id= --}}
        {{-- class= --}}
        {{-- aria-label --}}
        {{-- variant= --}}
        {{-- href/link= --}}
        {{-- color= --}}
        {{-- size= --}}
        {{-- startIcon= --}}
        {{-- endIcon= --}}
        {{-- state?= --}}

        {{-- {{ $attributes->class(['btn btn-'.$size  --}}
        {{-- .'btn-'.$color --}}
        {{-- ])->merge(['type' => 'button']) }} --}}
        
        {{ $attributes->class([
            'px-6 py-2' => $md,
            'px-2 py-1 text-sm' => $sm,
            'px-10 py-3' => $lg,
            'text-blue-500 hover:text-blue-700' => $link,
            'bg-gray-200 hover:bg-gray-300' => $gray,
            'bg-gray-600 hover:bg-gray-800 text-white' => $darkGray,
            'btn-' .$size. ' btn-' .$type. ' rounded-md border-2 
            {{-- border-iris-500 text-iris-500 hover:bg-iris-500 hover:text-white active:bg-iris-600 active:text-white --}}
            transition transition-all duration-300 cursor-pointer']) 
        }} href="{{ $link }}"

    >
        {{-- button src/views/components        --}}
        {{ $slot }}
    </button>
</div>