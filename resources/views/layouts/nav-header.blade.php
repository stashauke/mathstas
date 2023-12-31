<?php
    $iconcolors = [
        'tl' => 'cyan',
        'tr' => 'red',
        'bl' => 'blue',
        'br' => 'green',
        'bg' => 'yellow'
    ];
?>

<header>
    <!-- Main navigation container -->
    <div>
        <img class="w-full" alt="A Blue Sky" src="{{ URL::to('/images/mathstas-header.jpg') }}">
    </div>
    <nav
        class="bg-black text-2xl font-bold flex-no-wrap relative flex w-full items-center justify-between py-2 shadow-md shadow-black/5 dark:bg-neutral-600 dark:shadow-black/10 lg:flex-wrap lg:justify-start lg:py-4"
        data-te-navbar-ref>
        <div class="flex w-full flex-wrap items-center justify-between px-3">
            <!-- Hamburger button for mobile view -->
{{--            <button--}}
{{--                class="block border-0 bg-transparent px-2 text-neutral-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"--}}
{{--                type="button"--}}
{{--                data-te-collapse-init--}}
{{--                data-te-target="#navbarSupportedContent1"--}}
{{--                aria-controls="navbarSupportedContent1"--}}
{{--                aria-expanded="false"--}}
{{--                aria-label="Toggle navigation">--}}
{{--                <!-- Hamburger icon -->--}}
{{--                <span class="[&>svg]:w-7">--}}
{{--        <svg--}}
{{--            xmlns="http://www.w3.org/2000/svg"--}}
{{--            viewBox="0 0 24 24"--}}
{{--            fill="currentColor"--}}
{{--            class="h-7 w-7">--}}
{{--          <path--}}
{{--              fill-rule="evenodd"--}}
{{--              d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"--}}
{{--              clip-rule="evenodd" />--}}
{{--        </svg>--}}
{{--      </span>--}}
{{--            </button>--}}

            <!-- Collapsible navigation container -->
            <div
                class="flex-grow items-center !flex basis-auto"
                id="navbarSupportedContent1"
                data-te-collapse-item>
                <!-- Logo -->
                <a
                    class="mb-4 ml-2 mr-5 mt-3 text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:mb-0 lg:mt-0"
                    href="/">
                <div class="hidden md:block">
                    <svg width="50" height="50" viewBox="0 0 160 160">
                        <path d="M 0 0 L 160 0 L 160 160 L 0 160 L 0 0 Z" fill-opacity="1" fill="{{ $iconcolors['bg'] }}" stroke="black" stroke-width="0"></path>
                        <path d="M 0 0 L 100 0 L 100 100 L 0 100 L 0 0 Z" fill-opacity="1" fill="{{ $iconcolors['tl'] }}" stroke="black" stroke-width="0"></path>
                        <path d="M 0 60 L 100 60 L 100 160 L 0 160 L 0 60 Z" fill-opacity="1" fill="{{ $iconcolors['br'] }}" stroke="black" stroke-width="0"></path>
                        <path d="M 60 60 L 160 60 L 160 160 L 60 160 L 60 60 Z" fill-opacity="1" fill="{{ $iconcolors['bl'] }}" stroke="black" stroke-width="0"></path>
                        <path d="M 60 0 L 60 100 L 160 100 L 160 0 L 60 0 Z" fill-opacity="1" fill="{{ $iconcolors['tr'] }}" stroke="black" stroke-width="0"></path>
                        <path d="M 0 0 L 0 20 L 80 20 L 80 0 L 0 0 Z" fill-opacity="1" fill="{{ $iconcolors['tl'] }}" stroke="black" stroke-width="0"></path>
                        <path d="M 20 0 L 20 20 L 80 20 L 80 0 L 20 0 Z" fill-opacity="1" fill="{{ $iconcolors['tl'] }}" stroke="black" stroke-width="0"></path>
                        <path d="M 0 80 L 20 80 L 20 160 L 0 160 L 0 80 Z" fill-opacity="1" fill="{{ $iconcolors['br'] }}" stroke="black" stroke-width="0"></path>
                        <path d="M 0 140 L 80 140 L 80 160 L 0 160 L 0 140 Z" fill-opacity="1" fill="{{ $iconcolors['br'] }}" stroke="black" stroke-width="0"></path>
                        <path d="M 140 80 L 140 160 L 160 160 L 160 80 L 140 80 Z" fill-opacity="1" fill="{{ $iconcolors['bl'] }}" stroke="black" stroke-width="0"></path>
                        <path d="M 20 80 L 20 100 L 80 100 L 80 80 L 20 80 Z" fill-opacity="1" fill="{{ $iconcolors['tl'] }}" stroke="black" stroke-width="0"></path>
                        <path d="M 80 80 L 100 80 L 100 140 L 80 140 L 80 80 Z" fill-opacity="1" fill="{{ $iconcolors['br'] }}" stroke="black" stroke-width="0"></path>
                        <path d="M 80 60 L 160 60 L 160 80 L 80 80 L 80 60 Z" fill-opacity="1" fill="{{ $iconcolors['bl'] }}" stroke="black" stroke-width="0"></path>
                        <path d="M 80 20 L 100 20 L 100 80 L 80 80 L 80 20 Z" fill-opacity="1" fill="{{ $iconcolors['tl'] }}" stroke="black" stroke-width="0"></path>
                        <path d="M 20 20 L 60 20 L 60 60 L 20 60 L 20 20 Z" fill-opacity="1" fill="{{ $iconcolors['bg'] }}" stroke="black" stroke-width="0"></path>
                        <path d="M 20 100 L 60 100 L 60 140 L 20 140 L 20 100 Z" fill-opacity="1" fill="{{ $iconcolors['bg'] }}" stroke="black" stroke-width="0"></path>
                        <path d="M 100 100 L 140 100 L 140 140 L 100 140 L 100 100 Z" fill-opacity="1" fill="{{ $iconcolors['bg'] }}" stroke="black" stroke-width="0"></path>
                        <path d="M 100 20 L 100 60 L 140 60 L 140 20 L 100 20 Z" fill-opacity="1" fill="{{ $iconcolors['bg'] }}" stroke="black" stroke-width="0"></path>
                    </svg>
                </div>
                </a>

                <!-- Left navigation links -->
                <ul
                    class="list-disc list-inside marker:text-white mr-auto flex flex-wrap pl-0 flex-row text-base lg:text-2xl md:text-xl sm:text-lg"
                    data-te-navbar-nav-ref>
                    <li class="list-none mb-4 pr-4" data-te-nav-item-ref>
                        <a
                            class="text-white transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-zinc-400"
                            href="/"
                            data-te-nav-link-ref
                        >Home</a
                        >
                    </li>
                    <li class="mb-4 pr-4 " data-te-nav-item-ref>
                        <a
                            class="text-white transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-zinc-400"
                            href="/page/study"
                            data-te-nav-link-ref
                        >Studying at a University</a
                        >
                    </li>
                    <li class="mb-4 pr-4" data-te-nav-item-ref>
                        <a
                            class="text-white transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                            href="/page/activities"
                            data-te-nav-link-ref
                        >Extracurricular activities</a
                        >
                    </li>
                    <li class="mb-4 pr-4" data-te-nav-item-ref>
                        <a
                            class="text-white transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                            href="/page/teaching"
                            data-te-nav-link-ref
                        >How do I teach?</a
                        >
                    </li>
                    <li class="mb-4 pr-4" data-te-nav-item-ref>
                        <a
                            class="text-white transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                            href="/page/contact"
                            data-te-nav-link-ref
                        >Get in touch!</a
                        >
                    </li>
                    <li class="mb-4 pr-4" data-te-nav-item-ref>
                        <a
                            class="text-white transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                            href="/page/about"
                            data-te-nav-link-ref
                        >About me</a
                        >
                    </li>
{{--                    <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>--}}
{{--                        <a--}}
{{--                            class="text-neutral-500 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"--}}
{{--                            href="pages"--}}
{{--                            data-te-nav-link-ref--}}
{{--                        >Post</a--}}
{{--                        >--}}
{{--                    </li>--}}
{{--                    <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>--}}
{{--                        <a--}}
{{--                            class="text-neutral-500 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"--}}
{{--                            href="homepage"--}}
{{--                            data-te-nav-link-ref--}}
{{--                        >Posts</a--}}
{{--                        >--}}
{{--                    </li>--}}
                </ul>
            </div>

            <!-- Right elements -->
{{--            <div class="relative flex items-center">--}}
{{--                <!-- Cart Icon -->--}}
{{--                <a--}}
{{--                    class="mr-4 text-neutral-600 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"--}}
{{--                    href="#">--}}
{{--        <span class="[&>svg]:w-5">--}}
{{--          <svg--}}
{{--              xmlns="http://www.w3.org/2000/svg"--}}
{{--              viewBox="0 0 24 24"--}}
{{--              fill="currentColor"--}}
{{--              class="h-5 w-5">--}}
{{--            <path--}}
{{--                d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />--}}
{{--          </svg>--}}
{{--        </span>--}}
{{--                </a>--}}

{{--                <!-- Container with two dropdown menus -->--}}
{{--                <div class="relative" data-te-dropdown-ref>--}}
{{--                    <!-- First dropdown trigger -->--}}
{{--                    <a--}}
{{--                        class="hidden-arrow mr-4 flex items-center text-neutral-600 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"--}}
{{--                        href="#"--}}
{{--                        id="dropdownMenuButton1"--}}
{{--                        role="button"--}}
{{--                        data-te-dropdown-toggle-ref--}}
{{--                        aria-expanded="false">--}}
{{--                        <!-- Dropdown trigger icon -->--}}
{{--                        <span class="[&>svg]:w-5">--}}
{{--            <svg--}}
{{--                xmlns="http://www.w3.org/2000/svg"--}}
{{--                viewBox="0 0 24 24"--}}
{{--                fill="currentColor"--}}
{{--                class="h-5 w-5">--}}
{{--              <path--}}
{{--                  fill-rule="evenodd"--}}
{{--                  d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z"--}}
{{--                  clip-rule="evenodd" />--}}
{{--            </svg>--}}
{{--          </span>--}}
{{--                        <!-- Notification counter -->--}}
{{--                        <span--}}
{{--                            class="absolute -mt-4 ml-2.5 rounded-full bg-danger px-[0.35em] py-[0.15em] text-[0.6rem] font-bold leading-none text-white"--}}
{{--                        >1</span--}}
{{--                        >--}}
{{--                    </a>--}}
{{--                    <!-- First dropdown menu -->--}}
{{--                    <ul--}}
{{--                        class="absolute left-auto right-0 z-[1000] float-left m-0 mt-1 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"--}}
{{--                        aria-labelledby="dropdownMenuButton1"--}}
{{--                        data-te-dropdown-menu-ref>--}}
{{--                        <!-- First dropdown menu items -->--}}
{{--                        <li>--}}
{{--                            <a--}}
{{--                                class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"--}}
{{--                                href="#"--}}
{{--                                data-te-dropdown-item-ref--}}
{{--                            >Action</a--}}
{{--                            >--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a--}}
{{--                                class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"--}}
{{--                                href="#"--}}
{{--                                data-te-dropdown-item-ref--}}
{{--                            >Another action</a--}}
{{--                            >--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a--}}
{{--                                class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"--}}
{{--                                href="#"--}}
{{--                                data-te-dropdown-item-ref--}}
{{--                            >Something else here</a--}}
{{--                            >--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}

{{--                <!-- Second dropdown container -->--}}
{{--                <div class="relative" data-te-dropdown-ref>--}}
{{--                    <!-- Second dropdown trigger -->--}}
{{--                    <a--}}
{{--                        class="hidden-arrow flex items-center whitespace-nowrap transition duration-150 ease-in-out motion-reduce:transition-none"--}}
{{--                        href="#"--}}
{{--                        id="dropdownMenuButton2"--}}
{{--                        role="button"--}}
{{--                        data-te-dropdown-toggle-ref--}}
{{--                        aria-expanded="false">--}}
{{--                        <!-- User avatar -->--}}
{{--                        <img--}}
{{--                            src="https://tecdn.b-cdn.net/img/new/avatars/2.jpg"--}}
{{--                            class="rounded-full"--}}
{{--                            style="height: 25px; width: 25px"--}}
{{--                            alt=""--}}
{{--                            loading="lazy" />--}}
{{--                    </a>--}}
{{--                    <!-- Second dropdown menu -->--}}
{{--                    <ul--}}
{{--                        class="absolute left-auto right-0 z-[1000] float-left m-0 mt-1 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"--}}
{{--                        aria-labelledby="dropdownMenuButton2"--}}
{{--                        data-te-dropdown-menu-ref>--}}
{{--                        <!-- Second dropdown menu items -->--}}
{{--                        <li>--}}
{{--                            <a--}}
{{--                                class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"--}}
{{--                                href="#"--}}
{{--                                data-te-dropdown-item-ref--}}
{{--                            >Action</a--}}
{{--                            >--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a--}}
{{--                                class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"--}}
{{--                                href="#"--}}
{{--                                data-te-dropdown-item-ref--}}
{{--                            >Another action</a--}}
{{--                            >--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a--}}
{{--                                class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"--}}
{{--                                href="#"--}}
{{--                                data-te-dropdown-item-ref--}}
{{--                            >Something else here</a--}}
{{--                            >--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </nav>
{{--    <nav {!! isset($styles) ? 'style="'.$styles.'"' : null !!}>--}}
{{--        <div style="width:8vw; height:8vh; fill-opacity:0;">--}}
{{--            <svg width="50" height="50" viewBox="-20 -20 220 220">--}}
{{--                <path d="M -15 -15 L -15 182 L 182 182 L 182 -15 L -15 -15 Z" fill-opacity="1" fill="yellow" stroke="black" stroke-width="5">--}}
{{--                </path>--}}
{{--                <path d="M 0 0 L 0 96 L 96 96 L 96 0 L 0 0 Z" stroke="teal" stroke-width="24">       </path>--}}
{{--                <path d="M 0 72 L 0 168 L 96 168 L 96 72 L 0 72 Z" stroke="blue" stroke-width="24">       </path>--}}
{{--                <path d="M 72 72 L 72 168 L 168 168 L 168 72 L 72 72 Z" stroke="crimson" stroke-width="24">       </path>--}}
{{--                <path d="M 72 0 L 72 96 L 168 96 L 168 0 L 72 0 Z" stroke="cyan" stroke-width="24">       </path>--}}
{{--                <path d="M 0 59 L 0 84 Z" stroke="teal" stroke-width="24">--}}
{{--                </path>--}}
{{--                <path d="M 72 84 L 72 108 Z" stroke="teal" stroke-width="24">--}}
{{--                </path>--}}
{{--                <path d="M 71 -12 L 71 12 Z" stroke="teal" stroke-width="24">--}}
{{--                </path>--}}
{{--                <path d="M 96 84 L 96 109 Z" stroke="blue" stroke-width="24">--}}
{{--                </path>--}}
{{--                <path d="M 168 84 L 168 109 Z" stroke="crimson" stroke-width="24">--}}
{{--                </path>--}}
{{--                <path d="M 72 156 L 72 180 Z" stroke="blue" stroke-width="24">--}}
{{--                </path>--}}
{{--            </svg>--}}
{{--        </div>--}}
{{--        <a href="/#home">Home</a>--}}
{{--        <a href="/#maths">Maths</a>--}}
{{--        <a href="/#who-are-you">Who are you?</a>--}}
{{--        <a href="/#how-we-teach">How we teach?</a>--}}
{{--        <a href="/#call-me">Call me!</a>--}}
{{--        <a href="{{ url('pages') }}">Post</a>--}}
{{--        <a href="{{ url('homepage') }}">List of Posts</a>--}}
{{--    </nav>--}}
</header>
