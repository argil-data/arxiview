<div>
    <button class="border-2 border-black py-2 px-4 hover:bg-main hover:text-white"
    {{-- {{ $attributes->class(['bn bn-'.$size.' bn-'.$color])->merge(['type' => 'button']) }} --}}
    >
        button from src/views/   
        {{ $slot }}
    </button>
 
</div>
