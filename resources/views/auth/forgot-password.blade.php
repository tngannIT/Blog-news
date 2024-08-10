<x-guest-layout>
    <div class="text-center mb-4">
        <h1 class="text-4xl font-extrabold ">{{ __('QUÊN MẬT KHẨU') }}</h1>
    </div>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Quên Mật khẩu? Không vấn đề gì. Chỉ cần cho chúng tôi biết địa chỉ email của bạn và chúng tôi sẽ gửi email cho bạn một liên kết đặt lại mật khẩu cho phép bạn chọn một liên kết mới.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Gửi liên kết đặt lại mật khẩu') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
