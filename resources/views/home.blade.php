@extends('layout.app')
@section('content')
    <div class="header py-32 bg-zinc-200 flex flex-col gap-8 justify-center items-center">
        <div class="header-top flex flex-col text-center justify-center items-center gap-4">
            <h1 class="text-8xl">Welcome to <span class="font-bold">stoorage</span></h1>
            <p class="text-lg w-[55%]">
                You can store your items accordingly to their own categories with <span class="font-bold">stoorage</span>. We can
                help you keep a clean and neat inventory and enables you to check your items easily.
            </p>
        </div>
        <div class="header-bottom flex flex-row gap-3">
            <a href="#">
                <button class="px-6 py-1 rounded border-2 border-zinc-800 bg-zinc-800 text-zinc-200 font-semibold hover:bg-zinc-200 hover:text-zinc-800 transition duration-300">Items</button>
            </a>
            <a href="#">
                <button class="px-6 py-1 rounded border-2 border-zinc-800 bg-zinc-800 text-zinc-200 font-semibold hover:bg-zinc-200 hover:text-zinc-800 transition duration-300">Categories</button>
            </a>
            {{-- <a href="/login">
                <button class="px-6 py-1 rounded border-2 border-zinc-800 bg-zinc-800 text-zinc-200 font-semibold hover:bg-zinc-200 hover:text-zinc-800 transition duration-300">Login</button>
            </a> --}}
        </div>
    </div>

    <div class="section bg-zinc-100 py-32 flex flex-row w-full gap-20 text-left justify-start items-center">
        <div class="section-item w-full flex justify-end items-center">
            <img src="{{ asset('asset/person.png') }}" alt="">
        </div>
        <div class="section-item w-full flex flex-col gap-8 justify-center items-start">
            <h2 class="text-5xl font-bold w-[50%]">Arrange your items easily with stoorage!</h2>
            <div class="flex flex-col gap-4 w-[50%]">
                <p>Lorem ipsum dolor sit amet, Delectus cum est similique obcaecati animi! Assumenda numquam eos quaerat? Nemo, sit officia.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt maiores in cum quibusdam magni ratione. Delectus cum est similique obcaecati animi! Assumenda accusantium dolore id totam numquam eos quaerat? Nemo, sit officia.</p>
            </div>
        </div>
    </div>

    <div class="section max-w-[1400px] mx-auto my-0 py-32 flex flex-row w-full text-center justify-center items-center">
        <div class="section-item w-full flex flex-col gap-10 justify-center items-center">
            <h2 class="text-5xl font-bold w-[50%]">Use stoorage for your storage <br> and get advantage!</h2>
            <div class=" flex flex-row gap-8">
                <div class="flex flex-row gap-8">
                    <div class="item flex flex-col px-7 py-5 bg-zinc-100 hover:bg-zinc-800 hover:text-zinc-100 transition duration-200 gap-2 rounded justify-center items-center">
                        <div class="item-head flex flex-row items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M3 21h8V3H3zM21 3h-8v8h8zm-8 18h8v-8h-8z"/></svg>
                            <h3 class="text-2xl font-semibold">Manage it with ease</h3>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row gap-8">
                    <div class="item flex flex-col px-7 py-5 bg-zinc-100 hover:bg-zinc-800 hover:text-zinc-100 transition duration-200 gap-2 rounded justify-center items-center">
                        <div class="item-head flex flex-row items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M15.5 14h-.79l-.28-.27a6.5 6.5 0 0 0 1.48-5.34c-.47-2.78-2.79-5-5.59-5.34a6.505 6.505 0 0 0-7.27 7.27c.34 2.8 2.56 5.12 5.34 5.59a6.5 6.5 0 0 0 5.34-1.48l.27.28v.79l4.25 4.25c.41.41 1.08.41 1.49 0s.41-1.08 0-1.49zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5S14 7.01 14 9.5S11.99 14 9.5 14"/></svg>
                            <h3 class="text-2xl font-semibold">Search and Filter</h3>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row gap-8">
                    <div class="item flex flex-col px-7 py-5 bg-zinc-100 hover:bg-zinc-800 hover:text-zinc-100 transition duration-200 gap-2 rounded justify-center items-center">
                        <div class="item-head flex flex-row items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M3 14h4v-4H3zm0 5h4v-4H3zM3 9h4V5H3zm5 5h13v-4H8zm0 5h13v-4H8zM8 5v4h13V5z"/></svg>
                            <h3 class="text-2xl font-semibold">Keep track of items</h3>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/login" class="w-full">
                <button class="px-4 py-2 w-[25%] rounded border-2 border-zinc-800 bg-zinc-800 text-zinc-200 font-semibold hover:bg-zinc-200 hover:text-zinc-800 transition duration-300">Login</button>
            </a>
        </div>
    </div>
@endsection
