<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.head')
    <body class="antialiased bg-cyan-100">
    @include('layouts.nav-header', ['styles' => 'background: palegreen'])
    <main class="w-[90vw] md:w-[80vw] lg:w-[70vw] xl:w-[60vw] min-h-[75vh] mx-auto">
        <article class="prose prose-lg prose-p prose-h1:text-blue-600 prose-h2:text-green-600">
            {!! $post['slug'] !!}
            {!! $post['body'] !!}
        </article>
    </main>
    @include('layouts.nav-footer', ['styles' => 'background: palegreen'])
    </body>
</html>
