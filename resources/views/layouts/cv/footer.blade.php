<footer>
    <div class="footer-container flex flex-col md:flex-row max-w-[90%] lg:max-w-[80%] mx-auto">
        <div class="logo">
            <a href="{{ route('welcome') }}" class="flex gap-2">
                <div>
                    <img src="{{ asset('storage/images/logo-ng.png') }}" alt="">
                </div>
                <h3 class="text-6xl">
                    ng
                </h3>
            </a>
        </div>
        <div class="flex gap-4 justify-center social-icons">
            <a href="https://wa.me/34623037048?text=Hola%20Nicolás!%20Te%20escribo%20desde%20tu%20web" target="blank">
                <i class="fi fi-brands-whatsapp"></i>
            </a>
            <a href="mailto:nico.gelabert@gmail.com" target="blank">
                <i class="fi fi-sr-envelope"></i>
            </a>
            <a href="https://www.behance.net/nicolasgelabert" target="blank">
                <i class="fi fi-brands-behance"></i>
            </a>
            <a href="https://www.linkedin.com/in/nicolasgelabert/" target="blank" class="linkedin">
                <i class="fi fi-brands-linkedin"></i>
            </a>
            <a href="https://www.instagram.com/nicolas.gelabert.dg/" target="blank">
                <i class="fi fi-brands-instagram"></i>
            </a>
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
                <h4>{{ __('The company') }}</h4>
                <ul>
                    <li><a href="#">{{ __('About us') }}</a></li>
                    <li><a href="#">{{ __('Work with us') }}</a></li>
                    <li><a href="#">{{ __('Terms & conditions') }}</a></li>
                    <li><a href="#">{{ __('Privacy policy') }}</a></li>
                </ul>
            </div>
            <div>
                <h4>{{ __('Help') }}</h4>
                <ul>
                    <li><a href="#">{{ __('Support') }}</a></li>
                    <li><a href="#">{{ __('Faq') }}</a></li>
                    <li><a href="#">{{ __('Contact us') }}</a></li>
                </ul>
            </div>
        </div>
    </div>
    <hr class="h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-white to-transparent opacity-50 dark:opacity-100" />
    <div class="post-footer max-w-[90%] lg:max-w-[80%] ">
        <span>{{__('Site design and developed by')}}<a href="{{ route('welcome') }}"> Nicolás Gelabert</a></span>
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