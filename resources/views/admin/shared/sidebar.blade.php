<nav id="sidebar">
    <div class="sidebar-header">
        <h3>Admin</h3>
    </div>
    <ul class="list-unstyled components">
        <p>Order Drink</p>
        <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">User</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="#">Role</a>
                </li>
                <li>
                    <a href="#">User</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Product</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#">Categories</a>
                </li>
                <li>
                    <a href="#">Product</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{route('about.index')}}">About</a>
        </li>
    </ul>
</nav>