<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.head')
    <body class="antialiased">
    @include('layouts.nav-header', ['styles' => 'background: palegoldenrod'])
    <main style="background: lightcyan">
        <article>
            @foreach($posts as $post)
            <section>
                @if(!empty($post['fields']))
                    @foreach($post['fields'] as $key => $value)
                        <dt>{{ $key }}</dt>
                        <dd>{{ $value }}</dd>
                    @endforeach
                @endif
                {!! $post['slug'] !!}
            </section>
            @endforeach
        </article>
    </main>
    @include('layouts.nav-footer', ['styles' => 'background: palegoldenrod'])
    </body>
</html>
