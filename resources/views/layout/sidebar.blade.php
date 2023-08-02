<div class="offcanvas sidebar-nav bg-dark" tabindex="-1" id="sidebar">
    <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
            <ul class="navbar-nav">
                <li>
                    <div class="text-muted small fw-bold text-uppercase px-3">
                        {{-- CORE --}}
                    </div>
                </li>
                <li>
                    <a href="#" class="nav-link px-3 active">
                        <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                        <span>BẢNG ĐIỀU KHIỂN</span>
                    </a>
                </li>
                <li class="my-4">
                    <hr class="dropdown-divider bg-light" />
                </li>
                <li>
                </li>
                <li>
                    <a href="#" class="nav-link px-3">
                        <span class="me-2"><i class="bi bi-house-fill"></i></span>
                        <span>Trang chủ</span>
                    </a>
                </li>


                {{-- SẢN PHẨM --}}
                <li>
                    <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts">
                        <span class="me-2"><i class="bi bi-archive-fill"></i></span>
                        <span>Sản phẩm</span>
                        <span class="ms-auto">
                            <span class="right-icon">
                                {{-- <i class="bi bi-chevron-down"></i> --}}
                            </span>
                        </span>
                    </a>
                    <div class="collapse show" id="layouts">
                        <ul class="navbar-nav ps-3">
                            <li>
                                <a href="{{ route('list_product') }}" class="nav-link px-3">
                                    <span class="me-2"><i class="bi bi-list"></i></span>
                                    <span>Danh sách</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="collapse show" id="layouts">
                        <ul class="navbar-nav ps-3">
                            <li>
                                <a href="{{ route('add_product')}}" class="nav-link px-3">
                                    <span class="me-2"><i class="bi bi-plus"></i></span>
                                    <span>Thêm mới</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>


                {{-- DANH MỤC --}}
                <li>
                    <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts">
                        <span class="me-2"><i class="bi bi-bookmark-fill"></i></span>
                        <span>Danh mục</span>
                        <span class="ms-auto">
                            <span class="right-icon">
                                {{-- <i class="bi bi-chevron-down"></i> --}}
                            </span>
                        </span>
                    </a>
                    <div class="collapse show" id="layouts">
                        <ul class="navbar-nav ps-3">
                            <li>
                                <a href="{{ route('list_category') }}" class="nav-link px-3">
                                    <span class="me-2"><i class="bi bi-list"></i></span>
                                    <span>Danh sách</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="collapse show" id="layouts">
                        <ul class="navbar-nav ps-3">
                            <li>
                                <a href="{{ route('add_category') }}" class="nav-link px-3">
                                    <span class="me-2"><i class="bi bi-plus"></i></span>
                                    <span>Thêm mới</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- BRAND --}}
                <li>
                    <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts">
                        <span class="me-2"><i class="bi bi-person-fill"></i></span>
                        <span>Brand</span>
                        <span class="ms-auto">
                            <span class="right-icon">
                            </span>
                        </span>
                    </a>
                    <div class="collapse show" id="layouts">
                        <ul class="navbar-nav ps-3">
                            <li>
                                <a href="{{ route('list_brand') }}" class="nav-link px-3">
                                    <span class="me-2"><i class="bi bi-list"></i></span>
                                    <span>Danh sách</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="collapse show" id="layouts">
                        <ul class="navbar-nav ps-3">
                            <li>
                                <a href="{{ route('add_brand') }}" class="nav-link px-3">
                                    <span class="me-2"><i class="bi bi-plus"></i></span>
                                    <span>Thêm mới</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts">
                        <span class="me-2"><i class="bi bi-person-fill"></i></span>
                        <span>Người dùng</span>
                        <span class="ms-auto">
                            <span class="right-icon">
                            </span>
                        </span>
                    </a>
                    <div class="collapse show" id="layouts">
                        <ul class="navbar-nav ps-3">
                            <li>
                                <a href="{{ route('list_user') }}" class="nav-link px-3">
                                    <span class="me-2"><i class="bi bi-list"></i></span>
                                    <span>Danh sách</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="collapse show" id="layouts">
                        <ul class="navbar-nav ps-3">
                            <li>
                                <a href="{{ route('add_user') }}" class="nav-link px-3">
                                    <span class="me-2"><i class="bi bi-plus"></i></span>
                                    <span>Thêm mới</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="my-4">
                    <hr class="dropdown-divider bg-light" />
                </li>
                <li>
                    <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                        Addons
                    </div>
                </li>
                <li>
                    <a href="#" class="nav-link px-3">
                        <span class="me-2"><i class="bi bi-graph-up"></i></span>
                        <span>Charts</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link px-3">
                        <span class="me-2"><i class="bi bi-table"></i></span>
                        <span>Tables</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
