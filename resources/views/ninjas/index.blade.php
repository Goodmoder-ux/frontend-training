<x-layout>
    
    <ul>
        @foreach($ninjas as $ninja)
            <li>
                <x-card href="{{ route('ninjas.show', $ninja->id) }}" :highlight="$ninja->skill > 60">
                    <h3>{{$ninja->name}}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>
    <a class="btn" href="/">Go back!</a>
</x-layout>