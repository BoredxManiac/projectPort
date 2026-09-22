<x-layouts.base>

    <body>


        <main class="mx-auto w-[75%] ">
            <div class=" flex flex-collumn justify-center h-screen items-center">

                    <form class="bg-blue-300 " action="{{ route('projects.update', $website->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="">
                            <div class="flex items-top  gap-2 mt-2 mb-4">
                                <label for="title">Title:</label>
                                <input type="text" name="title" value="{{$website->title}}">
                            </div>
                            <div class="flex items-top gap-2 mt-4">
                                <label for="image">Image:</label>
                                <input type="file" name="image" value="{{$website->image}}">
                            </div>
                               <div class="flex items-top  gap-2 mt-2 mb-4">
                                     <label for="filter">filters:</label>
                                     <select name="filter" id="filter">
                                        <option value="web">Web</option>
                                         <option value="native">Native</option>
                                     </select>


                            </div>
                            <div class="flex items-top  gap-6 mt-4">
                                <label for="description">Description:</label>
                                <textarea name="description" rows="4" cols="23" value="{{$website->description}}"></textarea>
                            </div>
                            <div class="flex items-top  gap-6 mt-4">
                                <input type="submit" value="submit">
                            </div>
                    </form>

            </div>
        </main>



    </body>
</x-layouts.base>
