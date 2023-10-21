<header class="header position-fixed">
    <div class="row">
        <div class="col-auto">
            <div class="col-auto">
            @auth
                @if (Request::is('dashboard'))
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-light btn-44">
                            <i class="bi bi-door-open-fill"></i>
                        </button>
                    </form>
                @else
                    <button class="btn btn-light btn-44 back-btn" onclick="window.location.replace('index.html');">
                        <i class="bi bi-arrow-left"></i>
                    </button>
                @endif
            @endauth
            </div>
        </div>
        <div class="col align-self-center text-center">
            <div class="logo-small">
                <img src="{{asset('/img/logo.png')}}" alt="">
                <h5>LebihJago.com</h5>
            </div>
        </div>
        <div class="col-auto">
            <div style="height: 44px; width: 44px;">
            </div>
        </div>
    </div>
</header>