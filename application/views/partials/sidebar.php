<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <ul class="nav menu">
        <li class="active"><a href="/"><svg class="glyph stroked dashboard-dial">
                    <use xlink:href="#stroked-dashboard-dial"></use>
                </svg> Home</a></li>
        <li><a href="#"><svg class="glyph stroked bag">
                    <use xlink:href="#stroked-bag"></use>
                </svg> Orders</a></li>
        <li><a href="<?= base_url('customers') ?>"><svg class="glyph stroked app-window-with-content">
                    <use xlink:href="#stroked-app-window-with-content"></use>
                </svg> Customers</a></li>
        <li class="parent">
            <a href="#">
                <span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down">
                        <use xlink:href="#stroked-chevron-down"></use>
                    </svg></span> Products
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li>
                    <a class="" href="<?= base_url('products') ?>">
                        <svg class="glyph stroked chevron-right">
                            <use xlink:href="#stroked-chevron-right">
                            </use>
                        </svg> All products
                    </a>
                </li>
                <li>
                    <a class="" href="<?= base_url('categories')?>">
                        <svg class="glyph stroked chevron-right">
                            <use xlink:href="#stroked-chevron-right">
                            </use>
                        </svg> Categories
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
                    <a class="" href="#">
                        <svg class="glyph stroked chevron-right">
                            <use xlink:href="#stroked-chevron-right">
                            </use>
                        </svg> Roles
                    </a>
                </li>
                <li>
                    <a class="" href="#">
                        <svg class="glyph stroked chevron-right">
                            <use xlink:href="#stroked-chevron-right">
                            </use>
                        </svg> Users
                    </a>
                </li>
            </ul>
        </li>
        <li><a href="#">
                <svg class="glyph stroked male-user">
                    <use xlink:href="#stroked-cancel"></use>
                </svg> Logout</a>
        </li>
    </ul>

</div>
<!--/.sidebar-->