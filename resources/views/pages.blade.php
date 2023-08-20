<?php
    $html = Illuminate\Mail\Markdown::parse(file_get_contents('markdown/draft.md'))
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description"
              content="Improve your maths skills by taking private online maths lessons with a very good maths graduate,
               who will take you step by step through everything you need to get onto a good maths degree.">
        <title>Private Maths Tuition</title>
        <link rel="icon" type="image/x-icon" href="{{ url('favicon.ico') }}">

        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body class="antialiased">
    <header>
        <nav style="background: darkcyan">
            <a href="{{ url('/') }}">Home</a>
        </nav>
    </header>
    <main style="background: lightcyan">
        <article>
            <section>
            {{ $html }}
            </section>
        </article>
    </main>
    <footer>
        <nav style="background: darkcyan">
            <a href="{{ url('/') }}">Home</a>
        </nav>
    </footer>
    </body>
</html>
