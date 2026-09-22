<x-layouts.base>

<body class="flex min-h-1/2 flex-col">

    <main class="mx-auto w-[95%]">
        <h1 class="text-center  mt-10 ">Welcome to my website</h1>
        <div class="flex flex-row h-screen mt-2 items-center ">
             <div>
                <img class="rounded-2xl" src="https://placehold.co/800x800" alt="placeholder image">
            </div>

            <div class="ml-10 w-3/4 h-1/2 flex flex-col">
                  <a class=" flex justify-center mt-10" href="{{ route('websites') }}"><button>see mij websites!</button></a>
                <p class="mt-auto">Welcome to mij portfolio website!</p>
            </div>
        </div>
    </main>
</body>
</x-layouts.base>
