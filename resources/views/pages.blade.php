<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.head')
    <body class="antialiased">
    @include('layouts.nav-header', ['styles' => 'background: palegreen'])
    <main style="background: lightcyan">
        <article>
            <section id="home">
                {!! $post['slug'] !!}
                {!! $post['body'] !!}
            </section>
        </article>
    </main>
    @include('layouts.nav-footer', ['styles' => 'background: palegreen'])
    </body>
</html>
