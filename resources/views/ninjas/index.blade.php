<x-layout>
    <h2>Currently availables ninjas</h2>
    <ul>
        @foreach($ninjas as $ninja)
            <li>
                <x-card href="/ninjas/{{ $ninja['id'] }}" :highlight="$ninja['skill'] > 60">
                    <h3>{{$ninja['name']}}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>
    <a href="/">Go back!</a>
</x-layout>