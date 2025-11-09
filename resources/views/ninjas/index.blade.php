<x-layout>
    <h2>Currently availables ninjas</h2>
    <ul>
        @foreach($ninjas as $ninja)
            <li>
                <x-card href="{{ route('ninjas.show', $ninja->id) }}" :highlight="$ninja->skill > 60">
                    <div>
                        <h3>{{$ninja->name}}</h3>
                        <p>{{$ninja->dojo->name}}</p>
                    </div>
                </x-card>
            </li>
        @endforeach
    </ul>
    <a class="btn" href="/">Go back!</a>

    {{ $ninjas->links() }}
</x-layout>