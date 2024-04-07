<section>
    <header>
        <h2>會員資訊</h2>

        <p>更新您帳戶的個人資訊和電子郵件地址。</p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}">
        @csrf
        @method('patch')

        <div>
            <label for="name">{{ __('Name') }}</label>
            <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" required autofocus
                autocomplete="name">
            <ul>
                @foreach ((array) $errors->get('name') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>

        <div>
            <label for="email">{{ __('Email') }}</label>
            <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}" required
                autocomplete="username">
            <ul>
                @foreach ((array) $errors->get('email') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div>
                    <p>
                        您的電子信箱尚未驗證。
                        <button form="send-verification">請點擊這裡重新發送驗證郵件</button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p>新的驗證連結已經發送到您的電子郵件地址。</p>
                    @endif
                </div>
            @endif
        </div>

        <div>
            <button>儲存</button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)">已更新</p>
            @endif
        </div>
    </form>
</section>
