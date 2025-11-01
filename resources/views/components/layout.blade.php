<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goodmoder Network</title>

    @vite('resources/css/app.css')

</head>
<body>
    <header>
        <div class="header__container">
            <h1>Goodmoder Network</h1>
            <nav>
                <a class="btn" href="{{ route('ninjas.index') }}">All ninjas</a>
                <a class="btn" href="{{ route('ninjas.create') }}">Create ninjas</a>
            </nav>
        </div>
    </header>
    <main class="main__container">
        <div class="ninjas">
            <h2>Currently availables ninjas</h2>
            {{$slot}}
        </div>
        
    </main>
</body>
</html>