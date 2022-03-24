<x-guest-layout>
    <div class="flex flex-col h-screen bg-indigo-900">
        <nav class="container flex justify-between pt-5 mx-auto text-indigo-200">
            <a class="text-4xl font-bold" href="/">
                <x-application-logo class="w-16 h-16 fill-current"></x-application-logo>
            </a>
            <div class="flex justify-end">
                @auth
                    <a href="{{ route('dashboard') }}">dashboard</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                @endauth
            </div>
        </nav>
        <div class="flex container mx-auto items-center h-full">
            <div class="flex w-1/3 flex-col items-start">
                <h1 class="font-bold text-white text-5xl leading-tight mb-4">
                    Simple generic landing page to subscriber
                </h1>
                <p class="text-indigo-200 text-xl mb-10">
                    We are just checking the <span class="font-bold underline">TALL</span> stack.  Would you mind subscribing?
                </p>
                <x-button class="py-3 px-8 bg-red-500 hover:bg-red-600">Subscribe</x-button>
            </div>
        </div>
    </div>

    <div class="flex flex-col w-full h-screen bg-pink-900">
        <p class="text-white font-extrabold text-5xl text-center">Let's do it!</p>
        <form class="flex flex-col items-center p-24">
            <x-input 
                class="px-5 py-3 w-80 border-blue-400 border"
                type="email"
                name="email"
                placeholder="Email Address"
            ></x-input>
            <span class="text-gray-100 text-xs">
                We will send you a confirmation email.
            </span>
            <x-button
                class="px-5 py-3 mt-5 w-80 bg-blue-500 justify-center"
            >Get In
            </x-button>
        </form>
    </div>
</x-guest-layout>