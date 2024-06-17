@extends('layouts.index')

@section('register_buttons')
    <div class="flex justify-end">
        <a href="{{ route('login') }}">
            <button class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-700 dark:hover:bg-red-800 dark:focus:ring-red-900">
                Log In
            </button>
        </a>
    </div>
@endsection

@section('content')
    <section class="flex flex-col items-center pt-6">
        <div
            class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">Create an
                    account
                </h1>
                <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div>
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Username
                        </label>
                        <input type="text" name="username" id="username" value="{{ old('name') }}" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 {{ $errors->has('username') ? 'dark:border-red-600 dark:placeholder-red-400' : 'dark:border-gray-600 dark:placeholder-gray-400' }} dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your username" required="" autofocus>
                        @error('username')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Email
                        </label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 {{ $errors->has('email') ? 'dark:border-red-600 dark:placeholder-red-400' : 'dark:border-gray-600 dark:placeholder-gray-400' }} dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="example@example.com" required="">
                        @error('email')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Password
                        </label>
                        <input type="password" name="password" id="password" placeholder="🔒 Minimum 8 characters" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 {{ $errors->has('password') ? 'dark:border-red-600 dark:placeholder-red-400' : 'dark:border-gray-600 dark:placeholder-gray-400' }} dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        @error('password')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Confirm Password
                        </label>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 {{ $errors->has('password_confirmation') ? 'dark:border-red-600 dark:placeholder-red-400' : 'dark:border-gray-600 dark:placeholder-gray-400' }} dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        @error('password_confirmation')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center">
                        <input id="remember-me" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
                        <label for="remember-me" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                            Remember me
                        </label>
                    </div>

                    <a href="{{ route('dashboard') }}">
                        <button type="submit" class="w-full mt-4 text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-700 dark:hover:bg-red-800 dark:focus:ring-red-900">
                            Create an account
                        </button>
                    </a>

                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Already have an account?
                        <a class="font-medium text-blue-600 hover:underline dark:text-blue-500" href="{{ route('login') }}">
                            Sign in here
                        </a>
                    </p>
                </form>
            </div>
        </div>
    </section>
@endsection
