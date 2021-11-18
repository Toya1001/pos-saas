<div x-data="{ loginModal: false, signupModal: false }"
    class="shadow-sm bg-transparent absolute top-0 z-20 w-screen">

    <div class="p-2 mx-auto max-w-screen-xl">

        <div class="flex items-center justify-between space-x-4 lg:space-x-10">

            <div class="flex lg:w-0 lg:flex-1">

                <img src="{{ asset('img/storeLogo.png') }}" class="w-52 h-16  rounded-lg" />

            </div>


            @guest

                <div class="items-center justify-end flex-1 hidden space-x-4 sm:flex">

                    <a @click.prevent="loginModal = !loginModal"
                        class="px-5 py-2 text-sm font-medium text-white " href=""> Log in </a>

                    <a @click.prevent="signupModal = !signupModal"
                        class="px-5 py-2 text-sm font-medium text-white " href=""> Sign up </a>

                </div>

            @endguest


        </div>

    </div>

    <x-modal alpName="loginModal"
             x-trap="loginModal"
             class="bg-gray-900 ">



            @include('auth.login')

    </x-modal>

    <x-modal alpName="signupModal"
             x-trap="signupModal"
             class="bg-gray-900 ">

        @include('auth.register')

    </x-modal>

</div>
