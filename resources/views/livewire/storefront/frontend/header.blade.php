<section role="banner" class="bg-white">

    <div class="bg-{{ ($storeInfos->theme === 'black') ? 'black' : $storeInfos->theme.'-600' }}  absolute z-10 h-screen w-screen bg-opacity-70"></div>

    <div class="mx-auto sm:grid  lg:grid-cols-3 max-w-screen-2xl lg:h-screen">
        <div class="relative flex items-end px-4 pt-64 pb-4 lg:col-span-2 sm:px-8 sm:pb-8 lg:px-12 lg:pb-12">
            <img
                src="{{ $storeInfos->banner[0]->bannerLogo() }}"
                alt="Office workers high fiving"
                class="absolute inset-0 object-cover w-full h-full"/>

        </div>

        <div class="w-screen absolute inset-0 z-20 flex justify-center items-center flex-col mx-auto text-center">
            <h1
                class="text-3xl font-extrabold text-transparent sm:text-8xl bg-clip-text bg-white">

                {{ $storeInfos->name }}

            </h1>

            <p class="max-w-xl mx-auto mt-6 text-white text-4xl">

                {{ $storeInfos->banner_message }}

            </p>


        </div>

        <div class="hidden  sm:grid sm:grid-cols-2 lg:grid-cols-1">
            <div class="sm:relative sm:h-64 lg:h-full">
                <img
                    src="{{ $storeInfos->banner[1]->bannerLogo() }}"
                    alt="Office workers in a meeting"
                    class="sm:absolute sm:inset-0 sm:object-cover sm:w-full sm:h-full"
                />
            </div>

            <div class="sm:relative sm:h-64 lg:h-full">
                <img
                    src="{{ $storeInfos->banner[2]->bannerLogo() }}"
                    alt="Programmers working"
                    class="sm:absolute sm:inset-0 sm:object-cover sm:w-full sm:h-full"
                />
            </div>
        </div>
    </div>
</section>
