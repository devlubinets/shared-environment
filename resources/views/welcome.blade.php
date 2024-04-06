@php use App\Models\Env; @endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MVP function page</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">

@auth()
    {{  $this->authUser  }}
@endauth
<main class="mt-6">
    <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
        {{--ADD BUTTON TO LOAD .ENV FILE--}}
        <form action="{{ route("envs.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="env_file" id="env_file">
            <button type="submit">
                Upload
            </button>
        </form>
        {{--SHOW ALL FILES ENV--}}
        <?php $envs = Env::all() ?>
        <ul>
            @foreach($envs as $env)
                <li>
                    {{ $env["file_name"] }} - {{ $env["file_size"] }} - {{ $env["created_at"] }}
                </li>
            @endforeach
        </ul>
    </div>
</main>

<footer class="py-16 text-center text-sm text-black dark:text-white/70">
    Tech stack information:
    <ul>
        <li>Laravel {{ Illuminate\Foundation\Application::VERSION }}</li>
        <li>PHP v{{ PHP_VERSION }}</li>
    </ul>
</footer>
</div>
</div>
</div>
</body>
</html>
