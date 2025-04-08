<x-layouts.main>
  <x-slot:title>Edit List</x-slot:title>

  <div class="w-full h-full flex justify-center items-center">
    <div class="bg-slate-300 w-11/12 py-3 px-6 rounded-xl shadow-md md:w-2/3">
      <h2 class="text-3xl mb-6 text-center font-bold">Edit Your List</h2>
      <form action="{{ route('lists.update', $list->id) }}" method="post" class="mb-10 md:mb-12">
        @csrf
        @method('put')
        <div class="mb-2">
          <label for="title" class="mb-2 inline-block text-sm">Title:</label>
          <input type="text" name="title" id="title" placeholder="Type your list title" autocomplete="off" value="{{ $list->title }}" autofocus class="bg-white w-full p-2 rounded-md shadow-sm focus:outline-gray-800">
          @error('title')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-1">
          <label for="description" class="mb-2 inline-block text-sm">Description:</label>
          <textarea name="description" id="description" rows="3" placeholder="Type your list description" autocomplete="off" class="bg-white w-full p-2 rounded-md shadow-sm resize-none focus:outline-gray-800">{{ $list->description }}</textarea>
          @error('description')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-5">
          <label for="priority" class="mb-2 inline-block text-sm">Priority:</label>
          <select name="priority" id="priority" class="bg-white w-full p-2 block rounded-md shadow-sm focus:outline-gray-800">
            @foreach ($priorities as $priority)
              <option value="{{ $priority }}" {{ $list->priority === $priority ? 'selected' : '' }}>
                {{ ucfirst($priority) }}
              </option>
            @endforeach
          </select>
          @error('priority')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>
        <button type="submit" class="bg-gray-800 text-white w-full py-2 text-center font-bold tracking-wider rounded-md shadow-sm cursor-pointer duration-300 hover:bg-gray-900 focus:outline-white">Edit List</button>
      </form>
    </div>
  </div>
</x-layouts.main>