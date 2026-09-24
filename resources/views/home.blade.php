<x-layouts.base>

<body class="flex min-h-1/2 flex-col">

    <main class="mx-auto w-[95%] h-screen">

        <div class="flex flex-row  mt-2 ">
             <div>
                <img class="rounded-2xl mt-12" src="https://placehold.co/400x400" alt="placeholder image">
            </div>

            <div class="ml-10 w-3/4  flex flex-col">
                 <h1 class="  mt-10 font-bold text-xl ">Welcome to my website</h1>
                <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit animi iusto earum quam modi perferendis architecto aliquam a hic labore soluta, beatae, nisi tenetur recusandae possimus. Libero rem sed est? Lorem Lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque asperiores obcaecati, corrupti nesciunt illum explicabo voluptate adipisci harum fugiat, voluptates iure non amet? Sequi quis aperiam quidem aliquam necessitatibus rem!</p>
                 <a class=" flex justify-center mt-auto" href="{{ route('websites') }}"><button class="bg-blue-800 p-5 rounded-xl">see mij websites!</button></a>
            </div>
        </div>
        <div>
            <h1 class="mt-10 font-bold text-xl">about me</h1>
        </div>
        <div>
            <h1 class="mt-5 bg-blue-800 p-8 rounded-2xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit sint, atque, laboriosam cum consequatur id consequuntur officia, explicabo vero nemo rerum magni. Impedit vitae, voluptatibus perferendis maiores temporibus repudiandae eius!</h1>
        </div>
    </main>
</body>
</x-layouts.base>
