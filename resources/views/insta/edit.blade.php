<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="w-full">
                        <h2 class="card-title">{{ $instapp->title }}</h2>
                        <form action="{{ route('instapp.update', $instapp->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <textarea name="title" class="input input-bordered form-control @error('tile') is-invalid @enderror" id="" cols="130" rows="10" placeholder="Type Something..."></textarea>
                            @error('title')
                                <span class="invalid-feedback text-red-400">{{ $message }} </span>
                            @enderror
                            <br>
                            <input type="submit" class="btn btn-primary" value="Tweet">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
