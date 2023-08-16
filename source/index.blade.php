@extends('_layouts.main')

@section('body')
    <section class="w-screen h-screen max-w-screen max-h-screen" id="section1">
        @include('_partials.header')

        <div class="absolute w-full h-full">
            <video autoplay muted loop draggable="false" id="heroVideo"
                   class="absolute w-screen h-full object-cover filter blur"
                   src="assets/videos/hero.mp4"></video>
            <div class="relative w-screen h-screen filter backdrop-brightness-50"></div>
        </div>

        <div class="relative w-screen h-screen flex flex-col space-y-2 justify-center items-center">
            <h1 class="text-7xl">
                SIMILAR
            </h1>
            <p>
                an album by eleventwelfth
            </p>

            <div class="flex space-x-5 justify-center items-center text-xl pt-4">
                <a href="https://www.tokopedia.com/angularmomentum/etalase/eleventwelfth" target="_blank"
                   class="hover:text-white transition-all">
                    Purchase
                </a>

                <a href="https://open.spotify.com/" target="_blank" class="hover:text-white transition-all">
                    Stream
                </a>
            </div>
        </div>
    </section>

    <section id="section2" class="w-screen">
        <div class="flex flex-col md:flex-row md:justify-between">
            <div class="flex flex-col justify-center items-center space-y-2 text-center py-12 px-24 2xl:px-64 md:w-1/2 text-sm">
                <p>
                    after 6 years of actively releasing music, at long last, our first full length.
                </p>
                <p>
                    this is not just a collection of songs, this is something that we've thought of very heavily on how to
                    make these songs feel cohesive.
                </p>
                <p>
                    listen to SIMILAR in two different ways, in reversible order.
                    back-to-front, from track 1 to 11, or front-to-back, from track 11 to 1.
                </p>

                <p>
                    no skip. no shuffle. experience the whole.
                </p>
            </div>

            <div class="flex flex-col justify-center items-center md:w-1/2">
                <img src="assets/images/artist-image-01.jpg" alt="The band">
            </div>
        </div>
    </section>

    {{--    <div class="mx-auto max-w-7xl p-8">--}}

    {{--    </div>--}}
@endsection