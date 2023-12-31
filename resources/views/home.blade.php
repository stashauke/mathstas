<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.head')
    <body class="antialiased">
    @include('layouts.nav-header', ['styles' => 'background: lightskyblue'])
    <main class="bg-slate-300 w-[90vw] md:w-[80vw] lg:w-[70vw] xl:w-[60vw] min-h-[75vh] mx-auto">
        <article class="bg-blue-100 prose max-w-none prose-lg prose-p prose-h1:text-blue-600 prose-h2:text-green-600">
            <header id="home">
                <h1>Do you want to study mathematics at Cambridge?</h1>
            </header>
            <section id="maths">
                <h2>What&apos;s there for you?</h2>
                <h3>Do you want to study mathematics in university?</h3>
                <p>Mathematics students.
                    We are very diverse, from those interested in Pure Mathematics, through those
                    focusing on Statistics all the way to Applied Mathematicians, we come from different countries and
                    continents, UK, Eastern Europe, Asia and more; but the one thing we have in common is our passion for
                    that subject and the very similar way we got hooked on maths.</p>
                <h3>More about Olympiads</h3>
                <p>Not during math
                    classes, but after them when working on extra problem sets that would prepare us for our
                    first competitions. From there we picked up on Olympiads, small research projects, took part in summer
                    math camps and by the time we were to take entry exams &ndash; we were somewhat prepared.</p>
            </section>
            <section id="who-are-you">
                <h2>Competitions and More</h2>
                <h3>Maths competitions</h3>
                <p>
                    Good place to start examples include Kangaroo? and Mat?, participating will develop &ndash; [more text to
                    come]
                </p>
                <p>
                    Examples:
                </p>
                <h3>Olympiads</h3>
                <p>
                    You have to stretch you mathematical out-side of the box thinking, as questions are no longer closed
                    form. You need to write down your proof which usually is an abstract proof, which may be intimidating at
                    the beginning but highly addictive after a while. If you are lucky, your country is offering a Junior
                    Olympiad, if not, you will have to enter start with Senior Olympiad and the effort might be rewarded
                    with you representing your country on at an international Olympiad
                </p>
                <p>
                    Examples
                </p>
                <ul>
                    <li>Junior Olympiads</li>
                    <li>Senior Olympiads</li>
                    <li>International Olympiads</li>
                </ul>
                <h3>Research projects</h3>
                <p>
                    Here you can unleash your true unlimited creativity, a paper has to be written on a subject not studied
                    before, not only do you have to solve a hard problem, but you have to find one first! Once accepted a
                    poster or a presentation will be necessary for the finals.
                </p>
                <h3>Maths Camps</h3>
                <p>
                    If that&apos;s not enough for you and you want to spend your summer doing maths, apply for one of those. You
                    will get to meet peers as excited about maths as you from other countries, probably some big-fish fields
                    awarded mathematician or top professor in a given field will be around to give a guest lecture. Math
                    matches (it&apos;s more fun than it sounds, trust me!), year long undergraduate course lectured in four
                    hours, proof of a problem that remained opened for 300 years presented on a t-shirt, countless lectures
                    and problem sets inspiring you to study maths and that&apos;s not everything. Non-maths activities can
                    include but are not limited to day trips, puzzle hunts, sports: frisbee, football, volleyball, you name
                    it, hikes and more. You can also have your own lectures.
                </p>
                <p>
                    Examples:
                </p>
                <ul>
                    <li>Promys</li>
                    <li>MathCamp</li>
                    <li>MBL</li>
                </ul>
                <h3>Oxford and Cambridge</h3>
                <p>
                    By now STEP, MAT or TMUA will be formality for you.
                </p>
            </section>
            <section id="how-we-teach">
                <h2>How will you be taught?</h2>
                <h3>Junior Olympiads</h3>
                <p>
                    Since highschool I was preparing students for Junior Math Olympiads [that&apos;s how it worked in my school
                    back in Poland, I was tought by my older peers, to give back the favour, I would conduct extra classes
                    for my younger peers] and through that journey I gathered a lot of study materials and a lot of
                    materials have been also created.
                </p>
                <h3>What are lessons like?</h3>
                <p>
                    Lesson consists of content lectured by me with theorem and ideas presented. Then I give carefully
                    selected problem set with questions in that subject. The student then goes through the questions in his
                    own time [most important part of learning!] and then we discuss their questions and solutions. Hints are
                    available for questions and can be shared between lessons if needed.
                </p>
            </section>
            <section id="call-me">
                <h2>Get in touch!</h2>
                <h3>Here are my contact details:</h3>
                <p>
                    Tel: 525252525
                </p>
                <p>
                    Email: stas@stas.com
                </p>
                <h3>Why work with a maths graduate?</h3>
                <p>
                    I am a dedicated math student with skills and experience teaching mathematics to high school students.
                    There are several reasons why high school students should work with a math graduate. Firstly, an
                    in-depth knowledge of mathematics is necessary, thanks to rigorous coursework and countless hours spent
                    delving into complex mathematical concepts, a maths graduate knows what is needed. A maths graduate has
                    expertise across various branches of math, which is needed to simplify difficult topics and present them
                    in an engaging and comprehensible manner. Choosing to work with a maths graduate would be a rewarding
                    experience for high school students.
                </p>
                <h3>About me</h3>
                <p>
                    About me: I am a part III mathematics student at Cambridge University and I have been through the
                    journey described above, I have taken part in Polish Math Olympiads and become a Laurate numerous times
                    and as a reward I got the opportunity to represent Poland in St Petersburg, Slovakia and Vietnam. My
                    research project [link here] took part in EUCYS and Delta, I took part in PROMYS 2019 and PROMYS 2020,
                    as well as MBL 2018 and MBL 2020, I haven&apos;t been to MathCamp, but heard only great things about it. And
                    by the time I had to sit my STEP exam for Cambridge I got the above required grade (double S).
                </p>
            </section>
{{--            <footer class="bg-red-200">--}}
{{--                <hr>--}}
{{--                <p>This is the content footer</p>--}}
{{--            </footer>--}}
        </article>
    </main>
    @include('layouts.nav-footer', ['styles' => 'background: lightskyblue'])
    </body>
</html>
