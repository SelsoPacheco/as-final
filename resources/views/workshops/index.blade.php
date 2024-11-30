
@foreach($workshops as $entity)
    <div>
    <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{asset($entity->image) }}" alt="{{$entity->name}}"/>
        <h3>{{ $entity->title }}</h3>
        <span>{{ $entity->location }}</span>
        <span>{{ $entity->description }}</span>
        <a href="{{ url('workshops/'.$entity->id.'/edit') }}">Edit</a>
        <form action="{{ url('workshops/'.$entity->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>

    @can('create',App\Models\Workshop::class)
    <div class="flex items-start">
        <div class="py-8 mb-5 p-20">
            <a href="{{url(path: 'workshops/create')}}"  class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Add Workshop</a>
        </div>
    </div>
@endcan

@endforeach