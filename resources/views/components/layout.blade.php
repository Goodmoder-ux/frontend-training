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
        <nav>
            <h1>Goodmoder Network</h1>
            <a class="btn" href="/ninjas">All ninjas</a>
            <a class="btn" href="/ninjas/create">Create ninjas</a>
        </nav>
    </header>
    <main class="container">
        {{$slot}}
    </main>
</body>
</html>