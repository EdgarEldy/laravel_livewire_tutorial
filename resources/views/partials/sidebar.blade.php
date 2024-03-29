<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <ul class="nav menu">
        <li class="active"><a href="{{ url('/') }}">
                <svg class="glyph stroked dashboard-dial">
                    <use xlink:href="#stroked-dashboard-dial"></use>
                </svg>
                Dashboard</a></li>
        <li><a href="{{ route('orders.index') }}">
                <svg class="glyph stroked calendar">
                    <use xlink:href="#stroked-calendar"></use>
                </svg>
                Orders</a></li>
        <li><a href="{{ route('customers.index') }}">
                <svg class="glyph stroked clock">
                    <use xlink:href="#stroked-clock"></use>
                </svg>
                Customers</a></li>
        <li class="parent">
            <a href="#">
                <span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down">
                        <use xlink:href="#stroked-chevron-down"></use>
                    </svg></span> Products
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li>
                    <a class="" href="{{ route('products.index') }}">
                        <svg class="glyph stroked chevron-right">
                            <use xlink:href="#stroked-chevron-right">
                            </use>
                        </svg>
                        All products
                    </a>
                </li>
                <li>
                    <a class="" href="{{ route('categories.index') }}">
                        <svg class="glyph stroked chevron-right">
                            <use xlink:href="#stroked-chevron-right">
                            </use>
                        </svg>
                        Categories
                    </a>
                </li>
            </ul>
        </li>
        <li class="parent">
            <a href="#">
                <span data-toggle="collapse" href="#sub-item-2"><svg class="glyph stroked chevron-down">
                        <use xlink:href="#stroked-chevron-down"></use>
                    </svg></span> Access control
            </a>
            <ul class="children collapse" id="sub-item-2">
                <li>
                    <a class="" href="{{ route('roles.index') }}">
                        <svg class="glyph stroked chevron-right">
                            <use xlink:href="#stroked-chevron-right">
                            </use>
                        </svg>
                        Roles
                    </a>
                </li>
                <li>
                    <a class="" href="{{ route('users.index') }}">
                        <svg class="glyph stroked chevron-right">
                            <use xlink:href="#stroked-chevron-right">
                            </use>
                        </svg>
                        Users
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                this.closest('form').submit();">
                    <svg class="glyph stroked male-user">
                        <use xlink:href="#stroked-cancel"></use>
                    </svg>
                    Logout
                </a>
            </form>
        </li>
    </ul>

</div>
<!--/.sidebar-->
