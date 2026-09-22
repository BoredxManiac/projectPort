<x-layouts.base>

    <body class="flex min-h-1/2 flex-col">

        <main>

            <div>
                <h1 class="text-center mt-5 mb-5 ">WELCOMEEEEE</h1>
                <a href="{{ route('projects.create') }}">create</a>
            </div>
            <div class="flex flex-row">
                <div class="w-[30%]">
                    <p>lalalall</p>
                </div>
                <div class="grid grid-cols-3 w-full gap-4">

                        <div>
                            <img src="{{ asset('storage/images/' . $website->image) }}" alt="">
                            <h1 class="font-bold">{{ $website->title }}</h1>
                            <p class="p-6">{{ $website->description }}</p>
                            <a href="{{ route('websites') }}">go back</a>
                        </div>
                </div>
        </main>

    </body>
</x-layouts.base>
