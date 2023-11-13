@extends('layouts.template')
@section('title')

@section('header')
    @include('posts.components.header')
@endsection

@section('content')


    <!--slide in nav-->
    <div id="header" class="bg-white fixed w-full z-10 top-0 hidden animated" style="opacity: .95;">
        <div class="bg-white">
            <div class="flex flex-wrap items-center content-center">
                <div class="flex w-1/2 justify-start text-white font-extrabold">
                    <a class="flex text-gray-900 no-underline hover:text-gray-900 hover:no-underline pl-2" href="#">
                        👻 <span class="hidden w-0 md:w-auto md:block pl-1">Ghostwind CSS</span>
                    </a>
                </div>
                <div class="flex w-1/2 justify-end content-center">
                    <p class="hidden sm:block mr-3 text-center h-14 p-4 text-xs"><span class="pr-2">Share this</span> 👉
                    </p>
                    <a class="inline-block text-white no-underline hover:text-white hover:text-underline text-center h-10 w-10 p-2 md:h-auto md:w-16 md:p-4"
                        href="https://twitter.com/intent/tweet?url=#" style="background-color:#33b1ff;">
                        <svg class="fill-current text-white h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                            <path
                                d="M30.063 7.313c-.813 1.125-1.75 2.125-2.875 2.938v.75c0 1.563-.188 3.125-.688 4.625a15.088 15.088 0 0 1-2.063 4.438c-.875 1.438-2 2.688-3.25 3.813a15.015 15.015 0 0 1-4.625 2.563c-1.813.688-3.75 1-5.75 1-3.25 0-6.188-.875-8.875-2.625.438.063.875.125 1.375.125 2.688 0 5.063-.875 7.188-2.5-1.25 0-2.375-.375-3.375-1.125s-1.688-1.688-2.063-2.875c.438.063.813.125 1.125.125.5 0 1-.063 1.5-.25-1.313-.25-2.438-.938-3.313-1.938a5.673 5.673 0 0 1-1.313-3.688v-.063c.813.438 1.688.688 2.625.688a5.228 5.228 0 0 1-1.875-2c-.5-.875-.688-1.813-.688-2.75 0-1.063.25-2.063.75-2.938 1.438 1.75 3.188 3.188 5.25 4.25s4.313 1.688 6.688 1.813a5.579 5.579 0 0 1 1.5-5.438c1.125-1.125 2.5-1.688 4.125-1.688s3.063.625 4.188 1.813a11.48 11.48 0 0 0 3.688-1.375c-.438 1.375-1.313 2.438-2.563 3.188 1.125-.125 2.188-.438 3.313-.875z">
                            </path>
                        </svg>
                    </a>
                    <a class="inline-block text-white no-underline hover:text-white hover:text-underline text-center h-10 w-10 p-2 md:h-auto md:w-16 md:p-4"
                        href="https://www.facebook.com/sharer/sharer.php?u=#" style="background-color:#005e99">
                        <svg class="fill-current text-white h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                            <path d="M19 6h5V0h-5c-3.86 0-7 3.14-7 7v3H8v6h4v16h6V16h5l1-6h-6V7c0-.542.458-1 1-1z"></path>
                        </svg>
                    </a>
                </div>
            </div>

        </div>
        <!--Progress bar-->
        <div id="progress" class="h-1 bg-white shadow"
            style="background:linear-gradient(to right, #4dc0b5 var(--scroll), transparent 0);"></div>
    </div>


    <!--Title-->
    <div class="text-center pt-16 md:pt-32">
        <p class="text-sm md:text-base text-green-500 font-bold">{{ $post->created_at }}<span
                class="text-gray-900">/</span>{{ $post->categoria->nome }}</p>
        <h1 class="font-bold break-normal text-3xl md:text-5xl">{{ $post->titulo }}</h1>
    </div>

    <!--image-->

    @if ($post->image)
        <div class="container w-full max-w-6xl mx-auto bg-white bg-cover mt-8 rounded"
            style="background-image:url('{{ url('storage/' . $post->image) }}'); height: 75vh;"></div>
    @else
        <div class="container w-full max-w-6xl mx-auto bg-white bg-cover mt-8 rounded"
            style="background-image:url('https://source.unsplash.com/collection/1118905/'); height: 75vh;"></div>
    @endif

        <!--Container-->
        <div class="container max-w-5xl mx-auto -mt-32">

            <div class="mx-0 sm:mx-6">

                <div class="bg-white w-full p-8 md:p-24 text-xl md:text-2xl text-gray-800 leading-normal"
                    style="font-family:Georgia,serif;">

                    <!--Post Content-->


                    <!--Lead Para-->
                  @foreach ($post->descricao as $paragrafo)
                  <p class="text-2xl md:text-3xl mb-5">
                    {{ $paragrafo }}
                </p>
                  @endforeach

                    {{-- <p class="py-6">{{ $post->descricao }}</p> --}}

                    <blockquote class="border-l-4 border-green-500 italic my-8 pl-8 md:pl-12">Example of blockquote - Lorem
                        ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit
                        amet
                        ligula.</blockquote>


                    <!--/ Post Content-->
                    <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button
                            class="flex-1 mt-4 md:mt-0 block md:inline-block appearance-none bg-red-500 text-white text-base font-semibold tracking-wider uppercase py-4 rounded shadow hover:bg-red-400">Deletar</button>
                    </form>
                    <a href="{{ route('post.edit', $post->id) }}"
                        class="flex-1 mt-4 md:mt-0 block md:inline-block appearance-none bg-blue-500 text-white text-base font-semibold tracking-wider uppercase py-4 rounded shadow hover:bg-blue-400">Editar</a>

                </div>


                <!--Subscribe-->
                <div class="container font-sans bg-green-100 rounded mt-8 p-4 md:p-24 text-center">
                    <h2 class="font-bold break-normal text-2xl md:text-4xl">Subscribe to Ghostwind CSS</h2>
                    <h3 class="font-bold break-normal font-normal text-gray-600 text-base md:text-xl">Get the latest posts
                        delivered right to your inbox</h3>
                    <div class="w-full text-center pt-4">
                        <form action="#">
                            <div class="max-w-sm mx-auto p-1 pr-0 flex flex-wrap items-center">
                                <input type="email" placeholder="youremail@example.com"
                                    class="flex-1 appearance-none rounded shadow p-3 text-gray-600 mr-2 focus:outline-none">
                                <button type="submit"
                                    class="flex-1 mt-4 md:mt-0 block md:inline-block appearance-none bg-green-500 text-white text-base font-semibold tracking-wider uppercase py-4 rounded shadow hover:bg-green-400">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /Subscribe-->


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


            </div>

        </div>


        <!--   Scroll Top Button  -->
        <button class="btn-toggle-round scroll-top js-scroll-top" type="button" title="Scroll to top">
            <svg class="progress-circle" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-up" width="24"
                height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="cuurentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="18" y1="11" x2="12" y2="5" />
                <line x1="6" y1="11" x2="12" y2="5" />
            </svg>
        </button>

        <div class="bg-gray-200">

            <div class="container w-full max-w-6xl mx-auto px-2 py-8">
                <div class="flex flex-wrap -mx-2">
                    @foreach ($posts as $post)
                        <div class="w-full md:w-1/3 px-2 pb-12">
                            <div class="h-full bg-white rounded overflow-hidden shadow-md hover:shadow-lg relative smooth">
                                <a href="{{ route('post.show', $post->id) }}" class="no-underline hover:no-underline">
                                    <img src="https://source.unsplash.com/_AjqGGafofE/400x200"
                                        class="h-48 w-full rounded-t shadow-lg">
                                    <div class="p-6 h-auto md:h-48">
                                        <p class="text-gray-600 text-xs md:text-sm">{{ $post->categoria->nome }}</p>
                                        <div class="font-bold text-xl text-gray-900">{{ $post->titulo }}</div>
                                        <p class="text-gray-800 font-serif text-base mb-5">
                                            {{ $post->descricao[0] }}
                                        </p>
                                    </div>
                                    <div class="flex items-center justify-between inset-x-0 bottom-0 p-6">
                                        <img class="w-8 h-8 rounded-full mr-4" src="http://i.pravatar.cc/300"
                                            alt="Avatar of Author">
                                        <p class="text-gray-600 text-xs md:text-sm">2 MIN READ</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


        </div>
    @endsection

    @section('footer')
        @include('posts.components.footer')
    @endsection

    </body>

    </html>
