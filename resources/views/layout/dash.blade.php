<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stoorage | Dashboard</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="sidebar w-[300px] fixed h-screen p-4 flex flex-col justify-between bg-zinc-800">
        <div class="sidebar-top">
            <div class="sidebar-head w-full flex justify-center bg-zinc-200 text-zinc-800 py-4 rounded">
                <span class="font-bold text-2xl text-center">Stoorage</span>
            </div>

            <div class="sidebar-body mt-8 text-zinc-200">
                <ul class="flex flex-col gap-6">
                    <a href="/dashboard">
                        <li class="flex flex-row gap-3 items-center @if(request()->routeIs('dash.home')) text-zinc-400 @endif hover:text-zinc-500 transition duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M10 20v-6h4v6h5v-8h3L12 3L2 12h3v8z"/></svg>
                            <span class="text-md font-bold">Home</span>
                        </li>
                    </a>
                    <a href="{{ route('dash.items') }}">
                        <li class="flex flex-row gap-3 items-center @if(request()->routeIs('dash.items')) text-zinc-400 @endif hover:text-zinc-500 transition duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M12.16 3h-.32L9.21 8.25h5.58zm4.3 5.25h5.16l-2.07-4.14A2 2 0 0 0 17.76 3h-3.93zm4.92 1.5h-8.63V20.1zM11.25 20.1V9.75H2.62zM7.54 8.25L10.16 3H6.24a2 2 0 0 0-1.79 1.11L2.38 8.25z"/></svg>
                            <span class="text-md font-bold">Items</span>
                        </li>
                    </a>
                    <a href="{{ route('dash.categories') }}">
                        <li class="flex flex-row gap-3 items-center @if(request()->routeIs('dash.categories')) text-zinc-400 @endif hover:text-zinc-500 transition duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M5 11h4c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v4c0 1.1.9 2 2 2m0 10h4c1.1 0 2-.9 2-2v-4c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v4c0 1.1.9 2 2 2m8-16v4c0 1.1.9 2 2 2h4c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-4c-1.1 0-2 .9-2 2m2 16h4c1.1 0 2-.9 2-2v-4c0-1.1-.9-2-2-2h-4c-1.1 0-2 .9-2 2v4c0 1.1.9 2 2 2"/></svg>
                            <span class="text-md font-bold">Categories</span>
                        </li>
                    </a>
                </ul>
            </div>
        </div>

        <div class="sidebar-bottom">
            <div class="btn w-full flex justify-center items-center">
                <form action="/logout" class="w-full">
                    @csrf
                    <button class="bg-zinc-200 w-full rounded py-2 font-semibold text-zinc-800 hover:text-zinc-200 hover:bg-zinc-700 transition duration-200">Logout</button>
                </form>
            </div>
        </div>
    </div>
    <div class="content p-6 text-black ml-[300px]">
        @yield('content')
    </div>
</body>

</html>
