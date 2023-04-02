<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="logo">
        <a href="index.php">
<!--            <img src="images/logo.png">-->
            <h2 class="m-0 p-0"><?= config('app_name') ?></h2>
        </a>
    </div>
    <button class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse"
         id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?= current_page() == 'index' ? 'active' : '' ?>">
                <a class="nav-link"
                   href="index.php">Home</a>
            </li>
            <li class="nav-item <?= current_page() == 'cleaning' ? 'active' : '' ?>">
                <a class="nav-link"
                   href="cleaning.php">Cleaning</a>
            </li>
            <li class="nav-item <?= current_page() == 'demolition' ? 'active' : '' ?>">
                <a class="nav-link"
                   href="demolition.php">Demolition</a>
            </li>
            <li class="nav-item <?= current_page() == 'waste-management' ? 'active' : '' ?>">
                <a class="nav-link"
                   href="waste-management.php">Waste Management</a>
            </li>
            <li class="nav-item <?= current_page() == 'about' ? 'active' : '' ?>">
                <a class="nav-link"
                   href="about.php">About</a>
            </li>
            <li class="nav-item <?= current_page() == 'contact' ? 'active' : '' ?>">
                <a class="nav-link"
                   href="contact.php">Contact Us</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <div class="search_icon"><img src="images/search-icon.png"></div>
        </form>
    </div>
</nav>