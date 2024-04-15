<x-app-layout>
    <main class="container">
        <h1>商品詳情</h1>

        <p>商品名稱：{{ $product->name }}</p>
        <p>商品價格：{{ $product->price }}</p>

        <form action="{{ route('cart.add') }}" method="POST">
            @csrf
            <input type="hidden" id="id" name="id" value="{{ $product->id }}">
            <label for="quantity">選擇數量：</label>
            <input type="number" id="quantity" name="quantity" value="1" min="1">
            <button type="submit">加入購物車</button>
        </form>
    </main>
</x-app-layout>
