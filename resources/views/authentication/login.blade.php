<x-layouts.authentication>
  <x-slot:title>Login</x-slot:title>

  @if ($errors->has('error'))
    <div class="bg-red-100 text-red-500 mb-4 py-3 px-4 font-bold border border-red-400 rounded-md absolute top-6 md:top-14">
      {{ $errors->first('error') }}
    </div>
  @endif

  <div class="bg-slate-300 w-11/12 h-3/4 py-3 px-6 rounded-xl shadow-md md:w-1/3 md:h-2/3">
    <h2 class="text-3xl mb-6 text-center font-bold">Login Page</h2>
    <form action="{{ route('login.attempt') }}" method="post" class="mb-10 md:mb-12">
      @csrf
      <div class="mb-3">
        <label for="email" class="mb-2 inline-block text-sm">Email:</label>
        <input type="email" name="email" id="email" placeholder="someone@example.com" autocomplete="off" value="{{ old('email') }}" autofocus class="bg-white w-full p-2 rounded-md shadow-sm focus:outline-gray-800">
        @error('email')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-6">
        <label for="password" class="mb-2 inline-block text-sm">Password:</label>
        <input type="password" name="password" id="password" placeholder="Min. 8 Characters" autocomplete="off" autofocus class="bg-white w-full p-2 rounded-md shadow-sm focus:outline-gray-800">
        @error('password')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>
      <button type="submit" class="bg-gray-800 text-white w-full py-2 text-center font-bold tracking-wider rounded-md shadow-sm cursor-pointer duration-300 hover:bg-gray-900 focus:outline-white">Login</button>
    </form>
    <p class="text-sm text-center">Don't have an account yet? <a href="{{ route('register') }}" class="text-blue-500 font-semibold underline duration-300 hover:text-blue-600">Register now</a>!</p>
  </div>
</x-layouts.authentication>