<!DOCTYPE html>
<html lang="en">
{{-- @if ($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif --}}
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
            <div class="bg-blue-300">
                <form action="{{ route('projects.store') }}" method="POST"  enctype="multipart/form-data">
                @csrf

                    <div class="flex items-top  gap-2 mt-2 mb-4">
                        <label for="title">title:</label>
                        <input type="text" name="title">
                    </div>
                    <div class="flex items-top gap-2 mt-4">
                        <label for="image">images</label>
                        <input type="file" name="image">
                    </div>
                    <div class="flex items-top  gap-6 mt-4">
                        <label for="description">description:</label>
                        <textarea name="description" rows="4" cols="23">description</textarea>
                    </div>

                    <div class="flex items-top  gap-6 mt-4">
                        <input type="submit" value="submit">
                    </div>

            </form>
            </div>
        </div>
    </main>


    <x-footer />
</body>

</html>
