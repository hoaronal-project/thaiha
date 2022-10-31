<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-7 py-3 bg-transparent border border-white rounded font-bold text-sm text-white uppercase tracking-widest shadow-sm hover:text-gray-200 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
