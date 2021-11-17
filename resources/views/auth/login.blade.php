@extends('components.layoutcontato')

@section('title', 'Login')

@section('content')

<div id="conteudo" class="d-flex">
    <div id="ghost" class="container-lg">
        
        <div id="box-txt" class="d-flex flex-column float-start w-50">
            <h1 class="text-center fs-2">Bem-vindo a MAGS!</h1>
            <p class="fs-5">O Grupo MAGS é uma empresa de engenharia que atua na área de manutenção preventiva e corretiva dos sistemas compressores de Gás GNV. Possuimos uma equipe de profissionais experientes e qualificados para melhor atender nossos parceiros. Buscamos entregar o que nossos clientes precisam com agilidade e eficiência.</p>
            <h3 class="fs-4 my-2 p-1">Entre em contato!</h3>

            <div id="box-icon" class="d-flex">
                <div id="icon1" class="mx-2 p-2">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M29.5135 24.8987H24.4464V23.1234C26.1776 22.1697 27.5016 20.6769 28.1262 18.9074H29.2957C31.8897 18.9074 34 17.0114 34 14.6809C34 13.3962 33.3579 12.2443 32.3478 11.4684V11.0938C32.3478 4.97664 26.8086 0 20 0C13.1914 0 7.65217 4.97664 7.65217 11.0938V11.4685C6.64209 12.2444 6 13.3962 6 14.6809C6 17.0115 8.11035 18.9075 10.7043 18.9075H11.8738C12.4983 20.6769 13.8224 22.1697 15.5536 23.1235V24.8988H10.4865C4.70426 24.8987 0 29.1252 0 34.3202V39.2188C0 39.6502 0.389304 40 0.869565 40H6.62487C7.10513 40 7.49443 39.6502 7.49443 39.2188C7.49443 38.7873 7.10513 38.4375 6.62487 38.4375H1.73913V34.3202C1.73913 29.9867 5.66313 26.4612 10.4865 26.4612H10.9039L16.0742 32.5291C16.2264 32.7078 16.4572 32.8188 16.7073 32.8337C16.7265 32.8348 16.7456 32.8353 16.7647 32.8353C16.9945 32.8353 17.2159 32.7534 17.3796 32.6065L19.1304 31.0335V38.4375H14.451C13.9707 38.4375 13.5814 38.7873 13.5814 39.2188C13.5814 39.6502 13.9707 40 14.451 40H39.1304C39.6107 40 40 39.6502 40 39.2188V34.3202C40 29.1252 35.2957 24.8987 29.5135 24.8987ZM24.2196 26.4612H26.9058L23.1483 30.871L21.2297 29.1473L24.2196 26.4612ZM23.0077 8.165C22.6677 7.86023 22.117 7.86078 21.7779 8.16641L20.6186 9.21055C19.3202 10.3801 17.5927 11.0241 15.7542 11.0241H13.2193C13.2612 7.69609 16.2861 5 20 5C23.7139 5 26.7388 7.69609 26.7806 11.0241H25.2722C24.1686 11.0241 23.1365 10.5209 22.5316 9.70008L23.0092 9.26984C23.3484 8.96437 23.3477 8.46969 23.0077 8.165ZM29.2957 17.345H28.5217V12.0169H29.2957C30.9307 12.0169 32.2609 13.212 32.2609 14.681C32.2609 16.15 30.9307 17.345 29.2957 17.345ZM20 1.5625C25.6728 1.5625 30.3197 5.58352 30.5956 10.6198C30.1824 10.5128 29.7466 10.4544 29.2957 10.4544H28.4917C28.129 6.53078 24.4592 3.4375 20 3.4375C15.5408 3.4375 11.871 6.53078 11.5083 10.4543H10.7043C10.2534 10.4543 9.81765 10.5128 9.40444 10.6197C9.68035 5.58352 14.3272 1.5625 20 1.5625ZM11.4783 17.345H10.7043C9.06931 17.345 7.73913 16.1499 7.73913 14.6809C7.73913 13.212 9.06931 12.0168 10.7043 12.0168H11.4783V17.345ZM13.2174 16.6039V12.5866H15.7542C17.7918 12.5866 19.7205 11.9548 21.2648 10.7949C22.2068 11.9116 23.6917 12.5866 25.2722 12.5866H26.7826V16.6039C26.7826 17.0263 26.7341 17.4387 26.6423 17.8371H23.0958C22.7369 16.9278 21.7703 16.2746 20.6367 16.2746H19.941C18.5026 16.2746 17.3323 17.326 17.3323 18.6184C17.3323 19.9107 18.5026 20.9621 19.941 20.9621H20.6367C21.7703 20.9621 22.7369 20.3089 23.0958 19.3996H26.0207C24.8898 21.3504 22.6163 22.6867 19.9999 22.6867C16.2601 22.6868 13.2174 19.958 13.2174 16.6039ZM21.5063 18.6184C21.5063 19.0491 21.1163 19.3996 20.6368 19.3996H19.9411C19.4617 19.3996 19.0716 19.0491 19.0716 18.6184C19.0716 18.1876 19.4617 17.8371 19.9411 17.8371H20.6368C21.1163 17.8371 21.5063 18.1877 21.5063 18.6184ZM20 24.2493C20.946 24.2493 21.8563 24.1101 22.7073 23.8537V25.6102L20 28.0425L17.2927 25.6101V23.8536C18.1437 24.11 19.054 24.2493 20 24.2493ZM16.8517 30.871L13.0942 26.4612H15.7804L18.7703 29.1473L16.8517 30.871ZM38.2609 38.4375H20.8696V31.0335L22.6205 32.6066C22.7842 32.7536 23.0056 32.8355 23.2354 32.8355C23.2544 32.8355 23.2737 32.8349 23.2928 32.8338C23.5428 32.819 23.7736 32.708 23.9259 32.5292L29.0962 26.4613H29.5136C34.3369 26.4612 38.2609 29.9867 38.2609 34.3202V38.4375Z" fill="#060A6F"/>
                    <path d="M32.1449 34.2188H27.9711C27.4908 34.2188 27.1015 34.5686 27.1015 35C27.1015 35.4314 27.4908 35.7813 27.9711 35.7813H32.1449C32.6251 35.7813 33.0145 35.4314 33.0145 35C33.0145 34.5686 32.6251 34.2188 32.1449 34.2188Z" fill="#060A6F"/>
                    <path d="M10.5383 38.4375C10.3087 38.4375 10.0852 38.521 9.92348 38.6664C9.76087 38.8117 9.6687 39.0133 9.6687 39.2188C9.6687 39.4242 9.76087 39.6258 9.92348 39.771C10.0844 39.9163 10.3087 40 10.5383 40C10.767 40 10.9904 39.9164 11.1531 39.771C11.3148 39.6258 11.4078 39.4242 11.4078 39.2188C11.4078 39.0133 11.3148 38.8117 11.1531 38.6664C10.9904 38.521 10.767 38.4375 10.5383 38.4375Z" fill="#060A6F"/>
                    </svg>
                </div>

                <div id="icon2" class="mx-2 p-2">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M33.8206 25.029C32.7462 23.9547 31.1707 24.0296 29.9891 25.2111C28.2099 26.9903 27.1231 27.7237 26.2378 27.7427C25.3723 27.7607 24.3305 27.0822 22.6477 25.3993C20.9648 23.7165 20.2859 22.6763 20.3043 21.8091C20.3232 20.9238 21.0566 19.837 22.8357 18.0579C23.414 17.4797 23.7376 16.8082 23.7716 16.1162C23.806 15.418 23.5383 14.7468 23.018 14.2265L18.9038 10.1121C18.7537 9.95995 18.0119 9.27987 16.8544 9.38612C15.6915 9.49403 14.5907 10.3532 13.5823 11.9397C11.7567 14.8121 9.38341 20.6644 14.0019 27.5866C14.3012 28.0353 14.9075 28.1563 15.3563 27.857C15.8049 27.5577 15.9259 26.9514 15.6266 26.5027C12.585 21.9439 13.0296 17.939 14.1075 15.1936L18.8428 19.9289C18.5364 20.5359 18.3651 21.1392 18.3517 21.7675C18.3153 23.478 19.4401 24.9537 21.2666 26.7804C23.0932 28.607 24.5696 29.7313 26.2794 29.6953C26.9077 29.6819 27.511 29.5106 28.118 29.2042L32.8534 33.9394C30.1079 35.0175 26.1028 35.4621 21.5438 32.4201C21.0952 32.1209 20.4887 32.2419 20.1894 32.6904C19.8901 33.1391 20.0111 33.7455 20.4597 34.0448C23.4363 36.0309 26.2145 36.7242 28.6436 36.7241C31.8636 36.724 34.4698 35.5055 36.1071 34.4646C37.6936 33.4563 38.5528 32.3554 38.6607 31.1926C38.7682 30.0342 38.0857 29.2918 37.9344 29.1428L33.8206 25.029ZM15.0151 13.339C15.0875 13.2168 15.1596 13.0995 15.2307 12.9876C16.1223 11.5849 16.7732 11.3636 17.0117 11.3336C17.2759 11.2999 17.4569 11.4353 17.5054 11.4767C17.5109 11.4833 17.5031 11.4734 17.5203 11.4908L21.637 15.6075C21.8317 15.8021 21.8236 15.9664 21.8209 16.0204C21.8113 16.2173 21.6812 16.4503 21.4547 16.6768C20.8894 17.2422 20.3884 17.7734 19.962 18.2859L15.0151 13.339ZM36.7134 31.0353C36.6834 31.2738 36.4621 31.9247 35.0593 32.8163C34.9474 32.8874 34.8301 32.9595 34.7079 33.0319L29.761 28.085C30.2735 27.6586 30.8048 27.1576 31.3702 26.5923C31.7853 26.177 32.1453 26.116 32.4395 26.4101L36.5561 30.5267C36.5734 30.544 36.5635 30.5362 36.5702 30.5417C36.6116 30.5901 36.7467 30.7713 36.7134 31.0353Z" fill="#2CB742"/>
                        <path d="M43.2309 6.76913C38.8656 2.404 33.0849 0 26.9531 0H23.0469C16.9152 0 11.1344 2.404 6.76924 6.76913C2.404 11.1344 0 16.9152 0 23.0468C0 27.3626 1.21426 31.5783 3.51133 35.2381C5.54873 38.4841 8.35244 41.1728 11.6635 43.0664C10.9278 44.0451 10.0518 44.8756 9.73789 45.1402C8.85039 45.888 8.54678 47.1701 8.99971 48.2581C9.36113 49.1262 10.2967 50 11.8673 50C11.9958 50 12.129 49.9941 12.2661 49.9819C14.5909 49.7749 19.604 47.7503 21.6027 46.0476C22.0881 46.0782 22.5722 46.0937 23.0469 46.0937H26.9531C33.0848 46.0937 38.8656 43.6897 43.2309 39.3245C47.5961 34.9594 50 29.1785 50 23.0468C50 16.9152 47.596 11.1344 43.2309 6.76913ZM26.9531 44.1405H23.0469C22.4836 44.1405 21.9055 44.1167 21.3286 44.0696C21.0351 44.0455 20.747 44.1553 20.5437 44.3679C19.318 45.6489 14.2634 47.8433 12.093 48.0364C11.4366 48.095 10.9672 47.902 10.8029 47.5074C10.674 47.1977 10.7536 46.8385 10.9968 46.6336C11.0148 46.6184 12.8132 45.0907 13.9145 43.2123C14.0504 42.9804 14.0848 42.7027 14.0094 42.4446C13.934 42.1865 13.7556 41.971 13.5162 41.8488C6.38389 38.2059 1.95312 31.0013 1.95312 23.0468C1.95312 11.4157 11.4157 1.95312 23.0469 1.95312H26.9531C38.5843 1.95312 48.0469 11.4157 48.0469 23.0468C48.0469 34.678 38.5844 44.1405 26.9531 44.1405Z" fill="#2CB742"/>
                        <path d="M17.6181 29.4523H17.6174C17.0781 29.4523 16.6412 29.8897 16.6412 30.4289C16.6412 30.9682 17.0787 31.4055 17.6181 31.4055C18.1574 31.4055 18.5947 30.9682 18.5947 30.4289C18.5947 29.8897 18.1574 29.4523 17.6181 29.4523Z" fill="#2CB742"/>
                        </svg>
                </div>      
            </div>
        </div>

        <div id="box-login" class="d-flex float-end">
            <x-guest-layout>
                <x-auth-card> 

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-label for="email" :value="__('Email')" />

                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />

                        <x-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-button class="ml-3">
                            {{ __('Log in') }}
                        </x-button>
                        </div>
                    </form>
            </x-auth-card>
        </x-guest-layout>
        </div>
    </div>
</div>
   @endsection