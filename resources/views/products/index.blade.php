<x-app-layout>
    <x-slot name="header">
        <h2>這是輪播圖</h2>
    </x-slot>

    <main class="container">
        <h1>商品列表</h1>

        @if (!empty($q) && $products->isEmpty())
            <p>抱歉，找不到與 "{{ $q }}" 相關的商品。</p>
        @else
            <ul>
                @foreach ($products as $product)
                    <li>
                        {{ $product->name }} -
                        ${{ $product->price }} -
                        <a
                            href="{{ route('products.show', [
                                'id' => $product->id,
                                'slug' => str($product->name)->slug('-', null),
                            ]) }}">查看詳情</a>
                    </li>
                @endforeach
            </ul>
        @endif

        {{ $products->appends(['q' => $q ?? ''])->links() }}
    </main>
</x-app-layout>
