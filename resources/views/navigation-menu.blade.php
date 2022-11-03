<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 lg:px-0">
        <div class="flex justify-between h-20">
            <!-- Hamburger -->
            <div class="-mr-2 flex items-center lg:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="flex items-center">
                <a href="/">
                    <x-application-logo class="block h-12 w-auto" />
                </a>
                <div class="hidden space-x-8 lg:-my-px lg:ml-10 lg:flex">
                    @foreach ($navigationMenu->items as $item)
                    <x-nav-link :href="$item->link" :active="request()->is(ltrim($item->link, '/'))">{{ $item->text }}</x-nav-link>
                    @endforeach
                </div>
            </div>
            <div class="hidden lg:flex lg:items-center text-base">
                <div class="text-sky-800">
                    <svg id="search_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path id="Path_369" data-name="Path 369" d="M0,0H24V24H0Z" fill="none"/>
                    <path id="Path_370" data-name="Path 370" d="M15.5,14h-.79l-.28-.27a6.518,6.518,0,1,0-.7.7l.27.28v.79l4.25,4.25a1.054,1.054,0,0,0,1.49-1.49Zm-6,0A4.5,4.5,0,1,1,14,9.5,4.494,4.494,0,0,1,9.5,14Z" fill="#004b85"/>
                    </svg>
                </div>
                <x-button class="ml-5">Tìm kiếm</x-button>
            </div>
            <div class="flex items-center lg:hidden">
                <div class="text-sky-800">
                    <svg id="search_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path id="Path_369" data-name="Path 369" d="M0,0H24V24H0Z" fill="none"/>
                    <path id="Path_370" data-name="Path 370" d="M15.5,14h-.79l-.28-.27a6.518,6.518,0,1,0-.7.7l.27.28v.79l4.25,4.25a1.054,1.054,0,0,0,1.49-1.49Zm-6,0A4.5,4.5,0,1,1,14,9.5,4.494,4.494,0,0,1,9.5,14Z" fill="#004b85"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden lg:hidden">
        <div class="pt-2 pb-3 space-y-1 text-center bg-sky-800 text-gray-50">
            @foreach ($navigationMenu->items as $item)
            <x-responsive-nav-link :href="$item->link" :active="request()->is(ltrim($item->link, '/'))">{{ $item->text }}</x-responsive-nav-link>
            @endforeach
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">

            </div>

            <div class="mt-3 space-y-1">
            </div>
        </div>
    </div>
</nav>
