<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CDN font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <!-- CDN bootstrap icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">
    <!-- CDN JS Bootstrap 5 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <!-- CDN CSS Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <!-- JS Custom -->
    <script src="<?= URL ?>assets/js/countdown-time.js"></script>
    <script src="<?= URL ?>assets/js/ajax.js"></script>
    <!-- CSS Custom -->
    <link rel="stylesheet" href="<?= URL ?>assets/css/custom.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= WEB_FAVICON ?>" type="image/x-icon">
    <!-- Title -->
    <title><?= isset($title) ? $title : WEB_NAME ?></title>
</head>

<body class="bg-secondary bg-opacity-10">
    <nav class="sticky-top navbar navbar-expand-lg navbar-light bg-success py-3">
        <div class="container p-lg-0">
            <a class="navbar-brand text-light fw-bold fst-italic text-decoration-underline" href="<?= URL ?>">
                <?= WEB_NAME ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-center">
                    <!-- <li class="nav-item mx-lg-3">
                        <button type="button" class="btn btn-outline-light d-flex align-items-center text-nowrap py-1 rounded-5">
                            <i class="bi bi-list fs-4 me-2"></i>
                            <span class="fw-semibold">Danh mục</span>
                        </button>
                    </li>  -->
                    <li class="nav-item mx-lg-3">
                        <button type="button" class="btn btn-outline-light py-1 rounded-5 d-none d-lg-flex align-items-center text-nowrap ">
                            <i class="bi bi-list fs-4 me-2"></i>
                            <span class="fw-semibold">Danh mục</span>
                        </button>
                        <div class="dropdown-menu py-3">
                            <div class="dropdown-item position-relative">Laptop
                                <div class="submenu">
                                    <div class="d-flex m-2">
                                        <div class="m-1">
                                            <a class="dropdown-item" href="#">Sản phẩm Apple</a>
                                            <a class="dropdown-item" href="#">MacBook</a>
                                            <a class="dropdown-item" href="#">Mac PC</a>
                                        </div>
                                        <div class="m-1">
                                            <a class="dropdown-item" href="#">Gaming</a>
                                            <a class="dropdown-item" href="#">Học tập</a>
                                            <a class="dropdown-item" href="#">Macbook</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-item position-relative">Điện thoại
                                <div class="submenu">
                                    <div class="d-flex m-2">
                                        <div class="m-1">
                                            <a class="dropdown-item" href="#">iPhone</a>
                                            <a class="dropdown-item" href="#">Samsung</a>
                                            <a class="dropdown-item" href="#">OPPO</a>
                                        </div>
                                        <div class="m-1">
                                            <a class="dropdown-item" href="#">Gaming</a>
                                            <a class="dropdown-item" href="#">Hiện đại</a>
                                            <a class="dropdown-item" href="#">Máy cũ (2hand)</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-item position-relative">Màn hình máy tính
                                <div class="submenu">
                                    <div class="d-flex m-2">
                                        <div class="m-1">
                                            <a class="dropdown-item" href="#">Màn hình cong</a>
                                            <a class="dropdown-item" href="#">Gaming</a>
                                            <a class="dropdown-item" href="#">Đồ hoạ</a>
                                        </div>
                                        <div class="m-1">
                                            <a class="dropdown-item" href="#">60Hz</a>
                                            <a class="dropdown-item" href="#">144Hz</a>
                                            <a class="dropdown-item" href="#">240Hz</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-item position-relative">Phụ kiện
                                <div class="submenu">
                                    <div class="d-flex m-2">
                                        <div class="m-1">
                                            <a class="dropdown-item" href="#">Tai nghe bluetooh</a>
                                            <a class="dropdown-item" href="#">Tai nghe Gaming</a>
                                            <a class="dropdown-item" href="#">Chuột Corsair</a>
                                        </div>
                                        <div class="m-1">
                                            <a class="dropdown-item" href="#">Keyboard Gaming</a>
                                            <a class="dropdown-item" href="#">LED Custom</a>
                                            <a class="dropdown-item" href="#">Main</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item input-group">
                        <input type="text" name="search_product" id="" class="form-control rounded-end-0 rounded-5 search-input ps-3" placeholder="Bạn muốn tìm gì ?">
                        <button class="btn btn-small btn-light rounded-start-0 rounded-5 pe-3 text-success search-btn">
                            <i class="bi fs-5 bi-search"></i>
                        </button>
                    </li>
                </ul>
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-bs-toggle="dropdown">
                        <img width="30" class="" src="<?= DEFAULT_AVATAR ?>" alt="image user">
                        <span class="text-light">User Default</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item text-success" href="history.html">Lịch sử mua hàng</a></li>
                        <li><a class="dropdown-item text-warning" href="infomation.html">Cập nhật thông tin</a></li>
                        <hr class="border-2 btn-dark my-2">
                        <li><a class="dropdown-item text-danger" href="#">Đăng xuất</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>