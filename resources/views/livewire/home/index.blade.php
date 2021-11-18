<div
    class="text-white bg-gray-900 flex h-screen overflow-hidden " role="banner">

    <div class="px-4 py-24 mx-auto absolute inset-0 max-w-screen-xl sm:px-6 lg:px-8 sm:py-36 lg:h-screen lg:flex lg:items-center">

        <div class="max-w-3xl mx-auto text-center">

            <h1

                class="text-3xl font-extrabold text-transparent sm:text-6xl bg-clip-text bg-gradient-to-tr from-blue-700  to-white">
                Amber Multi Store Platform

            </h1>

            <p class="max-w-xl mx-auto mt-6 text-lg">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique necessitatibus dolorem soluta,
                recusandaefacere error.
            </p>

            <div class="mt-2 sm:justify-center sm:flex">

                <a href="#" @click.prevent="Check = true"
                   class="relative inline-block px-12 py-3 mt-8 overflow-hidden hover:bg-white border-2 border-white transition-colors hover:border-white group">
                    <span
                        class="absolute inset-0 transition-transform origin-left transform scale-x-0 bg-sky-500 group-hover:scale-x-100"></span>

                    <span class="relative text-sm group-hover:text-gray-900 group-hover:font-semibold duration-300 transition font-medium tracking-widest uppercase">

                         Check Out Stores

                    </span>

                </a>

            </div>

        </div>

    </div>


    @livewire('home.store-list')

</div>
