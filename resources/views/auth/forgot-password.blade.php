<x-app-layout>
    <form
        action="{{ route('password.email') }}"
        method="post"
        class="max-w-[400px] mx-auto p-6 my-16"
    >
        @csrf

        <div class="title mb-8 ">
            <h3>Enter your Email</h3>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')"/>

        <!-- <p class="text-center text-gray-500 mb-6">
            or
            <a
                href="{{ route('login') }}"
                class="text-purple-600 hover:text-purple-500"
            >
                login with existing account
            </a>
        </p> -->

        <div class="mb-3">
            <x-input id="email" class="w-full account" type="email" name="email" :value="old('email')" required
            autofocus placeholder="Enter your Email Address"/>
        </div>
        <div class="grid grid-cols-3 gap-3 mb-3 items-center">
            <div class="col-span-2">
                <button
                    class="btn-primary"
                >
                    Email Password Reset Link
                </button>
            </div>
            <div class="inline-block">
                <a
                    href="{{ route('login') }}"
                    class="btn-secondary"
                >
                    login
                </a>
            </div>
        </div>
    </form>
</x-app-layout>
