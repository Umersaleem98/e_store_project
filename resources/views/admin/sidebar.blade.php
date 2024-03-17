<div class="l-sidebar">
    <div class="logo">
      <div class="logo__txt"><a href="/admin">D</a></div>
    </div>
    <div class="l-sidebar__content">
      <nav class="c-menu js-menu">
        <ul class="u-list">
          <li class="c-menu__item is-active" data-toggle="tooltip" title="Flights">
            <div class="c-menu__item__inner"><i class="fa fa-plane"><a href="{{ url('/add_product') }}"></a></i>
              <div class="c-menu-item__title"><a href="{{ url('/add_product') }}"><span>Add Products</span></a></div>
            </div>
          </li>

          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Statistics">
            <div class="c-menu__item__inner"><i class="fa fa-bar-chart"></i>
              <div class="c-menu-item__title"><a href="{{ url('/list_product') }}"><span>Products List</span></a></div>
            </div>
          </li>
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Gifts">
            <div class="c-menu__item__inner"><i class="fa fa-gift"></i>
              <div class="c-menu-item__title"><span>Gifts</span></div>
            </div>
          </li>
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Settings">
            <div class="c-menu__item__inner"><i class="fa fa-cogs"></i>
              <div class="c-menu-item__title"><span>Settings</span></div>
            </div>
          </li>
        </ul>
      </nav>
    </div>
  </div>
