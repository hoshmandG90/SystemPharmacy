<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />

    {{--Tailwind-CSS --}}
    <link rel="stylesheet" href="{{asset('assets/css/tailwind.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/css/tailwind.output.css')}}" />

    {{-- End Tailwind-CSS   --}}

    <link rel="icon" href="{{asset('assets/img/messenger.svg')}}">


   
    @livewireScripts
    @livewireStyles

    <script src="{{asset('assets/js/turbolinks.js')}}"></script>
    <script src="{{asset('assets/js/turbolinks.min.js')}}"></script>

</head>
<body>
        
@auth
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        <!-- Desktop sidebar -->
        <aside class="z-20 hidden w-64    md:block flex-shrink-0">
            @include('components.#DesktopSidebar')
        </aside>
        <!-- END Desktop sidebar -->


        <!-- Mobile sidebar -->
        <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
        <aside
            class="fixed inset-y-0 z-20 rounded-lg flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
            x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
            x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
            @keydown.escape="closeSideMenu">
            @include('components.#MobileSidebar')
        </aside>
        <!-- End Mobile sidebar -->

        <div class="flex flex-col flex-1 w-full">
            @include('components.#Header')
            <main class="h-full overflow-y-auto dark:text-gray-200">
                <div class="flex justify-center px-6 my-2 mx-auto mb-4 ">
                  


                    <div class="container ">
                        
                        @yield('content')
                      
        
                       </div>
                    <!-- CTA Containers AND Main section To The Master Layout -->
                  
                   
                </div>

              
            </main>
        </div>
    </div>
    
    @endauth
    
  

    <script src="{{asset('assets/js/init-alpine.js')}}"></script>
    <script src="{{asset('assets/js/alpine.min.js')}}"></script>
    
</body>

</html>
