<form action="{{ url('workshops/'.$workshop->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="text" name="title" placeholder="Title" value="{{ $workshop->title }}" required>
    <input type="text" name="location" placeholder="Location" value="{{ $workshop->lotation }}" required>
    <input type="text" name="description" placeholder="Description" value="{{ $workshop->description }}" required>

    <div class="mb-5">
            <img src="{{ asset($workshop->image) }}" alt="{{$workshop->name}}">
            <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
            <input type="file" name="image" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>

    <button type="submit">Edit Workshop</button>
</form>