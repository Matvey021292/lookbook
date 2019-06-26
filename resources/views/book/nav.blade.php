@if($menu)
<div id="header-navigation" class="col-sm-12 cshero-main-header sticky-desktop">
    <nav id="site-navigation" class="main-navigation">
        <div class="menu-primary-menu-container">
            <ul id="menu-primary-menu" class="nav-menu menu-main-menu">
                    @include(env('THEME') . '.customMenuitems', ['items'=>$menu->roots()])
            </ul>
        </div>
    </nav>
</div>
@endif
