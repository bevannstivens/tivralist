<x-layouts.main>
  <x-slot:title>Lists</x-slot:title>

  {{-- ! S: Create List Button --}}
  <a href="{{ route('lists.create') }}" title="Create a list" class="bg-yellow-500 w-20 h-20 flex justify-center items-center rounded-full shadow-lg duration-300 fixed bottom-2 right-2 z-2 hover:bg-yellow-400 hover:-translate-y-0.5 active:translate-0 md:bottom-12 md:right-12">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
    </svg>
  </a>
  {{-- ! E: Create List Button --}}

  {{-- ! S: Header --}}
  <header>
    <h1 class="text-3xl font-bold">Your Lists:</h1>
  </header>
  {{-- ! E: Header --}}

  {{-- ! S: All User List Data --}}
  @if (count($lists) > 0)
    @foreach ($lists as $list)
      @php
        $bgClass = match(true) {
          $list->status === 'done' => 'bg-gray-900',
          $list->priority === 'low' => 'bg-green-600 hover:bg-green-700',
          $list->priority === 'medium' => 'bg-yellow-600 hover:bg-yellow-700',
          default => 'bg-red-600 hover:bg-red-700',
        }
      @endphp
      <div class="{{ $bgClass }} w-full p-5 rounded-lg shadow-lg duration-300 relative">
        <a href="{{ route('lists.show', $list->id) }}">
          <h2 class="text-white text-2xl font-bold line-clamp-1">{{ $list->title }}</h2>
          <p class="text-gray-300 mb-5 italic line-clamp-1">{{ $list->description ?? 'No description.' }}</p>
        </a>
        <small class="text-white">Created at: <span class="font-bold">{{ $list->formatted_created_at }}</span></small>
        @if ($list->status === 'in_progress')
          <div class="bg-white px-1 text-xs border border-black rounded-sm absolute top-3 right-4">
            In Progress
          </div>
        @else
          <div class="bg-black text-white px-1 text-xs border border-white rounded-sm absolute top-3 right-4">
            Done
          </div>
        @endif
        <a href="{{ route('lists.edit', $list->id) }}" class="absolute bottom-[23px] right-10">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil text-white" viewBox="0 0 16 16">
            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
          </svg>
        </a>
        <form action="{{ route('lists.destroy', $list->id) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this list?')" class="absolute bottom-4 right-4">
          @csrf
          @method('delete')
          <button type="submit" class="cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash text-white" viewBox="0 0 16 16">
              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
              <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
            </svg>
          </button>
        </form>
      </div>
    @endforeach
  @else
    <div class="w-full h-full flex justify-center items-center">
      <p class="text-gray-600 text-center italic">No lists yet. Let's create one!</p>
    </div>
  @endif
  {{-- ! E: All User List Data --}}

</x-layouts.main>