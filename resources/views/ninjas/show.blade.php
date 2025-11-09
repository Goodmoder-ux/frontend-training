<x-layout>
    <h2>{{$ninja->name}}</h2>
    <div class="bg-gray-200 p-4 rounded"></div>
    <p><strong>Skill level: </strong>{{ $ninja->skill }}</p>
    <p>About me: {{ $ninja->bio }}</p>

    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
        <h3>Dojo inforrmation: </h3>
        <p><strong>Dogo name: </strong>{{$ninja->dojo->name}}</p>
        <p><strong>Dogo location: </strong>{{$ninja->dojo->location}}</p>
        <p><strong>Dogo description: </strong>{{$ninja->dojo->description}}</p>
    </div>

    <form action="{{ route('ninjas.destroy', $ninja->id) }}" method="POST">
        @csrf

        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</x-layout>