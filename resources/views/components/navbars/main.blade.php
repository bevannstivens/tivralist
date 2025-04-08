<nav x-data="{isOpen: false}" class="bg-gray-800">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="h-16 flex justify-between items-center">

      {{-- ! S: Logo --}}
      <div class="flex items-center">
        <div class="shrink-0">
          <a href="{{ route('lists.index') }}">
            <img src="{{ asset('assets/images/logo.png') }}" alt="TivraList Logo" class="size-12">
          </a>
        </div>
      </div>
      {{-- ! E: Logo --}}

      {{-- ! S: Desktop Version --}}
      <div class="hidden md:block">
        <div class="ml-10 space-x-4 flex items-baseline">
          @auth
            <p class="text-gray-300 py-2 text-sm font-medium rounded-md">Hello, {{ auth()->user()->username }}!</p>
            <form action="{{ route('logout') }}" method="post">
              @csrf
              <button type="submit" class="bg-gray-900 text-white px-3 py-1 text-sm font-medium rounded-md cursor-pointer duration-300 hover:bg-gray-950">Logout</button>
            </form>
          @endauth
        </div>
      </div>
      {{-- ! E: Desktop Version --}}

      {{-- ! S: Mobile Version --}}
      <div class="-mr-2 flex md:hidden">
        <div class="ml-10 space-x-4 flex items-baseline">
          @auth
            <p class="text-gray-300 py-2 text-sm font-medium rounded-md">{{ auth()->user()->username }}</p>
            <form action="{{ route('logout') }}" method="post">
              @csrf
              <button type="submit" class="bg-gray-900 text-white px-3 py-1 text-sm font-medium rounded-md cursor-pointer duration-300 hover:bg-gray-950">Logout</button>
            </form>
          @endauth
        </div>
      </div>
      {{-- ! E: Mobile Version --}}

    </div>
  </div>
</nav>