@extends('layouts.index')

@section('register_buttons')
    <div class="flex justify-end gap-2">
        <a href="{{ route('welcome') }}">
            <button class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-700 dark:hover:bg-gray-800 dark:focus:ring-gray-900">
                Log Out
            </button>
        </a>
    </div>
@endsection

@section('content')
    <section class="flex flex-col items-center pt-6">
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Dashboard
                </h1>
            </div>
        </div>
    </section>
@endsection
