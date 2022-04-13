<div 
    class="flex flex-col h-screen bg-indigo-900"
    x-data="{ 
        showSubscribe: @entangle('showSubscribe'), 
        showSuccess: @entangle('showSuccess'),
    }"
>
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
    <div class="container flex items-center h-full mx-auto">
        <div class="flex flex-col items-start w-1/3">
            <h1 class="mb-4 text-5xl font-bold leading-tight text-white">
                Simple generic landing page to subscribe
            </h1>
            <p class="mb-10 text-xl text-indigo-200">
                We are just checking the <span class="font-bold underline">TALL</span> stack.  Would you mind subscribing?
            </p>
            <x-button 
                class="px-8 py-3 bg-red-500 hover:bg-red-600"
                x-on:click="showSubscribe = true"
            >
                Subscribe
            </x-button>
        </div>
    </div>

    <x-modal class="bg-pink-900" trigger="showSubscribe">
        <p class="text-5xl font-extrabold text-center text-white">Let's do it!</p>
        <form 
            class="flex flex-col items-center p-24"
            wire:submit.prevent="subscribe"
        >
            <x-input 
                class="px-5 py-3 border border-blue-400 w-80"
                type="email"
                name="email"
                placeholder="Email"
                wire:model="email"
            ></x-input>
            <span class="text-xs text-gray-100">
                {{ 
                    $errors->has('email') 
                    ? $errors->first('email') 
                    : 'We will send you a confirmation email.'
                }}
                
            </span>
            <x-button
                class="justify-center px-5 py-3 mt-5 bg-blue-500 w-80"
            >Get In
            </x-button>
        </form>
    </x-modal>

    <x-modal class="bg-green-500" trigger="showSuccess">
        <p class="font-extrabold text-center text-white text-9xl animate-pulse">
            &check;
        </p>
        <p class="mt-16 text-5xl font-extrabold text-center text-white">Great</p>
        <p class="text-3xl text-center text-white">See you in your inbox</p>
    </x-modal>
</div>
