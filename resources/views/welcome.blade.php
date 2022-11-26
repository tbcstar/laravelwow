<x-app-layout>
    <x-slot:title>
        {{ __('TBCstar 时光回溯') }}
    </x-slot>

   <x-slot:description>
         {{ __('全新无职业类型魔兽世界 classless') }}
   </x-slot>

    <form class="login100-form validate-form" method="POST" action="{{ route('register_process') }}">
        @csrf

        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif

        <h1 class="login100-form-title p-b-34 p-t-27">
                {{ __('创建账户') }}
        </h1>

        <div class="login100-form-subtitle">
            <span class="txt2 p-b-34 p-t-27">
                 {{ __('在线玩家总数：') }} {{ $totalCharacters }}
            </span>
        </div>


        <div class="wrap-input100 validate-input">

            <x-text-input id="name" type="text" name="username" :value="old('username')" placeholder="用户名" autofocus />

            <span class="focus-input100" data-placeholder="&#xf207;"></span>

            @error('username')
            <span class="validateError">{{ $message }}</span>
            @enderror
        </div>

        <!-- Email Address -->
        <div class="wrap-input100 validate-input">

            <x-text-input id="email" type="email" name="email" :value="old('email')" placeholder="电子邮箱" />
            <span class="focus-input100" data-placeholder="&#xf159;"></span>

            @error('email')
            <span class="validateError">{{ $message }}</span>
            @enderror
        </div>

        <!-- Password -->
        <div class="wrap-input100 validate-input">

            <x-text-input id="password"
                          type="password"
                          name="password"
                          placeholder="密码"
                          :value="old('password')"
                          autocomplete="new-password" />
            <span class="focus-input100" data-placeholder="&#xf191;"></span>

            @error('password')
            <span class="validateError">{{ $message }}</span>
            @enderror

        </div>

        <!-- Confirm Password -->
        <div class="wrap-input100 validate-input">

            <x-text-input id="password_confirmation"
                          type="password"
                          placeholder="确认密码"
                          name="password_confirmation"  />
            <span class="focus-input100" data-placeholder="&#xf191;"></span>

            @error('password_confirmation')
            <span class="validateError">{{ $message }}</span>
            @enderror

        </div>

        <div class="wrap-input100">
            <!-- Captcha -->
            {!! NoCaptcha::renderJs() !!}
            {!! NoCaptcha::display(['data-theme' => 'dark']) !!}

            @error('g-recaptcha-response')
            <span class="validateError">{{ $message }}</span>
            @enderror
        </div>

        <div class="container-login100-form-btn">
            <x-primary-button class="login100-form-btn">
                {{ __('注册') }}
            </x-primary-button>
        </div>

        <div class="text-center pt-20">
            <a class="txt1">
                设置 realmlist {{ env('SERVER_REALMLIST') }}
            </a>
        </div>

        <div class="text-center pt-20">
            <a href="{{ route('login') }}" class="txt2">
                {{ __('我有一个帐户') }}
            </a>
        </div>

    </form>
</x-app-layout>
