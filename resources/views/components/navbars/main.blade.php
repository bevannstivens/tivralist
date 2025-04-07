<nav x-data="{isOpen: false}" class="bg-gray-800">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="h-16 flex justify-between items-center">

      {{-- ! S: Logo --}}
      <div class="flex items-center">
        <div class="shrink-0">
          <img src="{{ asset('assets/images/logo.png') }}" alt="TivraList Logo" class="size-12">
        </div>
      </div>
      {{-- ! E: Logo --}}

      {{-- ! S: Desktop Version --}}
      <div class="hidden md:block">
        <div class="ml-10 space-x-4 flex items-baseline">
          <p class="text-gray-300 py-2 text-sm font-medium rounded-md">Hello, bevannstivens!</p>
          <a href="#" aria-current="page" class="bg-gray-700 text-white py-2 px-3 text-sm font-medium rounded-md duration-300 hover:bg-gray-900">Logout</a>
        </div>
      </div>
      {{-- ! E: Desktop Version --}}

      {{-- ! S: Mobile Version --}}
      <div class="-mr-2 flex md:hidden">
        <div class="ml-10 space-x-4 flex items-baseline">
          <p class="text-gray-300 py-2 text-sm font-medium rounded-md">bevannstivens</p>
          <a href="#" aria-current="page" class="bg-gray-700 text-white py-2 px-3 text-sm font-medium rounded-md duration-300 hover:bg-gray-900">Logout</a>
        </div>
      </div>
      {{-- ! E: Mobile Version --}}

    </div>
  </div>
</nav>