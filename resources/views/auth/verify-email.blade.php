<x-app-layout>
    <!-- Session Status -->
    <div>{{ session('status') }}</div>

    <div>感謝您註冊！在開始之前，請通過點擊我們剛剛發送給您的郵件中的連結來驗證您的電子郵件地址。如果您沒有收到郵件，我們將樂意再次發送給您。</div>

    @if (session('status') == 'verification-link-sent')
        <div>新的驗證連結已經發送到您在註冊時提供的電子郵件地址。</div>
    @endif

    <div>
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <button>重新發送驗證信</button>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit">登出</button>
        </form>
    </div>
</x-app-layout>
