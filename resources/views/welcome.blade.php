@extends('layouts.index')

@section('register_buttons')
    <div class="flex justify-end gap-2">
        <a href="">
            <button class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-700 dark:hover:bg-red-800 dark:focus:ring-red-900">
                Log In
            </button>
        </a>

        <a href="{{ route('register') }}">
            <button class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-700 dark:hover:bg-red-800 dark:focus:ring-red-900">
                Register
            </button>
        </a>
    </div>
@endsection

@section('content')

@endsection
