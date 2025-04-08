<x-layouts.main>
  <x-slot:title>{{ $list->title }}</x-slot:title>

  <header class="{{ ($list->priority === 'low' ? 'bg-green-600' : ($list->priority === 'medium' ? 'bg-yellow-600' : 'bg-red-600')) }} mb-4 p-4 rounded-lg">
    <h1 class="text-white mb-2 text-3xl font-bold">{{ $list->title }}</h1>
    <p class="text-gray-300 mb-5 italic">{{ $list->description ?? 'No description.' }}</p>
    <p class="text-white text-sm">Priority: <span class="font-bold">{{ ucfirst($list->priority) }}</span></p>
  </header>

  <form action="{{ route('tasks.store', $list->id) }}" method="post" class="flex justify-between gap-2 mb-4">
    @csrf
    <input type="text" name="title" id="title" placeholder="Type your task here" autocomplete="off" value="{{ old('title') }}" class="bg-white w-1/2 p-2 border border-gray-800 rounded-md shadow-sm focus:outline-gray-800 md:w-[90%]">
    <button type="submit" class="bg-gray-800 text-white px-4 py-2 rounded cursor-pointer duration-300 hover:bg-gray-900">Add Task</button>
  </form>

  <h2 class="text-xl font-bold">Your Tasks:</h2>

  @if (count($list->tasks) > 0)
    @foreach ($list->tasks as $task)
      <div class="flex items-center justify-between {{ $task->status === 'done' ? 'bg-green-100' : 'bg-white' }} border rounded shadow p-3 mb-2">
        <div class="flex items-center gap-2">
          <form action="{{ route('tasks.toggle', [$list->id, $task->id]) }}" method="post">
            @csrf
            @method('put')
            <input type="checkbox" onchange="this.form.submit()" {{ $task->status === 'done' ? 'checked' : '' }}>
          </form>
          <span class="{{ $task->status === 'done' ? 'line-through text-gray-500' : 'font-bold' }}">
            {{ $task->title }}
          </span>
        </div>
        <div class="flex gap-2">
          <button data-modal-target="#editModal-{{ $task->id }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil text-yellow-600 cursor-pointer" viewBox="0 0 16 16">
              <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
            </svg>
          </button>
          <form action="{{ route('tasks.destroy', [$list->id, $task->id]) }}" method="post" onsubmit="return confirm('Delete this task?')">
            @csrf
            @method('delete')
            <button type="submit" class="relative top-[2px]">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash text-red-500 cursor-pointer" viewBox="0 0 16 16">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
              </svg>
            </button>
          </form>
        </div>
      </div>

      <div id="editModal-{{ $task->id }}" class="hidden fixed inset-0 bg-[rgba(0,0,0,.8)] flex items-center justify-center z-50">
        <form action="{{ route('tasks.update', [$list->id, $task->id]) }}" method="post" class="bg-white p-6 rounded shadow-md w-[90%] md:w-1/2">
          @csrf
          @method('put')
          <div class="mb-4">
            <input type="text" name="title" value="{{ old('title', $task->title) }}" placeholder="Change your task" class="w-full p-2 border rounded focus:outline-gray-700">
          </div>
          <div class="flex justify-end gap-2">
            <button type="button" onclick="closeModal({{ $task->id }})" class="px-3 py-1 bg-red-500 rounded text-white duration-300 hover:bg-red-600">Cancel</button>
            <button type="submit" class="px-3 py-1 bg-gray-800 rounded text-white duration-300 hover:bg-gray-900">Save</button>
          </div>
        </form>
      </div>
    @endforeach
  @else
    <div class="w-full h-full flex justify-center items-center">
      <p class="text-gray-600 text-center italic">No tasks yet. Let's create one!</p>
    </div>
  @endif

  <script>
    document.querySelectorAll('[data-modal-target]').forEach(button => {
      button.addEventListener('click', () => {
        const target = button.getAttribute('data-modal-target');
        document.querySelector(target).classList.remove('hidden');
      });
    });

    function closeModal(id) {
      document.getElementById(`editModal-${id}`).classList.add('hidden');
    }
  </script>
</x-layouts.main>