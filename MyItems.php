<?php
// about.php
?>
<!doctype html>
<html lang="en">
    <!-- Head Section: Contains metadata and external resource links -->
    <head>
     
        <meta charset="UTF-8" />
        <!-- Ensures responsive design for all devices (mobile-first design) -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Title of the webpage, displayed on the browser tab -->
        <title>Account</title>
        <!-- Link to Bootstrap CSS for styling and responsive utilities -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
        <!-- Link to Bootstrap Icons for using pre-designed vector icons -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Link to custom styles for further customization -->
        <link rel="stylesheet" href="css-main/navbar-footer.css" />
        <style>
            /* Placeholder for additional custom styles (inline CSS) */
        </style>
    </head>

    <!-- Body Section -->
    <body class="d-flex flex-column min-vh-100">
    <!-- Navbar Section -->
    <header class="bg-primary py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <img src="imgs/jeek-high-resolution-logo-transparent.png" alt="Jeek Logo" class="me-2" style="height: 100px; width: 120px;">
                <span class="fs-4 text-white"></span>
            </div>

            <div class="flex-grow-1 mx-3">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search for items..." aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </form>
            </div>

            <!-- Updated Navbar with Dropdown -->
            <nav class="d-flex align-items-center">
                <ul class="nav me-3">
                    <li class="nav-item"><a href="logged-HomePage.php" class="nav-link text-white">Home</a></li>
                    <li class="nav-item"><a href="logged-categories.php" class="nav-link text-white">Categories</a></li>
                    <li class="nav-item"><a href="logged-about.php" class="nav-link text-white">About</a></li>
                    <li class="nav-item"><a href="logged-contact.php" class="nav-link text-white">Contact Us</a></li>
                </ul>

                <?php
                session_start();
                if (isset($_SESSION['username'])):
                ?>
                    <!-- Dropdown menu for logged-in user -->
                    <div class="dropdown">
                        <button
                            class="btn btn-outline-light dropdown-toggle"
                            type="button"
                            id="userDropdown"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            <?= $_SESSION['username'] ?> <i class="bi bi-person-circle"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                            <li><a class="dropdown-item" href="MyItems.php">My Items</a></li>
                            <li><a class="dropdown-item" href="Favorites.php">Favorites</a></li>
                            <li><a class="dropdown-item" href="NewItem.php">List New Item</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="HomePage.php">Sign Out</a></li>
                        </ul>
                    </div>
                <?php
                else:
                ?>
                    <button class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#signInModal">Login</button>
                <?php
                endif;
                ?>
            </nav>
        </div>
    </header>

        <main class="container-fluid flex-grow-1">
            <div class="row">
                <div class="col-md-2 shadow">
                    <!-- Sidebar -->
                    <div class="nav nav-pills d-flex flex-column flex-shrink-0 text-light text-center">
                        <ul class="flex-column mb-auto p-0 py-2" style="font-size: 1.5rem; color: black">
                            <!-- List of links to key pages -->
                            <li class="nav-item">
                                <div class="row">
                                    <a href="Profile.php" class="icon-link nav-link" aria-current="page">
                                        <i class="bi bi-person-vcard display-5 mb-2" style="margin-right: 10px"></i>
                                        Profile
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="row">
                                    <a href="#" class="icon-link nav-link active" aria-current="page">
                                        <i class="bi bi-box display-6 mb-2" style="margin-right: 10px"></i>
                                        My Items
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="row">
                                    <a href="Favorites.php" class="icon-link nav-link" aria-current="page">
                                        <i class="bi bi-bookmark-heart display-6 mb-2" style="margin-right: 10px"></i>
                                        Favorites
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="row">
                                    <a href="NewItem.php" class="icon-link nav-link" aria-current="page">
                                        <i class="bi bi-plus-square display-6 mb-2" style="margin-right: 10px"></i>
                                        List New Item
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="list" class="col-md-10 p-lg-5" style="padding-bottom: 200px">
                    <!-- Items List, each row represents 1 item -->
                    <!-- Rows are gonna be created using js. Rows below are samples -->
                    <div class="text-start mb-2" style="font-size: large">Number of listed items: <span id="numItems">3</span></div>
                    <div class="row">
                        <div class="card mb-2" style="max-height: 200px">
                            <div class="row g-0">
                                <div class="col-md-2">
                                    <img
                                        src="imgs/Chair.webp"
                                        class="img-fluid rounded-start"
                                        style="max-height: 200px; max-width: 200px"
                                        alt="item" />
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title pt-3">Fancy Chair</h5>
                                        <p class="card-text">Interiors</p>
                                    </div>
                                </div>
                                <div class="col-md-2 p-md-5">
                                    <div class="row pb-lg-4"><a href="#" class="btn btn-primary">View</a></div>
                                    <div class="row"><button name="remove" class="btn btn-danger">Remove</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card mb-2" style="max-height: 200px">
                            <div class="row g-0">
                                <div class="col-md-2">
                                    <img
                                        src="imgs/watch2.webp"
                                        class="img-fluid rounded-start"
                                        style="max-height: 200px; max-width: 200px"
                                        alt="item" />
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title pt-3">Golden Watch</h5>
                                        <p class="card-text">Watches</p>
                                    </div>
                                </div>
                                <div class="col-md-2 p-md-5">
                                    <div class="row pb-lg-4"><a href="#" class="btn btn-primary">View</a></div>
                                    <div class="row"><button name="remove" class="btn btn-danger">Remove</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card mb-2" style="max-height: 200px">
                            <div class="row g-0">
                                <div class="col-md-2">
                                    <img
                                        src="imgs/ring2.webp"
                                        class="img-fluid rounded-start"
                                        style="max-height: 200px; max-width: 200px"
                                        alt="item" />
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title pt-3">Diamond Ring</h5>
                                        <p class="card-text">Jewelry</p>
                                    </div>
                                </div>
                                <div class="col-md-2 p-md-5">
                                    <div class="row pb-lg-4"><a href="#" class="btn btn-primary">View</a></div>
                                    <div class="row"><button name="remove" class="btn btn-danger">Remove</button></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination Navigation -->
                    <nav aria-label="Items Navigation" id="paginationNav" style="display: none">
                        <ul class="pagination justify-content-center mt-3">
                            <li class="page-item disabled">
                                <button class="page-link" tabindex="-1">Previous</button>
                            </li>
                            <li class="page-item">
                                <button class="page-link">Next</button>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </main>

        <!-- Footer -->
<footer class="mt-auto bg-light py-4">
    <!-- Container to structure the footer content -->
    <div class="container">
        <div class="row">
            <!-- Links Section: Provides quick navigation to important pages -->
            <div class="col-md-4 footer-links">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <!-- List of links to key pages -->
                    <li><a href="logged-HomePage.php">Home</a></li>
                    <li><a href="logged-categories.php">Categories</a></li>
                    <li><a href="logged-about.php">About Us</a></li>
                    <li><a href="logged-contact.php">Contact Us</a></li>
                </ul>
            </div>

            <!-- Middle Section: Highlights specific product categories -->
            <div class="col-md-4 footer-links">
                <h5>Categories</h5>
                <ul class="list-unstyled">
                    <!-- Links to categories offered on the website -->
                    <li><a href="logged-art.php">Art</a></li>
                    <li><a href="logged-interiors.php">Interiors</a></li>
                    <li><a href="logged-jewelry.php">Jewelry</a></li>
                    <li><a href="logged-watches.php">Watches</a></li>
                    <li><a href="logged-coins.php">Coins & Stamps</a></li>
                    <li><a href="logged-bookss.php">Books & History</a></li>
                </ul>
            </div>

            <!-- Contact Details Section -->
            <div class="col-md-4">
                <h5>Contact Us</h5>
                <ul class="list-unstyled">
                    <!-- Phone numbers -->
                    <li><i class="bi bi-telephone me-2"></i>+966 (0) 55 1234567</li>
                    <li><i class="bi bi-telephone-fill me-2"></i>+966 (0) 0 1234567</li>
                    <!-- Email address with clickable link -->
                    <li>
                        <i class="bi bi-envelope me-2"></i>
                        <a href="mailto:info@storename.com" class="text-dark text-decoration-none">info@Jeek.com</a>
                    </li>
                    <!-- Website URL with clickable link -->
                    <li>
                        <i class="bi bi-globe me-2"></i>
                        <a href="https://www.storename.com" target="_blank" class="text-dark text-decoration-none">www.Jeek.com</a>
                    </li>
                </ul>

                <!-- Social Media Icons Section -->
                <div class="social-icons mt-3">
                    <!-- Instagram icon linking to Instagram profile -->
                    <a href="https://www.instagram.com" target="_blank"><i class="bi bi-instagram"></i></a>
                    <!-- WhatsApp icon linking to WhatsApp -->
                    <a href="https://www.whatsapp.com" target="_blank"><i class="bi bi-whatsapp"></i></a>
                    <!-- Twitter (X) icon linking to Twitter profile -->
                    <a href="https://www.x.com" target="_blank"><i class="bi bi-twitter"></i></a>
                </div>
            </div>
        </div>

        <!-- Footer bottom section with copyright -->
        <div class="text-center mt-3">
            <p>© 2024 Jeek. All Rights Reserved</p>
        </div>
    </div>
</footer>


        <!-- Bootstrap JS for interactivity -->
        <script src="general.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
<!-- wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww-->