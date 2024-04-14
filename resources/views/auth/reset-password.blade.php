<x-app-layout>
    <!-- Session Status -->
    <div>{{ session('status') }}</div>

    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <label for="email">電子信箱</label>
            <input id="email" type="email" name="email" value="{{ old('email', $request->email) }}" required
                autofocus autocomplete="username">
            <ul>
                @foreach ((array) $errors->get('email') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>

        <!-- Password -->
        <div>
            <label for="password">密碼</label>
            <input id="password" type="password" name="password" required autocomplete="new-password">
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
                autocomplete="new-password">
            <ul>
                @foreach ((array) $errors->get('password_confirmation') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>

        <div>
            <button>重設密碼</button>
        </div>
    </form>
</x-app-layout>
