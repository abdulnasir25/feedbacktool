<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex justify-between items-center">
            {{ __('Edit Feedback') }}
            <a href="{{ route('feedback.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white text-sm font-bold py-1 px-2 rounded">Back to Feedback List</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="overflow-x-auto flex justify-center">
                        <form method="POST" action="{{ route('feedback.update', $feedback->id) }}" class="w-full max-w-lg">
                            @csrf
                            @method('PUT')

                            <div class="mb-4">
                                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
                                <input type="text" id="title" name="title" value="{{ $feedback->title }}" placeholder="Enter title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                @error('title')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                                <textarea id="description" name="description" rows="3" placeholder="Enter description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $feedback->description }}</textarea>
                                @error('description')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Category</label>
                                <select id="category" name="category" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="" @if($feedback->category == '') selected @endif>Select Category</option>
                                    <option value="bug_report" @if($feedback->category == 'bug_report') selected @endif>Bug Report</option>
                                    <option value="feature_request" @if($feedback->category == 'feature_request') selected @endif>Feature Request</option>
                                    <option value="improvement" @if($feedback->category == 'improvement') selected @endif>Improvement</option>
                                </select>
                                @error('category')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
