@extends('layouts.app')

@section('content')
<div class="container">
    <div class="flex justify-center">
        <div class="w-1/2">
            <div class="bg-white shadow-md rounded-lg">
                <div class="bg-gray-200 px-4 py-3">{{ __('Register') }}</div>

                <div class="p-4">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Name') }}</label>

                            <div class="mt-1">
                                <input id="name" type="text" class="form-input @error('name') border-red-500 @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email Address') }}</label>

                            <div class="mt-1">
                                <input id="email" type="email" class="form-input @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Password') }}</label>

                            <div class="mt-1">
                                <input id="password" type="password" class="form-input @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password-confirm" class="block text-sm font-medium text-gray-700">{{ __('Confirm Password') }}</label>

                            <div class="mt-1">
                                <input id="password-confirm" type="password" class="form-input" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="mb-0">
                            <div class="flex justify-end">
                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
