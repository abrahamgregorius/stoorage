<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Stoorage</title>
</head>
<body>
    <nav class="navbar p-6 w-full flex flex-row items-center justify-between border-b-2 bg-zinc-800 text-zinc-100">
        <div class="nav-left">
            <h1 class="text-2xl font-black">
                <a href="/">
                    Stoorage
                </a>
            </h1>
        </div>
        <div class="nav-right">
            <ul class="flex flex-row gap-4 font-semibold items-center">
                <li class="hover:text-zinc-400 transition duration-300">
                    <a href="/">Home</a>
                </li>
                {{-- <li class="hover:text-zinc-400 transition duration-300">
                    <a href="/items">Items</a>
                </li>
                <li class=" hover:text-zinc-400 transition duration-300">
                    <a href="/categories">Categories</a>
                </li> --}}

                @if(!auth()->user())
                <a href="/login">
                    <button class="px-6 py-1 rounded border-2 text-yellow-400 border-yellow-400 hover:border-zinc-200 hover:text-zinc-800 hover:bg-zinc-200 transition duration-300">Login</button>
                </a>
                @else
                <form method="GET" action="/logout">
                    @csrf
                    <button class="px-6 py-1 rounded border-2 text-yellow-400 border-yellow-400 hover:border-zinc-200 hover:text-zinc-800 hover:bg-zinc-200 transition duration-300">Logout</button>
                </form>
                @endif
            </ul>
        </div>
    </nav>

    @yield('content')


    <footer class="footer py-6 w-full bg-zinc-800 text-zinc-100">
        <div class="w-full mb-10 max-w-[1400px] mx-auto my-0 flex flex-col items-start justify-around">
            <div class="w-full flex flex-row items-start justify-around">
                <div class="menu menu-1">
                    <div class="menu-head">
                        <span class="text-xl font-semibold">Products</span>
                    </div>
                    <div class="menu-body text-zinc-300">
                        <ul>
                            <li class="hover:text-zinc-500 transition duration-150">
                                <a href="#">Latest</a>
                            </li>
                            <li class="hover:text-zinc-500 transition duration-150">
                                <a href="#">Popular</a>
                            </li>
                            <li class="hover:text-zinc-500 transition duration-150">
                                <a href="#">Charts</a>
                            </li>
                            <li class="hover:text-zinc-500 transition duration-150">
                                <a href="#">Ratings</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="menu menu-2">
                    <div class="menu-head">
                        <span class="text-xl font-semibold">Services</span>
                    </div>
                    <div class="menu-body text-zinc-300">
                        <ul>
                            <li class="hover:text-zinc-500 transition duration-150">
                                <a href="#">Items</a>
                            </li>
                            <li class="hover:text-zinc-500 transition duration-150">
                                <a href="#">Delivery</a>
                            </li>
                            <li class="hover:text-zinc-500 transition duration-150">
                                <a href="#">Logistics</a>
                            </li>
                            <li class="hover:text-zinc-500 transition duration-150">
                                <a href="#">New Arrivals</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="menu menu-3">
                    <div class="menu-head">
                        <span class="text-xl font-semibold">Company</span>
                    </div>
                    <div class="menu-body text-zinc-300">
                        <ul>
                            <li class="hover:text-zinc-500 transition duration-150">
                                <a href="#">About us</a>
                            </li>
                            <li class="hover:text-zinc-500 transition duration-150">
                                <a href="#">Careers</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="menu menu-4">
                    <div class="menu-head">
                        <span class="text-xl font-semibold">Help</span>
                    </div>
                    <div class="menu-body text-zinc-300">
                        <ul>
                            <li class="hover:text-zinc-500 transition duration-150">
                                <a href="#">FAQs</a>
                            </li>
                            <li class="hover:text-zinc-500 transition duration-150">
                                <a href="#">Ask our team!</a>
                            </li>
                            <li class="hover:text-zinc-500 transition duration-150">
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-4 border-t border-zinc-200 flex justify-center items-center">
            <span>Stoorage Team &copy; 2024</span>
        </div>
    </footer>
</body>
</html>
