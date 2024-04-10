<x-app-layout>
    <x-slot name="header">
        <h2>搜索結果：{{ $q }}</h2>
    </x-slot>

    <main class="container">
        @if ($products->isEmpty())
            <p>抱歉，找不到與 "{{ $q }}" 相關的商品。</p>
        @else
            <ul>
                @foreach ($products as $product)
                    <li>{{ $product->name }}</li>
                @endforeach
            </ul>
        @endif

        {{ $products->appends(['q' => $q])->links() }}
    </main>
</x-app-layout>
