@extends('layout.dash')
@section('content')
<div class="dashboard">
    <div class="dashboard-head">
        <h2 class="text-2xl font-bold">Dashboard</h2>
    </div>

    <div class="dashboard-grid mt-6">
        <div class="grid grid-cols-4 gap-6">
            <div class="grid-item bg-zinc-800 text-zinc-200 p-4 flex flex-col rounded">
                <span class="text-zinc-400">Total Categories</span>
                <span class="text-3xl text-left">12</span>
            </div>
            <div class="grid-item bg-zinc-800 text-zinc-200 p-4 flex flex-col rounded">
                <span class="text-zinc-400">Active Categories</span>
                <span class="text-3xl text-left">7</span>
            </div>
            <div class="grid-item bg-zinc-800 text-zinc-200 p-4 flex flex-col rounded">
                <span class="text-zinc-400">Total Items</span>
                <span class="text-3xl text-left">196</span>
            </div>
            <div class="grid-item bg-zinc-800 text-zinc-200 p-4 flex flex-col rounded">
                <span class="text-zinc-400">Location With Most Item</span>
                <span class="text-3xl text-left">Warehouse</span>
            </div>
        </div>
    </div>


</div>


@endsection
