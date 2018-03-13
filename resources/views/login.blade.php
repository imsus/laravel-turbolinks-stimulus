@extends('master')

@section('title')
    <title>Login</title>
@endsection

@section('content')
    @if ($errors->any())
        <div class="text-sm text-red">{{ $errors->first('email') }}</div>
    @endif

    <div class="mx-auto contianer px-3 max-w-lg" data-controller="login">
        <div class="rounded-sm py-2 px-6 mb-6 block text-center">You need to login to continue</div>

        <form class="mx-auto max-w-xs" action="/login" method="post" data-action="submit->login#submit" data-target="login.form" id="form">
            {{ csrf_field() }}
            <div class="mb-4">
                <label class="block text-sm mb-1" for="email">Email</label>
                <input id="email" class="p-2 shadow rounded-sm w-full mb-1" type="email" name="email" data-target="login.email" value="{{ old('email') }}" autocomplete="email" required>
            </div>
            <div class="mb-8">
                <label class="block text-sm mb-1" for="password">Password</label>
                <input id="password" class="p-2 shadow rounded-sm w-full" type="password" name="password" data-target="login.password" autocomplete="current-password" required>
            </div>
            <button class="bg-ocean-green text-white py-3 px-4 rounded shadow w-full">Submit</button>
        </form>
    </div>
@endsection

@push('style')
    <style>
        .slide {
            display: none;
        }

        .slide.slide--current {
            display: block;
        }
    </style>
@endpush