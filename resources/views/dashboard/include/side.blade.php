<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="" class="app-brand-link">
              <span class="app-brand-logo demo me-1">
                <span style="color: var(--bs-primary)">
                  
                </span>
              </span>
              <span class="app-brand-text demo menu-text fw-semibold ms-2">
    <img src="" alt="" class="logo-image">
</span>        </a>


    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->

        <li class="menu-item active open">
            <a href="" class="menu-link  menu-toggle">
                <i class="menu-icon tf-icons ri-bank-card-2-line"></i>
                <div data-i18n="Dashboards">Dashboard</div>
                <!-- <div class="badge bg-danger rounded-pill ms-auto">5</div> -->
            </a>
       
            <ul class="menu-sub">
        
          <li class="menu-item active">
            <a href="" class="menu-link">
                <i class="ri-money-dollar-box-fill" style="padding-right: 8px;" ></i>
                <div data-i18n="Basic">Rentals</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{route('users.index')}}" class="menu-link">
                <i class="fa-solid fa-user" style="padding-right: 8px;" ></i>
                <div data-i18n="Basic">Users</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{route('feedback.index')}}" class="menu-link">
                <i class="fa-solid fa-comment" style="padding-right: 8px;" ></i>
                <div data-i18n="Basic">Feedback</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{route('companies.index')}}" class="menu-link">
            <i class="fa fa-building" style="padding-right: 8px;"></i>
                <div data-i18n="Basic">Company</div>
            </a>
        </li> 
        <li class="menu-item">
            <a href="{{route('categories.index')}}" class="menu-link">
                <i class="fa fa-layer-group" style="padding-right: 8px;"></i>
                <div data-i18n="Basic">Category</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{route('products.index')}}" class="menu-link">
                <i class="fa-brands fa-product-hunt" style="padding-right: 8px;"></i>
                <div data-i18n="Basic">Products</div>
            </a>
        </li>
</ul>
</li>
    </ul>
</aside>
