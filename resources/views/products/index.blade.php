<x-app-layout>
    <x-slot name="style">
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/style.css'])
    </x-slot>

    <x-slot name="banner">
        <img src="{{ asset('storage/images/banner-4.jpg') }}" style="width: 100%; height: auto;">
    </x-slot>

    <main>
        @if (!empty($routes))
            <section class="section2">
                <div class="container mt-5">
                    <ul class="nav nav-tabs product-nav-tabs product-tabs" role="tablist">
                        @foreach ($routes as $name => $route)
                            <li class="nav-item">
                                <a class="nav-link {{ str_starts_with(url()->current(), $route) ? 'active' : 'pro-nav-link' }} fs-4"
                                    data-toggle="tab" href="{{ $route }}">{{ $name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </section>
        @endif

        <section class="box-30">
            <div class="container">
                <!-- <h2 class="text-center mb-4 fw-bold">場景介紹</h2> -->
                <div class="row">
                    @if (!empty($q) && $products->isEmpty())
                        <p>抱歉，找不到與 "{{ $q }}" 相關的商品。</p>
                    @else
                        @foreach ($products as $product)
                            <div class="col-sm-6 col-md-3 mb-4">
                                <div class="card bg-light p-1">
                                    <img src="{{ asset('storage/images/sticker/gundam/STMG01G.jpg') }}" alt=""
                                        href="#" class="card-img-top w-100">
                                    <div class="card-body">
                                        <p class="text-black fs-4 text-left">{{ $product->name }}</p>
                                        <p class="text-muted fs-5 text-left">{{ $product->sub_name }}</p>
                                        <h3 class="card-text text-danger font-weight-bold">
                                            NT$&nbsp;{{ $product->price }}</h3>
                                        <a href="{{ route('products.show', [
                                            'id' => $product->id,
                                            'slug' => str($product->name)->slug('-', null),
                                        ]) }}"
                                            class="stretched-link">
                                        </a>
                                        <a href="#" class="btn btn-dark w-100">加入購物車</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>

        {{ $products->appends(['q' => $q ?? ''])->links() }}
    </main>
</x-app-layout>
