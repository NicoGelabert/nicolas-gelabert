<footer class="divide-y">
    <div class="footer-container flex flex-col md:flex-row max-w-[90%] lg:max-w-[80%] mx-auto">
        <div>
            <div class="logo">
                <a href="{{ route('home') }}" class="flex gap-2">
                    <x-application-logo class="block fill-current text-gray-800" />
                caMWorld </a>
            </div>
            <div class="flex gap-4 justify-center social-icons">
                <a href="#">
                    <i class="fi fi-brands-instagram"></i>
                </a>
                <a href="#">
                    <i class="fi fi-brands-facebook"></i>
                </a>
                <a href="#">
                    <i class="fi fi-brands-twitter"></i>
                </a>
                <a href="#">
                    <i class="fi fi-brands-youtube"></i>
                </a>
                <a href="#">
                    <i class="fi fi-brands-telegram"></i>
                </a>
            </div>
        </div>
        <div class="flex flex-col text-center sm:flex-row gap-y-8 sm:flex-row sm:justify-between md:text-left md:gap-8 lg:gap-16 footer-menu">
            <div>
                <h4>{{ __('My account') }}</h4>
                <ul>
                    <li>
                        <a href="{{ route('register') }}">
                            {{ __('Login') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}">
                            {{ __('Register now') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('password.request') }}">
                            {{ __('Forgot password?') }}
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <h4>The company</h4>
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Work with us</a></li>
                    <li><a href="#">Terms & conditions</a></li>
                    <li><a href="#">Privacy policy</a></li>
                </ul>
            </div>
            <div>
                <h4>Help</h4>
                <ul>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Faq's</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="post-footer max-w-[90%] lg:max-w-[80%] ">
        <span>Designed by <a href="https://nicolasgelabert.com.ar">nicolasgelabert.com.ar</a></span>
        <ul class="flex gap-x-4">
            @foreach (Config::get('languages') as $lang => $language)
                @if ($lang != App::getLocale())
                    <li>
                        <a class="flex items-center gap-x-1 opacity-50" href="{{ route('lang.switch', $lang) }}">
                            <span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span>
                            <span>{{$language['display']}}</span>
                        </a>
                    </li>
                @else
                    <li>
                        <a class="flex items-center gap-x-1" href="{{ route('lang.switch', $lang) }}">
                            <span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span>
                            <span>{{$language['display']}}</span>
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</footer>