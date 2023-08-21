<footer>
    <nav {!! isset($styles) ? 'style="'.$styles.'"' : null !!}>
        <a href="/#home">Home</a>
        <a href="/#maths">Maths</a>
        <a href="/#who-are-you">Who are you?</a>
        <a href="/#how-we-teach">How we teach?</a>
        <a href="/#call-me">Call me!</a>
        <a href="{{ url('pages') }}">Post</a>
        <a href="{{ url('homepage') }}">List of Posts</a>
    </nav>
</footer>
