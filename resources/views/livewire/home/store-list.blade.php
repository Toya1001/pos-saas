<div x-data="{ paginate: @entangle('paginator')  }"
     @keydown.esc.window="Check = false; paginate = 3"
    x-show="Check"
     x-transition.duration.300ms
     x-transition.out.duration.300ms.opacity.0
    class="bg-gray-900 transition transform duration-500 absolute  mt-2 md:mt-4 sm:mt-8 top-0 w-screen">

    <div class="px-4 py-16 mx-auto max-w-screen-xl space-y-8 sm:px-6 lg:px-8">

        <div class="max-w-lg mx-auto text-center">

            <h2 class="text-3xl capitalize font-bold text-white sm:text-4xl">

                Choose to shop from any of our available stores

            </h2>

            <p class="mt-4 text-gray-300">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ratione sed cumque molestiae dolores eaque
                odit corporis accusamus reprehenderit laborum?
            </p>

        </div>

        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">

            @forelse($stores as $store)

            <a wire:click.prevent="loadStore({{ $store }})" href="#" class="block">
                <img
                    src="{{ $store->logoUrl($store->logo_path) }}"
                    alt=""
                    class="object-contain bg-gray-100 w-full h-72 rounded-bl-3xl rounded-tr-3xl"
                />

                <div class="flex items-center justify-center text-white text-lg font-bold mt-4 space-x-4">
                    <p class="font-medium">

                        {{ $store->name }}

                    </p>

                    <span class="w-8 h-px bg-yellow-500"></span>

                    <p class="opacity-50 italic text-white"> {{ $store->title }} </p>
                </div>
            </a>

            @empty



            @endforelse

        </div>

        <div class="text-center">

            @if($more)

                <a wire:click.prevent="seeMoreStore"
                   class="inline-block px-4 py-2 text-sm font-medium text-white bg-blue-500 rounded-lg" href="">

                    View More

                </a>

            @endif

        </div>
    </div>
</div>
