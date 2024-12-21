@extends('layout.app')
@section('content')

    <div class="section w-full h-[75vh] flex flex-col gap-4 justify-center items-center">
        <form method="POST" class="border shadow-xl w-[20%] flex flex-col text-center rounded px-8 pt-4 pb-8">
            @csrf
            <div class="flex flex-col w-full pt-4 pb-2 px-1 text-left gap-3">
                <div class="flex flex-col gap-1">
                    <h2 class="text-3xl font-bold">Sign in</h2>
                    <p>Utilize the full features of <span class="font-bold">Stoorage</span></p>
                </div>

                @if(Session::has('status'))
                    <div class="w-full bg-red-600 text-zinc-100 text-center py-1 rounded">
                        <span class="font-semibold">{{ Session::get('status') }}</span>
                    </div>
                @endif
            </div>


            <div class="form-control mx-auto w-[95%] py-2 flex flex-col gap-1 justify-center text-left">
                <label for="email">Email</label>
                <input type="text" class="rounded border-2 px-3 py-2" autocomplete="off" id="email" name="email">
            </div>
            <div class="form-control mx-auto w-[95%] py-2 flex flex-col gap-1 justify-center text-left">
                <label for="password">Password</label>
                <input type="password" class="rounded border-2 px-3 py-2" autocomplete="off" id="password" name="password">
                <a href="#" class="font-semibold text-sm underline">Forgot password?</a>
            </div>
            <button class="px-6 py-2 mt-3 w-[95%] mx-auto rounded border-2 border-yellow-500 bg-yellow-500 text-white font-semibold hover:border-green-500 hover:bg-green-500 transition duration-300">Login</button>
        </form>
    </div>

@endsection
