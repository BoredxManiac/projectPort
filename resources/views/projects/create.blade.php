<x-layouts.base>

<body>


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

                     <div class="flex items-top  gap-2 mt-2 mb-4">
                                     <label for="filter">filters:</label>
                                     <select name="filter" id="filter">
                                        <option value="web">Web</option>
                                         <option value="native">Native</option>
                                     </select>


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



</body>

</x-layouts.base>
