<div>
   {{-- <form class="mt-6" wire:submit action="{{Route('livetest')}}" method="post">
        @csrf
--}}{{--{{$newComments}}--}}{{--
        <div class="w-96">
            <label for="comment" class="block text-sm text-gray-800">Comments</label>
            <input type="text" id="comment" name="comments" wire:model="newComments"
                   class="block w-full px-4 py-2 mt-2 text-purple-700 bg-white border rounded-md focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40">
        </div>

        <div class="w-96">

            <input type="submit" wire:click="addComments" id="submit" value="Add"
                   class="block w-full px-4 py-2 mt-2 text-white font-semibold bg-purple-700 border rounded-md focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40">
        </div>


    </form>--}}

    <div class="w-96">
        <label for="comment" class="block text-sm text-gray-800">Comments</label>
        <input type="text" id="comment" name="comments" wire:model="newComments"
               class="block w-full px-4 py-2 mt-2 text-purple-700 bg-white border rounded-md focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40">
    </div>

    <div class="w-96">

        <input type="submit" wire:click="addComments" id="submit" value="Add"
               class="block w-full px-4 py-2 mt-2 text-white font-semibold bg-purple-700 border rounded-md focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40">
    </div>

    <hr class="mt-6 w-100">

    <div class="mt-6 flex-wrap items-center justify-center">
        @foreach($comments as $comment)
        <div
            class="mt-3 space-x-2 rounded-xl border-2 border-purple-700 p-3 bg-amber-100 shadow-lg shadow-gray-500 text-left">
            <div class="rounded-xl"><span class="font-semibold">Comments : </span><span>{{$comment['body']}}</span>
            </div>
            <div class="rounded-xl"><span class="font-semibold">Created At : </span><span>{{$comment['created_at']}}</span></div>
            <div class="rounded-xl"><span class="font-semibold">Created by : </span><span>{{$comment['created_by']}}</span></div>

        </div>

        @endforeach
       {{-- <div
            class="mt-3 space-x-2 rounded-xl border-2 border-purple-700 p-3 bg-amber-100 shadow-lg shadow-gray-500 text-left">
            <div class="rounded-xl"><span class="font-semibold">Comments : </span><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, rerum!</span>
            </div>
            <div class="rounded-xl"><span class="font-semibold">Created At : </span><span>3 minutes Ago.</span></div>
            <div class="rounded-xl"><span class="font-semibold">Created by : </span><span>Md. Mintu Mia</span></div>

        </div>--}}

    </div>


    {{-- Do your work, then step back. --}}
</div>
