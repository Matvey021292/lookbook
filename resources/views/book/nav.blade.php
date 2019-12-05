@if($menu)
<div id="header-navigation" class="cshero-main-header sticky-desktop">
    <nav id="site-navigation" class="main-navigation">
        <div class="menu-primary-menu-container">
            <div class="HeaderLinks__linksContainer swiper-slide nav-menu menu-main-menu">
                    @include(env('THEME') . '.customMenuitems', ['items'=>$menu->roots()])
            </div>
        </div>
    </nav>
</div>
@endif
