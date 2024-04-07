<section>
    <header>
        <h2>修改密碼</h2>

        <p>為確保您的帳戶安全，請確保您的密碼是長度足夠且隨機的。</p>
    </header>

    <form method="post" action="{{ route('password.update') }}">
        @csrf
        @method('put')

        <div>
            <label for="update_password_current_password">密碼</label>
            <input id="update_password_current_password" name="current_password" type="password"
                autocomplete="current-password">
            <ul>
                @foreach ((array) $errors->updatePassword->get('current_password') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>

        <div>
            <label for="update_password_password">新密碼</label>
            <input id="update_password_password" name="password" type="password" autocomplete="new-password">
            <ul>
                @foreach ((array) $errors->updatePassword->get('password') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>

        <div>
            <label for="update_password_password_confirmation">確認密碼</label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password"
                autocomplete="new-password">
            <ul>
                @foreach ((array) $errors->updatePassword->get('password_confirmation') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>

        <div class="flex items-center gap-4">
            <button>儲存</button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)">已更新</p>
            @endif
        </div>
    </form>
</section>
