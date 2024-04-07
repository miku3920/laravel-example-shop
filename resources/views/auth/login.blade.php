<x-guest-layout>
    <!-- Session Status -->
    <div>{{ session('status') }}</div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <label for="email">電子郵件</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
            autocomplete="username" />
        <ul>
            @foreach ((array) $errors->get('email') as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>

        <label for="password">密碼</label>
        <input id="password" type="password" name="password" required autocomplete="current-password" />
        <ul>
            @foreach ((array) $errors->get('password') as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>

        <label for="remember_me">
            <input id="remember_me" type="checkbox" name="remember">
            <span>記住我</span>
        </label>

        <div>
            <a href="{{ route('password.request') }}">忘記密碼</a>

            <button>登入</button>
        </div>
    </form>
</x-guest-layout>
