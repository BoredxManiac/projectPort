<x-layouts.base>
<body>


 <main class="mx-auto w-[75%] ">
        <div class=" flex flex-collumn justify-center h-screen items-center">

            <form class="bg-blue-300 " action="{{ route('projects.store') }}" method="POST">
                @csrf
                <div class="">
                    <div class="flex items-top  gap-2 mt-2 mb-4">
                        <label for="user">user:</label>
                        <input type="text" name="user">
                    </div>
                    <div class="flex items-top gap-2 mt-4">
                        <label for="email">Email:</label>
                        <input type="email" name="email">
                    </div>
                    <div class="flex items-top  gap-6 mt-4">
                        <label for="password">password:</label>
                        <input type="password"  name="password">
                    </div>

                    <div><input type="submit" value="submit"></div>
                          <p>dont have an account?</p>
                    <a href="{{ route('register') }}">register</a>
            </form>

        </div>
    </main>



</body>
</x-layouts.base>
