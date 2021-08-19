<div class="container">
    <h3 class="text-3xl"> Show Tweets</h3>

    <div class="w-full">
        <form method="post" wire:submit.prevent="create" class="bg-white shadow-md rounded w-full max-w-sm">
            @error('content')
            <p class="text-red-500">{{$message}}</p>
            @enderror
            <div class="flex items-center border-b border-teal-500 py-2 gap-1">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Tweet
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        type="text" name="content" id="content" wire:model="content" placeholder="Tweet">
                </div>
                <div class="mt-3">
                    <button
                        class="flex-shrink-0 border-transparent border-4 text-white bg-green-400 hover:text-teal-800 text-base py-1 px-2 rounded"
                        type="submit">
                        Criar Tweet
                    </button>
                </div>
            </div>

        </form>
    </div>
    <hr>
    @foreach ($tweets as $tweet)
    <p class="text-green-400 py-2 border-b">
        {{$tweet->user->name}} - {{$tweet->content}} -
        @if ($tweet->likes->count())
        <a href="">Descurtir</a>
        @else
        <a href="" class="font-boldsssssssssssss">Curtir</a>
        @endif
    </p>
    @endforeach
    <hr>
    {{$tweets->links()}}
</div>
