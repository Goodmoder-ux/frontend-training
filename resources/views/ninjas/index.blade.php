<x-layout>
    <h2>Currently availables ninjas</h2>
    <ul>
        @foreach($ninjas as $ninja)
            <li>
                <p>{{$ninja["name"]}}</p>
                <a href="/ninjas/{{$ninja["id"]}}">View details</a>
            </li>
        @endforeach
    </ul>
    <a href="/">Go back!</a>
</x-layout>