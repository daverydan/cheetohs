<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gold border border-transparent font-semibold text-xs text-white uppercase tracking-widest hover:bg-gold active:bg-gold focus:outline-none focus:border-gold focus:ring ring-gold disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
