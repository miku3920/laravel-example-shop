<x-app-layout>
    <x-slot name="header">
        <h2>Header</h2>
    </x-slot>

    <main class="container">
        <h1>Products</h1>
        <h2>Category: {{ $category }}</h2>

        <ul>
            @foreach ($products as $product)
                <li>{{ $product->name }} - ${{ $product->price }}</li>
            @endforeach
        </ul>

        {{ $products->links() }}
    </main>
</x-app-layout>
