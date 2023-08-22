<header>
    <nav {!! isset($styles) ? 'style="'.$styles.'"' : null !!}>
        <div style="width:8vw; height:8vh; fill-opacity:0;">
            <svg width="50" height="50" viewBox="-20 -20 220 220">
                <path d="M -15 -15 L -15 182 L 182 182 L 182 -15 L -15 -15 Z" fill-opacity="1" fill="yellow" stroke="black" stroke-width="5">
                </path>
                <path d="M 0 0 L 0 96 L 96 96 L 96 0 L 0 0 Z" stroke="teal" stroke-width="24">       </path>
                <path d="M 0 72 L 0 168 L 96 168 L 96 72 L 0 72 Z" stroke="blue" stroke-width="24">       </path>
                <path d="M 72 72 L 72 168 L 168 168 L 168 72 L 72 72 Z" stroke="crimson" stroke-width="24">       </path>
                <path d="M 72 0 L 72 96 L 168 96 L 168 0 L 72 0 Z" stroke="cyan" stroke-width="24">       </path>
                <path d="M 0 59 L 0 84 Z" stroke="teal" stroke-width="24">
                </path>
                <path d="M 72 84 L 72 108 Z" stroke="teal" stroke-width="24">
                </path>
                <path d="M 71 -12 L 71 12 Z" stroke="teal" stroke-width="24">
                </path>
                <path d="M 96 84 L 96 109 Z" stroke="blue" stroke-width="24">
                </path>
                <path d="M 168 84 L 168 109 Z" stroke="crimson" stroke-width="24">
                </path>
                <path d="M 72 156 L 72 180 Z" stroke="blue" stroke-width="24">
                </path>
            </svg>
        </div>
        <a href="/#home">Home</a>
        <a href="/#maths">Maths</a>
        <a href="/#who-are-you">Who are you?</a>
        <a href="/#how-we-teach">How we teach?</a>
        <a href="/#call-me">Call me!</a>
        <a href="{{ url('pages') }}">Post</a>
        <a href="{{ url('homepage') }}">List of Posts</a>
    </nav>
</header>
