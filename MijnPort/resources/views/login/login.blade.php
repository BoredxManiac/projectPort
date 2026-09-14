<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<x-header />

 <main class="mx-auto w-[75%] ">
        <div class=" flex flex-collumn justify-center h-screen items-center">

            <form class="bg-blue-300 ">
                <div class="">
                    <div class="flex items-top  gap-2 mt-2 mb-4">
                        <label for="fname">First name:</label>
                        <input type="text" id="fname" name="fname">
                    </div>
                    <div class="flex items-top gap-2 mt-4">
                        <label for="lname">Last name:</label>
                        <input type="text" id="lname" name="lname">
                    </div>
                    <div class="flex items-top  gap-6 mt-4">
                        <label for="opinions">opinion:</label>
                        <textarea id="" name="opinion" rows="4" cols="23">opinion</textarea>
                    </div>

                          <p>dont have an account?</p>
                    <a href="{{ route('register') }}">register</a>
            </form>

        </div>
    </main>


<x-footer />
</body>
</html>
