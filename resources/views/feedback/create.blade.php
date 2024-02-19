<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex justify-between items-center">
            {{ __('Create Feedback') }}
            <a href="{{ route('feedback.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white text-sm font-bold py-1 px-2 rounded">Back to Feedback List</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="overflow-x-auto flex justify-center">
                        <form method="POST" action="{{ route('feedback.store') }}" class="w-full max-w-lg">
                            @csrf
                            <div class="mb-4">
                                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
                                <input type="text" id="title" name="title" value="{{ old('title') }}" placeholder="Enter title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                @error('title')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                                <textarea id="description" name="description" rows="3" placeholder="Enter description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Category</label>
                                <select id="category" name="category" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="" @if(old('category') == '') selected @endif>Select Category</option>
                                    <option value="bug_report" @if(old('category') == 'bug_report') selected @endif>Bug Report</option>
                                    <option value="feature_request" @if(old('category') == 'feature_request') selected @endif>Feature Request</option>
                                    <option value="improvement" @if(old('category') == 'improvement') selected @endif>Improvement</option>
                                </select>
                                @error('category')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
