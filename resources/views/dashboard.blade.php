<x-app-layout>
    <x-slot:title>
        {{ __('个人信息页面') }}
    </x-slot>

    <x-slot:description>
        {{ __('Personal area page description') }}
    </x-slot>

    <div class="login100-form validate-form txt1">
        <h1 class="login100-form-title p-b-34 p-t-27">
            {{ __('Personal area') }}
        </h1>
        @php
            $user = auth()->user();
        @endphp
        <div class="container-custom">
            <p class="text-white">
                用户名： <span class="ml-4 txt2">{{ $user->username }}</span>
            </p>
            <p class="text-white">
                电子邮箱： <span class="ml-4 txt2">{{ $user->email }}</span>
            </p>
            <p class="text-white">
                加入日期： <span class="ml-4 txt2">{{ $user->joindate }}</span>
            </p>
            <p class="text-white">
                上次登录： <span class="ml-4 txt2">{{ $user->last_login }}</span>
            </p>
            <p class="text-white">
                登录IP： <span class="ml-4 txt2">{{ $user->last_ip }}</span>
            </p>
        </div>

        <div class="container-login100-form-btn mt-2">
            <a href="{{ route('logout') }}" class="login100-form-btn">
                {{ __('Logout') }}
            </a>
        </div>
    </div>
</x-app-layout>
