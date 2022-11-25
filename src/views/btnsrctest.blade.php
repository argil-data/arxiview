<div>
    <button class="border-2 border-black hover:border-teal-500 py-2 px-4 hover:bg-gray-100 hover:text-teal-500"
    {{-- {{ $attributes->class(['bn bn-'.$size.' bn-'.$color])->merge(['type' => 'button']) }} --}}
    >
        button from src/views/   
        {{ $slot }}
    </button>
 
</div>
