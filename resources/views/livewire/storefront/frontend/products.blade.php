<div class=""><!-- Component Start -->
    <h1 class="text-4xl font-extrabold text-right mt-4 p-3">Product Category Page Title</h1>

    <div class="flex flex-col sm:flex-row b sm:items-end sm:justify-between mt-6 p-3">

        <span class="text-sm font-semibold"></span>

        <button class="relative text-sm focus:outline-none group mt-4 sm:mt-0">

            <div
                class="flex items-center justify-between w-40 h-10 px-3 border-2 border-gray-300 rounded hover:bg-gray-300">

				<span class="font-medium">

					Popular

				</span>

                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">

                    <path fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd"/>

                </svg>

            </div>

            <div
                class="absolute z-10 flex-col items-start hidden w-full pb-1 bg-white shadow-lg rounded group-focus:flex">

                <a class="w-full px-4 py-2 text-left hover:bg-gray-200" href="#">Popular</a>

                <a class="w-full px-4 py-2 text-left hover:bg-gray-200" href="#">Featured</a>

                <a class="w-full px-4 py-2 text-left hover:bg-gray-200" href="#">Newest</a>

                <a class="w-full px-4 py-2 text-left hover:bg-gray-200" href="#">Lowest Price</a>

                <a class="w-full px-4 py-2 text-left hover:bg-gray-200" href="#">Highest Price</a>

            </div>

        </button>

    </div>

    <div
        class="grid 2xl:grid-cols-5 xl:grid-cols-4 lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-x-6 gap-y-12 w-full p-3 mt-6">

        <!-- Product Tile Start -->

        @forelse($products as $product)

            <div class="transform transition duration-500 ease-in-out">

                <img src="https://cdn.pixabay.com/photo/2016/03/27/07/12/apple-1282241_960_720.jpg"
                     class="block h-64 rounded-lg shadow-lg bg-white"/>

                <div class="flex items-center justify-between mt-3">

                    <div>

                        <a href="#" class="font-medium">

                            {{ $product->name }}

                        </a>


                    </div>

                    @if($product->sale_price)

                        <span
                            class="flex items-center line-through h-8 bg-indigo-200 text-indigo-600 text-sm px-2 rounded">

                        ${{ number_format($product->price,2) }}

                    </span>

                        <span class="flex items-center h-8 bg-red-200 text-red-700 text-sm px-2 rounded">

                        ${{ number_format($product->sale_price,2) }}

                    </span>

                    @else

                        <span
                            class="flex items-center h-8 bg-indigo-200 text-indigo-600 text-sm px-2 rounded">

                        ${{ number_format($product->price,2) }}

                    </span>


                    @endif

                </div>

            </div>


        @empty

            <h1 class="text-4xl font-extrabold text-center mt-4 p-3">

                No Product Have Been Added Yet

            </h1>

    @endforelse
    <!-- Product Tile End -->

    </div>


    <div class="flex m-3 justify-center mt-10 space-x-1">

        @if($more)

            <a wire:click.prevent="seeMoreStore"
               class="inline-block px-4 py-2 text-sm font-medium text-white bg-blue-500 rounded-lg" href="">

                View More

            </a>

        @endif

    </div>
    <!-- Component End  --></div>
