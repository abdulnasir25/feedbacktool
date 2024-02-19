<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex justify-between items-center">
            {{ __('Feedback List') }}
            <a href="{{ route('feedback.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-bold py-1 px-2 rounded">Add Feedback</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="overflow-x-auto">
                        @if(session('success'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                                <strong class="font-bold">Success!</strong>
                                <span class="block sm:inline">{{ session('success') }}</span>
                            </div>
                        @endif
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">Title</th>
                                    <th class="px-4 py-2">Category</th>
                                    <th class="px-4 py-2">User</th>
                                    <th class="px-4 py-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($feedbacks as $feedback)
                                <tr>
                                    <td class="border px-4 py-2">{{ $feedback->title }}</td>
                                    <td class="border px-4 py-2">{{ $feedback->category }}</td>
                                    <td class="border px-4 py-2">{{ $feedback->user->name }}</td>
                                    <td class="border px-4 py-2 justify-center items-center">
                                        <a href="{{ route('feedback.show', $feedback->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold text-sm py-1 px-2 rounded">View</a>
                                        <a href="{{ route('feedback.edit', $feedback->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold text-sm py-1 px-2 rounded">Edit</a>
                                        <form method="POST" action="{{ route('feedback.destroy', $feedback->id) }}" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold text-sm py-1 px-2 rounded">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $feedbacks->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
