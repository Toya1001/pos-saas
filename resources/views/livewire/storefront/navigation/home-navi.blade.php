<header class=" w-screen z-20 bg-transparent absolute top-0 ">

    <div class="flex items-center justify-between h-16 px-4 mx-auto max-w-screen-2xl sm:px-6 lg:px-8">

        <div class="flex items-center">
            <a href="" class="flex flex-shrink-0 p-5">

                <img src="{{ $storeInfos->logoUrl() }}" class=" w-28 h-18 " />

            </a>

            <nav class="items-center hidden pl-8 ml-8 text-sm text-white font-medium space-x-8 md:flex">
                <a href="">About</a>
                <a href="">News</a>
                <a href="">Products</a>
                <a href="">Contact</a>
            </nav>
        </div>

        <div class="flex items-center">

            <div class="items-center text-white hidden divide-x divide-gray-100 lg:flex">

                <a href="" class="block px-6 text-center ">

                    <i class="fas fa-user-circle"></i>

                    <span class="block mt-1 text-xs font-medium">

                        Account

                    </span>
                </a>

                <a href="" class="block px-6 text-center ">

                    <i class="far fa-search"></i>

                    <span class="block mt-1 text-xs font-medium">

                        Search

                    </span>

                </a>

            </div>

            <a href="{{ route('cart') }}" class="block px-6 text-white text-center ">

                <i class="fas fa-shopping-cart"> (0) </i>

                <span class="block mt-1 text-xs font-medium">Cart</span>
            </a>

            <div>

                <a href="#" wire:click.prevent="logout" class="block text-white pl-2 text-center ">

                    <i class="far fa-sign-out-alt"></i>

                    <span class="block mt-1 text-xs font-medium">

                    Leave Store

                </span>
                </a>

            </div>

            <button
                type="button"
                class="inline-flex flex-col items-center justify-center w-16 h-16 bg-gray-100 border-l border-white lg:hidden"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>
</header>
