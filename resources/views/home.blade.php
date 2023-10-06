@extends('layouts.app')

@section('content')
<div class="container">
    <div class="flex justify-center">
        <div class="w-full sm:w-8/12">
            <div class="bg-white shadow-md">
                <div class="py-4 px-6">{{ __('Dashboard') }}</div>

                <div class="py-4 px-6">
                    @if (session('status'))
                        <div class="bg-green-500 text-white px-4 py-2 mb-4">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                        <div class="bg-white">
                            <div class="py-4 px-6">Chats</div>
                            <div class="py-4 px-6">
                                <chat-messages :messages="messages"></chat-messages>
                            </div>
                            <div class="py-4 px-6 ">
                                <chat-form v-on:messagesent="addMessage" :user="{{ Auth::user() }}"></chat-form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
