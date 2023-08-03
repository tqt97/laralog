<nav class="w-full py-4 bg-blue-800 shadow">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between">

        <!-- Nnav -->
        <x-layouts.nav />

        <!-- Icons nav -->
        <x-layouts.icons-nav />

        {{-- Start search --}}
        <div class="flex items-center">
            <form method="get" action="">
                <input name="q" value="{{ request()->get('q') }}"
                    class="block w-full rounded-md border-0 px-3.5 py-2 t0ext-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 font-medium"
                    placeholder="Type an hit enter to search anything" />
            </form>
            @auth
                <div class="flex sm:items-center sm:ml-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="hover:bg-blue-600 hover:text-white flex items-center rounded py-2 px-4 mx-2">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link>
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="">
                                @csrf

                                <x-dropdown-link
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            @else
                <a href="" class="hover:bg-blue-600 hover:text-white rounded py-2 px-4 mx-2">Login</a>
                <a href="" class="bg-blue-600 text-white rounded py-2 px-4 mx-2">Register</a>
            @endauth
        </div>
        {{-- End search --}}
    </div>

</nav>
