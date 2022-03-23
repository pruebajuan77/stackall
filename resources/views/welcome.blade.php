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
    </div>

    <div class="flex flex-col h-screen bg-pink-900">
        
    </div>
</x-guest-layout>