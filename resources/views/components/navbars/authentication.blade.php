<nav x-data="{isOpen: false}" class="bg-gray-800">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="h-16 flex justify-between items-center">
      <div class="flex items-center">
        <div class="shrink-0">
          <img src="{{ asset('assets/images/logo.png') }}" alt="TivraList Logo" class="size-12">
        </div>
      </div>
      <div>
        <a href="{{ route('login') }}" class="text-white px-3 py-1 text-sm font-medium rounded-md duration-300 {{ Request::is('login') ? 'md:bg-gray-900 md:hover:bg-gray-950' : '' }}">Login</a>
        <a href="{{ route('register') }}" class="text-white px-3 py-1 text-sm font-medium rounded-md duration-300 {{ Request::is('register') ? 'md:bg-gray-900 md:hover:bg-gray-950' : '' }}">Register</a>
      </div>
    </div>
  </div>
</nav>