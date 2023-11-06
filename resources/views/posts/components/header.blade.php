<!--Nav-->
<nav class="bg-gray-900 p-4 mt-0 w-full">
    <div class="container mx-auto flex items-center">
        <div class="flex text-white font-extrabold">
            <a class="flex text-white text-base no-underline hover:text-white hover:no-underline" href="#">
                👻 <span class="hidden w-0 md:w-auto md:block pl-1">Ghostwind CSS</span>
            </a>
        </div>
        <div class="flex pl-4 text-sm">
            <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
              <li class="mr-2">
                <a class="inline-block py-2 px-2 text-white no-underline" href="/">HOME</a>
              </li>
              <li class="mr-2">
                <a class="inline-block text-indigo-200 no-underline hover:text-gray-100 hover:text-underline py-2 px-2" href="#">LINK</a>
              </li>
              <li class="mr-2">
                <a class="inline-block text-indigo-200 no-underline hover:text-indigo-100 hover:text-underline py-2 px-2" href="#">LINK</a>
              </li>
                <li class="mr-2">
                <a class="inline-block text-indigo-200 no-underline hover:text-indigo-100 hover:text-underline py-2 px-2" href="{{ route('post.create') }}">CRIAR POST</a>
              </li>
            </ul>
        </div>
    </div>
</nav>
