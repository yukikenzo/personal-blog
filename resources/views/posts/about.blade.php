@extends('layouts.template')
@section('title')

@section('header')
    @include('posts.components.header')
@endsection

@section('content')

    <!--Progress bar-->
    <div id="progress" class="h-1 bg-white shadow"
        style="background:linear-gradient(to right, #4dc0b5 var(--scroll), transparent 0);"></div>
    </div>


    <!--Title-->
    <div class="text-center pt-16 md:pt-32">
        <p class="text-sm md:text-base text-green-500 font-bold">04 JULY 2023 <span class="text-gray-900">/</span> GETTING
            STARTED</p>
        <h1 class="font-bold break-normal text-3xl md:text-5xl">About</h1>
    </div>

    <!--image-->
    <div class="container w-full max-w-6xl mx-auto bg-white bg-cover mt-8 rounded"
        style="background-image:url('https://source.unsplash.com/collection/1118905/'); height: 75vh;"></div>

    <!--Container-->
    <div class="container max-w-5xl mx-auto -mt-32">

        <div class="mx-0 sm:mx-6">

            <div class="bg-white w-full p-8 md:p-24 text-xl md:text-2xl text-gray-800 leading-normal"
                style="font-family:Georgia,serif;">

                <!--Post Content-->


                <!--Lead Para-->
                <p class="text-2xl md:text-3xl mb-5">
                    👋 Welcome fellow <a class="text-gray-800 hover:text-green-500 no-underline border-b-2 border-green-500"
                        href="https://www.tailwindcss.com">Tailwind CSS</a> and <a
                        class="text-gray-800 hover:text-green-500 no-underline border-b-2 border-green-500"
                        href="https://www.ghost.org">Ghost</a> fan. This starter template is an attempt to replicate the
                    default Ghost theme <a
                        class="text-gray-800 hover:text-green-500 no-underline border-b-2 border-green-500"
                        href="https://demo.ghost.io/welcome">"Casper"</a> using Tailwind CSS and vanilla Javascript.
                </p>
                <!--Author-->
                <div class="flex w-full items-center font-sans p-8 md:p-24">
                    <img class="w-10 h-10 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of Author">
                    <div class="flex-1">
                        <p class="text-base font-bold text-base md:text-xl leading-none">Ghostwind CSS</p>
                        <p class="text-gray-600 text-xs md:text-base">Tailwind CSS version of Ghost's Casper theme by <a
                                class="text-gray-800 hover:text-green-500 no-underline border-b-2 border-green-500"
                                href="https://www.tailwindtoolbox.com">TailwindToolbox.com</a></p>
                    </div>
                    <div class="justify-end">

                    </div>
                    <!--/Author-->

                </div>
                <p class="py-6">The basic blog page layout is available and all using the default Tailwind CSS classes
                    (although there are a few hardcoded style tags). If you are going to use this in your project, you will
                    want to convert the classes into components.</p>

                <p class="py-6">Sed dignissim lectus ut tincidunt vulputate. Fusce tincidunt lacus purus, in mattis tortor
                    sollicitudin pretium. Phasellus at diam posuere, scelerisque nisl sit amet, tincidunt urna. Cras nisi
                    diam, pulvinar ut molestie eget, eleifend ac magna. Sed at lorem condimentum, dignissim lorem eu,
                    blandit massa. Phasellus eleifend turpis vel erat bibendum scelerisque. Maecenas id risus dictum,
                    rhoncus odio vitae, maximus purus. Etiam efficitur dolor in dolor molestie ornare. Aenean pulvinar diam
                    nec neque tincidunt, vitae molestie quam fermentum. Donec ac pretium diam. Suspendisse sed odio risus.
                    Nunc nec luctus nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                    himenaeos. Duis nec nulla eget sem dictum elementum.</p>

                <ol>
                    <li class="py-3">Maecenas accumsan lacus sit amet elementum porta. Aliquam eu libero lectus. Fusce
                        vehicula dictum mi. In non dolor at sem ullamcorper venenatis ut sed dui. Ut ut est quam.
                        Suspendisse quam quam, commodo sit amet placerat in, interdum a ipsum. Morbi sit amet tellus
                        scelerisque tortor semper posuere.</li>
                    <li class="py-3">Morbi varius posuere blandit. Praesent gravida bibendum neque eget commodo. Duis
                        auctor ornare mauris, eu accumsan odio viverra in. Proin sagittis maximus pharetra. Nullam lorem
                        mauris, faucibus ut odio tempus, ultrices aliquet ex. Nam id quam eget ipsum luctus hendrerit. Ut
                        eros magna, eleifend ac ornare vulputate, pretium nec felis.</li>
                    <li class="py-3">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                        Curae; Nunc vitae pretium elit. Cras leo mauris, tristique in risus ac, tristique rutrum velit.
                        Mauris accumsan tempor felis vitae gravida. Cras egestas convallis malesuada. Etiam ac ante id
                        tortor vulputate pretium. Maecenas vel sapien suscipit, elementum odio et, consequat tellus.</li>
                </ol>


                <!--/ Post Content-->

            </div>
        </div>

    </div>


    <!--   Scroll Top Button  -->
    <button class="btn-toggle-round scroll-top js-scroll-top" type="button" title="Scroll to top">
        <svg class="progress-circle" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-up" width="24" height="24"
            viewBox="0 0 24 24" stroke-width="1.5" stroke="cuurentColor" fill="none" stroke-linecap="round"
            stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <line x1="12" y1="5" x2="12" y2="19" />
            <line x1="18" y1="11" x2="12" y2="5" />
            <line x1="6" y1="11" x2="12" y2="5" />
        </svg>
    </button>


@endsection

@section('footer')

    @include('posts.components.footer')

@endsection
