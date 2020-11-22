<nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg header-navbar" color-on-scroll="100" id="sectionsNav">
    <div class="container-fluid container-fluid-custom">
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{ URL::to('/') }}"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{ URL::to('/') }}" class="nav-link" data-position="#home">
                        {{ __("Home") }}
                        <div class="ripple-container"></div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ URL::to('https://www.dropee.com') }}" target="_blank" class="nav-link">
                        {{ __("For Buyers") }}
                        <div class="ripple-container"></div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ URL::to('https://www.dropee.com') }}" target="_blank" class="nav-link">
                        {{ __("For Sellers") }}
                        <div class="ripple-container"></div>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ URL::to('https://www.dropee.com/pages/request-demo') }}" target="_blank" class="nav-link">
                        {{ __("Book a demo") }}
                        <div class="ripple-container"></div>
                    </a>
                </li>
                <li class="nav-item btn-book-a-demo">
                    <a href="{{ URL::to('https://www.dropee.com/marketplace') }}" target="_blank" class="btn btn-round">
                        {{ __("Marketplace") }}
                    <div class="ripple-container"></div></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
