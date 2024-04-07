<x-guest-layout>
    <div>忘記密碼了嗎？沒問題。請提供您的電子郵件地址，我們將向您發送一個密碼重設連結，讓您可以選擇新的密碼。</div>

    <!-- Session Status -->
    <div>{{ session('status') }}</div>

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <label for="email">電子信箱</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
        <ul>
            @foreach ((array) $errors->get('email') as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>

        <button>發送重設密碼郵件</button>
    </form>
</x-guest-layout>
