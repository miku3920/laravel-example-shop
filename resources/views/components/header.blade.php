<header>
    <div class="container">
        <div class="logoimg">
            <img src="{{ asset('storage/images/LOGO24.png') }}">
        </div>
        <div class="nav-top">
            <div class="d-flex justify-content-end">
                <ul class="nav d-flex flex-row me-">
                    <li class="nav-item me-3 me-lg-0">
                        <form class="input-group" action="{{ route('products.index') }}" method="get">
                            <input class="form-control rounded" type="search" name="q"
                                value="{{ request('q') }}" placeholder="請輸入關鍵字" aria-label="請輸入關鍵字"
                                aria-describedby="search-addon" />
                            <button class="input-group-text" type="submit">

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                </svg>
                            </button>
                        </form>
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link text-dark" style="font-size:20px;" href="{{ route('cart.index') }}"><i
                                class="fas fa-cog mx-1"></i> 購物車<svg xmlns="http://www.w3.org/2000/svg" width="20"
                                height="20" fill="currentColor" class="bi bi-cart-fill ms-1 mb-2"
                                viewBox="0 0 16 16">
                                <path
                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                            </svg>
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                            </svg>
                        </a>
                    </li>

                    @auth
                        <li class="nav-item">
                            <a class="nav-link text-dark" style="font-size:20px;" href="{{ route('profile.edit') }}">
                                <i class="fas fa-user mx-1"></i>會員資訊
                                <svg class="bi bi-person-fill" xmlns="http://www.w3.org/2000/svg" width="20"
                                    height="20" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg>
                            </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link text-dark" style="font-size:20px;" href="{{ route('login') }}">
                                <i class="fas fa-user mx-1"></i>會員登入
                                <svg class="bi bi-person-fill" xmlns="http://www.w3.org/2000/svg" width="20"
                                    height="20" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg>
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>

    <nav class="black-bar">
        <div class="container-fluid">
            <ul class="nav-bt nav justify-content-end">
                @foreach ($routes as $name => $route)
                    <li class="nav-item fs-5 fw-semibold">
                        <a class="nav-link text-white fs-4 {{ str_starts_with(url()->current(), $route) ? 'active' : '' }}"
                            href="{{ $route }}">{{ $name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </nav>
</header>
