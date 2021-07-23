@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <div class="selection:bg-rose-500 selection:text-white">
        <div class="min-h-screen bg-rose-100 flex justify-center items-center">
            <div class="p-8 flex-1">
                <div class="bg-white rounded-md mx-auto overflow-hidden shadow-xl">
                    <div class="relative h-48 bg-rose-500 rounded-bl-4xl">
                        <svg class="absolute bottom-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                            <path fill="#ffffff" fill-opacity="1"
                                d="M0,64L48,80C96,96,192,128,288,128C384,128,480,96,576,85.3C672,75,768,85,864,122.7C960,160,1056,224,1152,245.3C1248,267,1344,245,1392,234.7L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                            </path>
                        </svg>
                    </div>
                    <div class="px-10 pt-4 pb-8 bg-white rounded-tr-4xl">
                        @if (session('info'))
                            <script>
                                alert("{{ session('info') }}")
                            </script>
                        @endif
                        <h1 class="text-2xl font-semibold text-gray-900">Send us a message</h1>
                        <form class="mt-12" action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <div class="relative">
                                <input id="name" name="name" type="text"
                                    class="peer h-10 pt-3 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-rose-600"
                                    placeholder="Text your name here" />
                                <label for="name"
                                    class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Name</label>
                            </div>
                            @error('name')
                                <p class="text-red-500"><strong>{{ $message }}</strong></p>
                            @enderror
                            <div class="mt-4 relative">
                                <input id="email" type="email" name="email"
                                    class="peer h-10 pt-3 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-rose-600"
                                    placeholder="Text your email here" />
                                <label for="email"
                                    class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Email</label>
                            </div>
                            @error('email')
                                <p class="text-red-500"><strong>{{ $message }}</strong></p>
                            @enderror
                            <div class="mt-4 relative">
                                <textarea id="message" name="message" rows="5"
                                    class="peer pt-3 w-full border-b-2 border-gray-300 text-gray-900 placeholder-transparent focus:outline-none focus:border-rose-600"
                                    placeholder="Text your message here"></textarea>
                                <label for="message"
                                    class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Message</label>
                            </div>

                            @error('message')
                                <p class="text-red-500"><strong>{{ $message }}</strong></p>
                            @enderror
                            <input type="submit" value="Send Message"
                                class="mt-20 px-4 py-3 rounded bg-rose-500 hover:bg-rose-400 text-white font-semibold text-center block w-full focus:outline-none focus:ring focus:ring-offset-2 focus:ring-rose-500 focus:ring-opacity-80 cursor-pointer" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
