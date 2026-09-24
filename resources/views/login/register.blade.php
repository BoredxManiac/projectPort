<x-layouts.base>

    <body>


        <main class="mx-auto w-[75%] ">
            <div class=" flex flex-collumn justify-center h-screen items-center">

                <form class="p-4 bg-blue-300 " action="{{ route('register') }}" method="POST">
                    <div class="bg-blue-800 p-10 rounded-2xl">
                        @csrf
                        <div>
                            <div class="flex items-top  gap-2 mt-2 mb-4">
                                <label for="name">name:</label>
                                <input type="text" name="name">
                            </div>
                            <div class="flex items-top gap-2 mt-4">
                                <label for="email">email:</label>
                                <input type="email" name="email">
                            </div>
                            <div class="flex items-top  gap-6 mt-4">
                                <label for="password">password:</label>
                                <input type="password" name="password">
                            </div>

                            <div class="flex items-top  gap-6 mt-4">
                                <label for="password_confirmation">password confirmation:</label>
                                <input type="password" name="password_confirmation">
                            </div>
                        </div>
                    </div>
                         <div class="p-8 text-center">
                            <div>
                                <input class="bg-red-500 p-5 rounded-2xl" type="submit" value="submit">
                            </div>
                         </div>
                          <p class="text-gray-700">already have an account?</p>
                         <a class="text-gray-600" href="{{ route('login') }}">login</a>
                </form>
            </div>
        </main>
    </body>
</x-layouts.base>
