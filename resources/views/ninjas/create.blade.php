<x-layout>
    <form action="{{route('ninjas.store')}}" method="POST">
        @csrf
        <h2>Create a New Ninja</h2>

        <label for="name">Ninja Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="skill">Ninja Skill (1-100):</label>
        <input type="number" id="skill" name="skill" required>

        <label for="bio">Biography:</label>
        <textarea name="bio" rows="5"  id="bio" required></textarea>

        <label for="dojo_id">Dojo:</label>
        <select name="dojo_id" id="dojo_id">
            <option value=""  disabled selected required>Select a dojo</option>
            @foreach($dojos as $dojo)
                <option value="{{$dojo->id}}">{{$dojo ->name}}</option>
            @endforeach
        </select>

        <button type="submit" class="btn">Create Ninja</button>
        @if($errors->all())
            <ul class="px-4 py-2 bg-red-100">
                @foreach ($errors->all() as $error)
                    <li class="my-2 text-res-500">{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </form>
</x-layout>