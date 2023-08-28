<x-app-layout>
    <form
        action="{{ route('register') }}"
        method="post"
        class="max-w-[400px] mx-auto p-6 my-16"
    >
        @csrf

        <div class="title mb-8 ">
            <h3>Create an account</h3>
        </div>
        <!-- <p class="text-center text-gray-500 mb-3">
            or
            <a
                href="{{ route('login') }}"
                class="text-sm text-purple-700 hover:text-purple-600"
            >
                login with existing account
            </a>
        </p> -->

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')"/>

        <div class="mb-4">
            <x-input placeholder="Your name" type="text" name="name" :value="old('name')"  class="w-full account"/>
        </div>
        <div class="mb-4">
            <x-input placeholder="Your Email" type="email" name="email" :value="old('email')" class="w-full account" />
        </div>
        <div class="mb-4">
            <x-input placeholder="Password" type="password" name="password" class="w-full account"/>
        </div>
        <div class="mb-4">
            <x-input placeholder="Repeat Password" type="password" name="password_confirmation" class="w-full account"/>
        </div>

        <div class="grid grid-cols-3 gap-3 mb-3 items-center">
            <div class="col-span-2">
                <button
                    class="btn-primary"
                >
                    Signup
                </button>
            </div>
            <div class="inline-block">
                <a
                    href="{{ route('login') }}"
                    class="btn-secondary"
                >
                    Login
                </a>
            </div>
        </div>
    </form>
</x-app-layout>
