<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
		<meta name="author" content="name">
    <meta name="description" content="description here">
		<meta name="keywords" content="keywords,here">
		    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/> <!--Replace with your tailwind.css once created-->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
	<style>
	.smooth {transition: box-shadow 0.3s ease-in-out;}
	::selection{background-color: aliceblue}
	:root{::-webkit-scrollbar{height:10px;width:10px;}::-webkit-scrollbar-track{background:#efefef;border-radius:6px}
	::-webkit-scrollbar-thumb{background:#d5d5d5;border-radius:6px} ::-webkit-scrollbar-thumb:hover{background:#c4c4c4}}
	/*scroll to top*/
	 .scroll-top {position: fixed;z-index: 50;padding: 0;right: 30px;bottom: 100px;opacity: 0;visibility: hidden;transform: translateY(15px);height: 46px;width: 46px;cursor: pointer;display: flex;align-items: center;justify-content: center;border-radius: 50%;transition: all .4s ease;border: none;box-shadow: inset 0 0 0 2px #ccc;color: #ccc;background-color: #fff;}.scroll-top.is-active {opacity: 1;visibility: visible;transform: translateY(0);}.scroll-top .icon-tabler-arrow-up {position: absolute;stroke-width: 2px;stroke: #333;}.scroll-top svg path {fill: none;}.scroll-top svg.progress-circle path {stroke: #333;stroke-width: 4;transition: all .4s ease;}.scroll-top:hover {color: var(--ghost-accent-color);}.scroll-top:hover .progress-circle path, .scroll-top:hover .icon-tabler-arrow-up {stroke: var(--ghost-accent-color);}
	</style>
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" /> --}}
</head>
<body class="bg-white font-sans leading-normal tracking-normal">
@yield('header')
@yield('content')
@yield('footer')
</body>
</html>
