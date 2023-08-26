<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.head')
    <body class="antialiased">
    @include('layouts.nav-header', ['styles' => 'background: palegreen'])
    <main class="w-[90vw] md:w-[80vw] lg:w-[70vw] xl:w-[60vw] min-h-[75vh] mx-auto font-serif">
        <article class="prose bg-white max-w-none prose-sm md:prose-md lg:prose-lg prose-h1:text-black prose-h2:text-black">
            {!! $post['body'] !!}
        </article>
    </main>
    @include('layouts.nav-footer', ['styles' => 'background: palegreen'])
    </body>
</html>
