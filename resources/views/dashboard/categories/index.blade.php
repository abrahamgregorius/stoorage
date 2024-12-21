@extends('layout.dash')
@section('content')
    <div class="dashboard">
        <div class="dashboard-head">
            <h2 class="text-2xl font-bold">Categories</h2>
        </div>

        <div class="dashboard-grid mt-6">
            <div class="table w-full">
                <table class="w-full">
                    <thead>
                        <tr class="bg-zinc-800 text-zinc-200">
                            <th class="py-3 rounded-none rounded-tl rounded-bl">ID</th>
                            <th class="py-3 ">Category</th>
                            <th class="py-3 rounded-none rounded-tr rounded-br">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            class="odd:bg-zinc-200 even:bg-zinc-300 hover:bg-zinc-100 transition duration-200 text-center text-zinc-800">
                            <td class="py-3 ">019230921</td>
                            <td class="py-3 ">Food</td>
                            <td class="py-3 ">
                                <button
                                    class="py-1 px-4 bg-yellow-400 text-zinc-800 hover:bg-yellow-500 transition rounded font-semibold">Edit</button>
                                <button
                                    class="py-1 px-4 bg-red-600 text-zinc-200 hover:bg-red-700 rounded font-semibold">Delete</button>
                            </td>
                        </tr>
                        <tr
                            class="odd:bg-zinc-200 even:bg-zinc-300 hover:bg-zinc-100 transition duration-200 text-center text-zinc-800">
                            <td class="py-3 ">019230921</td>
                            <td class="py-3 ">Food</td>
                            <td class="py-3 ">
                                <button
                                    class="py-1 px-4 bg-yellow-400 text-zinc-800 hover:bg-yellow-500 transition rounded font-semibold">Edit</button>
                                <button
                                    class="py-1 px-4 bg-red-600 text-zinc-200 hover:bg-red-700 rounded font-semibold">Delete</button>
                            </td>
                        </tr>
                        <tr
                            class="odd:bg-zinc-200 even:bg-zinc-300 hover:bg-zinc-100 transition duration-200 text-center text-zinc-800">
                            <td class="py-3 ">019230921</td>
                            <td class="py-3 ">Food</td>
                            <td class="py-3 ">
                                <button
                                    class="py-1 px-4 bg-yellow-400 text-zinc-800 hover:bg-yellow-500 transition rounded font-semibold">Edit</button>
                                <button
                                    class="py-1 px-4 bg-red-600 text-zinc-200 hover:bg-red-700 rounded font-semibold">Delete</button>
                            </td>
                        </tr>
                        <tr
                            class="odd:bg-zinc-200 even:bg-zinc-300 hover:bg-zinc-100 transition duration-200 text-center text-zinc-800">
                            <td class="py-3 ">019230921</td>
                            <td class="py-3 ">Food</td>
                            <td class="py-3 ">
                                <button
                                    class="py-1 px-4 bg-yellow-400 text-zinc-800 hover:bg-yellow-500 transition rounded font-semibold">Edit</button>
                                <button
                                    class="py-1 px-4 bg-red-600 text-zinc-200 hover:bg-red-700 rounded font-semibold">Delete</button>
                            </td>
                        </tr>
                        <tr
                            class="odd:bg-zinc-200 even:bg-zinc-300 hover:bg-zinc-100 transition duration-200 text-center text-zinc-800">
                            <td class="py-3 ">019230921</td>
                            <td class="py-3 ">Food</td>
                            <td class="py-3 ">
                                <button
                                    class="py-1 px-4 bg-yellow-400 text-zinc-800 hover:bg-yellow-500 transition rounded font-semibold">Edit</button>
                                <button
                                    class="py-1 px-4 bg-red-600 text-zinc-200 hover:bg-red-700 rounded font-semibold">Delete</button>
                            </td>
                        </tr>
                        <tr
                            class="odd:bg-zinc-200 even:bg-zinc-300 hover:bg-zinc-100 transition duration-200 text-center text-zinc-800">
                            <td class="py-3 ">019230921</td>
                            <td class="py-3 ">Food</td>
                            <td class="py-3 ">
                                <button
                                    class="py-1 px-4 bg-yellow-400 text-zinc-800 hover:bg-yellow-500 transition rounded font-semibold">Edit</button>
                                <button
                                    class="py-1 px-4 bg-red-600 text-zinc-200 hover:bg-red-700 rounded font-semibold">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
@endsection
