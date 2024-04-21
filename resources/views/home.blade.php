<x-app-layout>
    <x-slot name="style">
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/style.css', 'resources/css/style-index.css'])
    </x-slot>

    <main>
        <section>
            <img src="{{ asset('storage/images/banner_index416.png') }}" class="img-fluid " width="100%">
            <p class="h1-02 font-weight-bold"> 福岡牛 RX-99ffv</p>
            <p class="h1-01 font-weight-bold">長距離浮遊炮 <br>配件包</p>
            <div class="btn-2">
                <a href="product-detail.html" class="button text-white">進入購買</a>
            </div>
        </section>

        <section>
            <div class="card" style="background-color: transparent; border:none;">
                <img src="{{ asset('storage/images/wingpng02.png') }}" class="img-fluid card-img"
                    style="margin-top: -79px;">
                <div class="card-img-overlay">
                    <div class="card-body text-light">
                        <p class="card-title hot-sale"> 最新上架</p>
                        <p class="h1-04 font-weight-bold"> 1/100 飛翼剛彈</p>
                        <p class="h1-05 font-weight-bold"> 白雪姬掉毛改件</p>
                        <p class="h1-03 font-weight-bold">( 產品鋼彈需自行另外購買 )</p>
                        <div class="btn-3">
                            <a href="product-detail.html" class=" text-white">進入購買</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <img src="{{ asset('storage/images/Group77.png') }}" class="img-fluid mt-5" width="100%">
            <h1 class="text-center mb-4 hot-sale-01" style="margin-top:-40px;">熱賣商品</h1>
            <div class="wp-block-group bs-carousel-incr-6 is-layout-flow wp-block-group-is-layout-flow">
                <div class="wp-block-group__inner-container">
                    <div id="carouselExampleControls6" class="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <div class="card">
                                    <div class="img-wrapper"><img decoding="async"
                                            src="{{ asset('storage/images/accessory/SPRX01/SPRX01-1.jpg') }}"
                                            class="d-block w-100"
                                            alt="bootstrap multiple items carousel slide 1 card 1"> </div>
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold ">EW RG 重武裝 HWS 配件包 + 支援戰機 改件</h5>
                                        <p class="card-text">福岡牛 Nu 鋼彈 RX-93ff</p>
                                        <p class="card-text text-danger fw-bold fs-4">NT 560</p>
                                        <a href="#" class="btn btn-primary">加入購物車</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <div class="img-wrapper"><img decoding="async"
                                            src="{{ asset('storage/images/accessory/SPRX02/SPRX02-1.jpg') }}"
                                            class="d-block w-100"
                                            alt="bootstrap multiple items carousel slide 1 card 1"> </div>
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold ">DDB 水星的魔女浮游炮 武器 展示支架</h5>
                                        <p class="card-text">HG RG MG FM</p>
                                        <p class="card-text text-danger fw-bold fs-4">NT 105</p>
                                        <a href="#" class="btn btn-primary">加入購物車</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <div class="img-wrapper"><img decoding="async"
                                            src="{{ asset('storage/images/accessory/SPRX03/SPRX03-1.jpg') }}"
                                            class="d-block w-100"
                                            alt="bootstrap multiple items carousel slide 1 card 1"> </div>
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold ">水星的魔女 增高 延長 腰部改件</h5>
                                        <p class="card-text">HG 風靈 魔靈 </p>
                                        <p class="card-text text-danger fw-bold fs-4">NT 155</p>
                                        <a href="#" class="btn btn-primary">加入購物車</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item active">
                                <div class="card">
                                    <div class="img-wrapper"><img decoding="async"
                                            src="{{ asset('storage/images/accessory/SPRX04/SPRX04-1.jpg') }}"
                                            class="d-block w-100"
                                            alt="bootstrap multiple items carousel slide 1 card 1"> </div>
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold ">能天使 RG HG 1/144 改裝 配件包 武器包 改套</h5>
                                        <p class="card-text">DDB 00 oo DEVISE EXIA </p>
                                        <p class="card-text text-danger fw-bold fs-4">NT 305</p>
                                        <a href="#" class="btn btn-primary">加入購物車</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <div class="img-wrapper"><img decoding="async"
                                            src="{{ asset('storage/images/accessory/SPRX05/MGEX-光之翼.jpg') }}"
                                            class="d-block w-100"
                                            alt="bootstrap multiple items carousel slide 1 card 1"> </div>
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold ">MGEX 1/100 攻擊自由鋼彈 光之翼特效件</h5>
                                        <p class="card-text">DDB MGEX </p>
                                        <p class="card-text text-danger fw-bold fs-4">NT 550</p>
                                        <a href="#" class="btn btn-primary">加入購物車</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <div class="img-wrapper"><img decoding="async"
                                            src="{{ asset('storage/images/accessory/SPRX06/SPRX06-1.jpg') }}"
                                            class="d-block w-100"
                                            alt="bootstrap multiple items carousel slide 1 card 1"> </div>
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold ">自由鋼彈 專用 光之翼特效件</h5>
                                        <p class="card-text">DDB MGSD </p>
                                        <p class="card-text text-danger fw-bold fs-4">NT 215</p>
                                        <a href="#" class="btn btn-primary">加入購物車</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <div class="img-wrapper"><img decoding="async"
                                            src="{{ asset('storage/images/accessory/SPRX07/SPRX07-1.jpg') }}"
                                            class="d-block w-100"
                                            alt="bootstrap multiple items carousel slide 1 card 1"> </div>
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold ">福岡牛 RX-93ffν 長距離浮遊炮 武器配件包 改件</h5>
                                        <p class="card-text"> EW RG HG EG 144 附特典</p>
                                        <p class="card-text text-danger fw-bold fs-4">NT 305</p>
                                        <a href="#" class="btn btn-primary">加入購物車</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <div class="img-wrapper"><img decoding="async"
                                            src="{{ asset('storage/images/accessory/SPRX01/SPRX01-1.jpg') }}"
                                            class="d-block w-100"
                                            alt="bootstrap multiple items carousel slide 1 card 1"> </div>
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold ">EW RG 重武裝 HWS 配件包 + 支援戰機 改件</h5>
                                        <p class="card-text">福岡牛 Nu 鋼彈 RX-93ff</p>
                                        <p class="card-text text-danger fw-bold fs-4">NT 560</p>
                                        <a href="#" class="btn btn-primary">加入購物車</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <div class="img-wrapper"><img decoding="async"
                                            src="{{ asset('storage/images/accessory/SPRX01/SPRX01-1.jpg') }}"
                                            class="d-block w-100"
                                            alt="bootstrap multiple items carousel slide 1 card 1"> </div>
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold ">EW RG 重武裝 HWS 配件包 + 支援戰機 改件</h5>
                                        <p class="card-text">福岡牛 Nu 鋼彈 RX-93ff</p>
                                        <p class="card-text text-danger fw-bold fs-4">NT 560</p>
                                        <a href="#" class="btn btn-primary">加入購物車</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleControls6" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleControls6" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <p></p>
                </div>
            </div>
        </section>

        <section>
            <div class="mb-5">
                <a href="product-accessory.html"><img src="{{ asset('storage/images/banner-bt.jpg') }}"
                        class="img-fluid mt-5 " width="100%"></a>
            </div>
        </section>
    </main>
</x-app-layout>
