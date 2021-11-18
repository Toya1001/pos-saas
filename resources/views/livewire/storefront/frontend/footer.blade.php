<footer class="text-white bg-gray-900 lg:grid lg:grid-cols-5">
    <aside class="hidden lg:relative lg:col-span-2 lg:block">



        <img
            src="{{ $storeInfo->banner[2]->bannerlogo() }}"
            alt="Comic graphic"
            class="absolute inset-0 object-cover w-full h-full"
        />
    </aside>

    <div class="px-4 py-16 sm:px-6 lg:px-8 lg:col-span-3">
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2">
            <div>
                <p class="font-medium">
                    <span class="text-xs tracking-widest uppercase">Call</span>
                    <a href="" class="block text-3xl">{{ $storeInfo->contact[0]->contact_num }}</a>
                </p>

                <ul class="mt-8 space-y-2 text-sm">
                    <li>Monday to Friday: 10am - 5pm</li>
                    <li>Weekend: 10am - 3pm</li>
                </ul>


            </div>


                <div>
                    <p class="font-medium">Support</p>

                    <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-300">
                        <a href="">Contact</a>
                        <a href="">FAQs</a>
                        <a href="">Live Chat</a>
                        <a href="">Forums</a>
                    </nav>
                </div>



        </div>

        <div class="pt-12 mt-12 border-t border-gray-800">
            <div class="text-sm text-gray-300 sm:items-center sm:justify-between sm:flex">
                <div class="flex space-x-3">
                    <a href="">Privacy Policy</a>
                    <a href="">Terms & Conditions</a>
                    <a href="">Returns Policy</a>
                </div>

                <p class="mt-4 sm:mt-0">© {{ $storeInfo->name }}</p>
            </div>

            <p class="mt-8 text-xs text-gray-500">
                {{ $storeInfo->desc }}
            </p>
        </div>
    </div>
</footer>
