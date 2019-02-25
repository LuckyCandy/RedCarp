<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">RedCarp售卖系统</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item @if ($nav == 'index') active @endif px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="/">首页</a>
                </li>
                <li class="nav-item @if ($nav == 'about') active @endif px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="/about">关于</a>
                </li>
                <li class="nav-item @if ($nav == 'manual') active @endif px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="/manual">使用说明</a>
                </li>
                <li class="nav-item @if ($nav == 'protocol') active @endif px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="/protocol">用户协议</a>
                </li>
            </ul>
        </div>
    </div>
</nav>