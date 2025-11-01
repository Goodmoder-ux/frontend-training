<x-layout>
    <h2>{{$ninja->name}}</h2>
    <div class="bg-gray-200 p-4 rounded"></div>
    <p><strong>Skill level: </strong>{{ $ninja->skill }}</p>
    <p>About me: {{ $ninja->bio }}</p>
</x-layout>