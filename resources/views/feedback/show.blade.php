<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex justify-between items-center">
            {{ __('Feedback Details') }}
            <a href="{{ route('feedback.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white text-sm font-bold py-1 px-2 rounded">Back to Feedback List</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="overflow-x-auto">
                        <div class="bg-gray- p-4 rounded-md">
                            <div class="mb-4">
                                <h2 class="text-2xl font-semibold">{{ $feedback->title }}</h2>
                            </div>
                            <div class="mb-4">
                                <p class="text-lg"><strong>Description:</strong> {{ $feedback->description }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-lg"><strong>Category:</strong> {{ $feedback->category }}</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-lg"><strong>User:</strong> {{ $feedback->user->name }}</p>
                            </div>
                        </div>
                        <div class="bg-gray-100 p-4 rounded-md">
                            <div class="mb-4" style="border-bottom:1px solid #fff;">
                                <h2 class="text-2xl font-semibold">Replies</h2>
                            </div>
                            @forelse ($feedback->replies as  $reply)
                                <div class="mb-4" style="border-bottom:1px solid #fff; padding-left:15px">
                                    <p class="text-lg">- {{ $reply->response }} :- <strong style="color: #bfbfbf;">{{ $reply->user->name }}</strong></p>
                                </div>
                            @empty
                                <div class="mb-4" style="border-bottom:1px solid #fff; padding-left:15px">
                                    <p class="text-lg">No reply found!</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
