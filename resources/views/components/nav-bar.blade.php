<div>
    <nav class="bg-yellow-600"  x-data="{ isOpen: false }">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
              <div class="flex-shrink-0">
                <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
              </div>

              <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                  <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                  <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                  <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                  <x-nav-link href="/posts" :active="request()->is('posts')">Blog</x-nav-link>
                  <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                </div>
              </div>
            </div>
            <div class="hidden md:block">
              <div class="ml-4 flex items-center md:ml-6">
    
                <!-- Profile dropdown -->
                <div class="relative ml-3">
                  <div >
                    <button type="button" @click="isOpen = !isOpen" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                      <span class="absolute -inset-1.5"></span>
                      <span class="sr-only">Open user menu</span>
                      <img class="h-8 w-8 rounded-full" src="data:image/jpeg;base64,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" alt="">
                    </button>
                  </div>
    
                  <div    x-show="isOpen"
                  x-transition:enter="transition ease-out duration-100 transform"
                  x-transition:enter-start="opacity-0 scale-95"
                  x-transition:enter-end="opacity-100 scale-100"
                  x-transition:leave="transition ease-in duration-75 transform"
                  x-transition:leave-start="opacity-100 scale-100"
                  x-transition:leave-end="opacity-0 scale-95" 
                  class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-yellow-300 py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none " role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                    <!-- Active: "bg-gray-100", Not Active: "" -->
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="-mr-2 flex md:hidden">
              <!-- Mobile menu button -->
              <button @click="isOpen = !isOpen"
               type="button" class="relative inline-flex items-center justify-center rounded-md bg-yellow-400 p-2 text-yellow-800 hover:bg-yellow-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-yellow-800" aria-controls="mobile-menu" aria-expanded="false">
                <span class="absolute -inset-0.5"></span>
                <span class="sr-only">Open main menu</span>
                <!-- Menu open: "hidden", Menu closed: "block" -->
                <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <!-- Menu open: "block", Menu closed: "hidden" -->
                <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>
        </div>
    
        <!-- Mobile menu, show/hide based on menu state. -->
        <div x-show="isOpen" class="md:hidden" id="mobile-menu">
          <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
            <x-nav-link href="/posts" :active="request()->is('posts')">Blog</x-nav-link>
            <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
            
          </div>
          <div class="border-t border-yellow-400 pb-3 pt-4">
            <div class="flex items-center px-5">
              <div class="flex-shrink-0">
                <img class="h-10 w-10 rounded-full" src="data:image/jpeg;base64,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" alt="">
              </div>
              <div class="ml-3">
                <div class="text-base font-medium leading-none text-white">Ade Nuryana</div>
                <div class="text-sm font-medium leading-none text-white">ade123ipb@gmail.com</div>
              </div>
             
            </div>
            <div class="mt-3 space-y-1 px-2 ">
              <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-yellow-400 hover:text-white">Your Profile</a>
              <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-yellow-400 hover:text-white">Settings</a>
              <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-yellow-700 hover:text-white">Sign out</a>
            </div>
          </div>
        </div>
      </nav>
</div>