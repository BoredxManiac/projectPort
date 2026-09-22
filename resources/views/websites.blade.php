<x-layouts.base>

    <body class="flex min-h-1/2 flex-col">

        <main>

            <div>
                <h1 class="text-center mt-5 mb-5 ">WELCOMEEEEE</h1>
                <a class="bg-green-600 p-2 mb-8 ml-7 rounded-2xl text-xl  hover:bg-green-400" href="{{ route('projects.create') }}">create</a>
            </div>
            <div class="flex flex-row">
                <div class="w-[30%] bg-[#FAC05E] mt-6 mr-7 ml-5 rounded-xl h-40 text-xl ">
                    <ul class="p-5">
                    <li class="mb-5 hover:text-white"><a href="{{ route('websites',['filter' => 'Web']) }}">Web</a></li>
                      <li class="hover:text-blue-900"><a href="{{ route('websites',['filter' => 'Native']) }}">Native</a></li>
                      <li class="hover:text-blue-900"><a href="{{ route('websites',['filter' => '']) }}">All</a></li>
                      </ul>
                </div>
                <div class="grid grid-cols-3 w-full gap-4 bg-[#EE6352] p-8 mr-4 rounded-xl">
                    @foreach ($websites as $website)
                        <div class="bg-red-200 text-center flex flex-col items-center p-5 rounded-xl">
                            <img class="w-48 h-48 object-cover object-center" src="{{ asset('storage/images/' . $website->image) }}" alt="">
                            <h3>{{ $website->title }}</h3>
                            <form action="{{ route('projects.destroy', $website->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <input type="submit" value="delete">
                            </form>
                             <a href="{{ route('projects.edit', $website->id) }}">update</a>
                            <a href="{{ route('projects.show', $website->id) }}">show</a>
                        </div>
                    @endforeach
                </div>

                {{-- <

        <div class="grid  grid-rows-[repeat (3, 5px)] grid-cols-[repeat(3,auto)] w-full ">
            <div class="">
                <img src="https://placehold.co/200x200" alt="">
                <p>now</p>
            </div>
             <div>
                <img src="https://placehold.co/200x200" alt="">
                <p>now</p>
            </div>
             <div>
                <img src="https://placehold.co/200x200" alt="">
                <p>now</p>
            </div>
            <div>
                <img src="https://placehold.co/200x200" alt="">
                <p>now</p>
            </div>
        </div>
          </div> --}}
        </main>

    </body>
</x-layouts.base>
