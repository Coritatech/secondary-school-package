<div class="navbar navbar-expand-md header-menu-one bg-light">
    <div class="nav-bar-header-one">
        <div class="header-logo">
            <a href="index.html">
                <h3>Admin Control</h3>
            </a>
        </div>
        <div class="toggle-button sidebar-toggle">
            <button type="button" class="item-link">
                <span class="btn-icon-wrap">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button>
        </div>
    </div>
    <div class="d-md-none mobile-nav-bar">
        <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse" data-target="#mobile-navbar" aria-expanded="false">
            <i class="far fa-arrow-alt-circle-down"></i>
        </button>
        <button type="button" class="navbar-toggler sidebar-toggle-mobile">
            <i class="fas fa-bars"></i>
        </button>
    </div>
    <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
        <ul class="navbar-nav">
            <!-- Search Bar (commented out) -->
        </ul>
        <ul class="navbar-nav">
            <li class="navbar-item dropdown header-admin">
                <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    <div class="admin-title">
                        <!-- Display the full name -->
                        <h5 class="item-title"><?php echo isset($fullname) ? htmlspecialchars($fullname) : 'Guest'; ?></h5>
                        <span>Admin</span>
                    </div>
                    <div class="admin-img">
                        <i class="fas fa-user"></i>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="item-header">
                        <h6 class="item-title"><?php echo isset($fullname) ? htmlspecialchars($fullname) : 'Guest'; ?></h6>
                    </div>
                    <div class="item-content">
                        <ul class="settings-list">
                            <!-- Logout link -->
                            <li><a href="includes/logout.php"><i class="flaticon-turn-off"></i>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
