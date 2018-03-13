@extends('master')

@section('title')
    <title>B</title>
@endsection

@section('content')
    <section class="container px-3 mx-auto max-w-lg">
        <div class="p-3 rounded bg-white shadow inline-block max-w-sm text-sm leading-tight" data-controller="clipboard">
            <div class="font-bold">Or use this special address to drop it directly into this team</div>
            <div class="mb-3">With this address, we won't have to ask you where to put forward &mdash; it'll go directly into Research and Fidelity.</div>
            <div class="flex mb-3">
                <input data-target="clipboard.source" class="border border-r-0 rounded-l-sm p-2 w-full" type="text" value="save-u4pmP2qDvX@3.basecamp.com" readonly>
                <button class="bg-ocean-green hover:bg-green-dark text-white py-2 px-4 rounded-r-sm flex justify-center items-center" data-action="clipboard#copy">
                    <img class="mr-2" src="https://png.icons8.com/small/48/ffffff/copy.png" height="16" width="16" alt="">
                    <span>Copy</span>
                </button>
            </div>
            <a class="text-french-blue" href="#" data-action="clipboard#copy" data-turbolinks="false">Copy to clipboard</a>
        </div>
    </section>
@endsection