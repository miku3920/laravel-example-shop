<x-app-layout>
    <div>這是應用程序的安全區域。請在繼續之前確認您的密碼。</div>

    <!-- Session Status -->
    <div>{{ session('status') }}</div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <label for="password">密碼</label>
        <input id="password" type="password" name="password" required autocomplete="current-password">
        <ul>
            @foreach ((array) $errors->get('password') as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
        <button>確認</button>
    </form>
</x-app-layout>
