<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.head')
    <body class="antialiased">
    @include('layouts.nav-header', ['styles' => 'background: palegoldenrod'])
    <main class="w-[90vw] md:w-[80vw] lg:w-[70vw] xl:w-[60vw] min-h-[75vh] mx-auto">
        <article>
            <hr class="border-2 border-red-500 my-10">
            @foreach($posts as $post)
            <section>
                <div class="flex flex-row">
                    <dt class="w-32">File name:</dt>
                    <dd>{!! $post['slug'] !!}</dd>
                </div>
                @if(!empty($post['fields']))
                    <hr class="border-1 border-green-500 my-10">
                    <div class="flex flex-col">
                    @foreach($post['fields'] as $key => $value)
                        <div class="flex">
                            <dt class="w-32">{{ $key }}:</dt>
                            <dd>{{ $value }}</dd>
                        </div>
                    @endforeach
                    </div>
                    <hr class="border-2 border-red-500 my-10">
                @endif
            </section>
            @endforeach
        </article>
        <hr class="border-2 border-red-500 my-10">
    </main>
    @include('layouts.nav-footer', ['styles' => 'background: palegoldenrod'])
    </body>
</html>
