<x-app-layout>
    <form
        action="{{ route('login') }}"
        method="POST" 
        class="max-w-[400px] mx-auto p-6 my-16"
    >
        @csrf

        <div class="title mb-8 ">
            <h3>Login to your account</h3>
        </div>
        <!-- <p class="text-center text-gray-500 mb-6">
            or
            <a
                href="{{ route('register') }}"
                class="text-sm text-purple-700 hover:text-purple-600"
            >
                create new account
            </a>
        </p> -->

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')"/>

        <div class="mb-4">
            <x-input type="email" name="email" placeholder="Your email address" :value="old('email')" class="w-full account"/>
        </div>
        <div class="mb-4">
            <x-input type="password" name="password" placeholder="Your password" :value="old('password')"  class="w-full account"/>
        </div>
        <div class="flex justify-between items-center mb-5">
            <div class="flex items-center">
                <input
                    id="loginRememberMe"
                    type="checkbox"
                    class="mr-3 rounded border-gray-300 text-purple-500 focus:ring-purple-500"
                />
                <label for="loginRememberMe" class="small-text">Remember Me</label>
            </div>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-sm text-purple-700 hover:text-purple-600 small-text">
                    Forgot Password?
                </a>
            @endif
        </div>
        <div class="grid grid-cols-3 gap-3 mb-3 items-center">
            <div class="col-span-2">
                <button
                    class="btn-primary"
                >
                    Login
                </button>
            </div>
            <div class="inline-block">
                <a
                        href="{{ route('register') }}"
                        class="btn-secondary"
                    >
                        Sign in
                </a>
            </div>
        </div>
    </form>
</x-app-layout>
