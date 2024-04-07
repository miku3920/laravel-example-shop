<section>
    <header>
        <h2>刪除帳號</h2>

        <p>當你刪除帳戶時，所有相關的資源和數據將被永久刪除。在刪除帳戶之前，請下載任何你想保留的資料或信息。</p>
    </header>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deleteUserModal">
        刪除帳號
    </button>

    <form method="post" action="{{ route('profile.destroy') }}">
        <div @class([
            'modal',
            'fade',
            'show' => $errors->userDeletion->isNotEmpty(),
        ]) @style([
            'display: block;' => $errors->userDeletion->isNotEmpty(),
        ]) id="deleteUserModal" tabindex="-1"
            aria-labelledby="deleteUserModalLabel">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        @method('delete')

                        <h2>您確定要刪除您的帳號嗎？</h2>

                        <p>一旦您刪除帳號，所有相關的資源和數據將被永久刪除。請輸入您的密碼以確認您要永久刪除您的帳號。</p>

                        <div class="mt-6">
                            <label for="password">密碼</label>
                            <input id="password" name="password" type="password" placeholder="">
                            <ul>
                                @foreach ((array) $errors->userDeletion->get('password') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
                        <button type="submit" class="btn btn-primary">刪除帳號</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
