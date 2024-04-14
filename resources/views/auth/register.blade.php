<x-app-layout>
    <!-- Session Status -->
    <div>{{ session('status') }}</div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <label for="name">名字</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                autocomplete="name" />

            <ul>
                @foreach ((array) $errors->get('name') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>

        <!-- Email Address -->
        <div>
            <label for="email">電子信箱</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required
                autocomplete="username" />
            <ul>
                @foreach ((array) $errors->get('email') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>

        <!-- Password -->
        <div>
            <label for="password">密碼</label>
            <input id="password" type="password" name="password" required autocomplete="new-password" />
            <ul>
                @foreach ((array) $errors->get('password') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>

        <!-- Confirm Password -->
        <div>
            <label for="password_confirmation">確認密碼</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required
                autocomplete="new-password" />
            <ul>
                @foreach ((array) $errors->get('password_confirmation') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>

        <div>
            <a href="{{ route('login') }}">已經有帳號了？</a>

            <button>註冊</button>
        </div>
    </form>
</x-app-layout>
