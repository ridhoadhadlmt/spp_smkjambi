<button {{ $attributes->merge(['type' => 'submit', 'class' => 'items-center font-semibold w-full py-3 bg-pink-500 border-transparent rounded-xl text-white uppercase tracking-widest hover:bg-pink-600 focus:outline-none focus:border-pink-700 focus:ring ring-pink-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
