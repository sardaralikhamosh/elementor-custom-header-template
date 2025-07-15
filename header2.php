<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Design</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style type="text/css">
        .customheader {
            background: #fff;
            padding: 15px 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .Button-custom {
            border-radius: 5px;
            background-color: #F48120;
            color: #fff !important;
            border: none;
            padding: 8px 20px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
        }
        .navbar-brand img {
            max-height: 50px;
            width: auto;
        }
        .desktop-menu {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            list-style: none;
            margin: 0;
            padding: 0;
            gap: 20px;
        }
        .desktop-menu li {
            margin-left: 20px;
        }
        .desktop-menu a {
            color: #333;
            text-decoration: none;
            font-weight: 400;
            transition: all 0.3s ease;
        }
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 24px;
            color: #333;
            cursor: pointer;
            float:right; /*this is for shifting the humberger button of dropdown button on mobile devices */
        }
        .mobile-menu {
            display: none;
            position: absolute;
            top: 85px;
            right: 0;
            background: #fff;
            box-shadow: 0 5px 10px rgba(0,0,0,0.1);
            border-radius: 5px;
            z-index: 1000;
            width: 100%;
            padding: 10px 10px;
        }
        .mobile-menu.show {
            display: block;
        }
        .mobile-menu a {
            display: block;
            padding: 10px 15px;
            color: #333;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .mobile-menu a:hover {
            background: #a5cd39 !important;
            color: #F48120;
        }
        @media (max-width: 991px) {
            .desktop-menu {
                display: none;
            }
            .mobile-menu-btn {
                display: block;
            }
        }
        @media (min-width: 992px) {
            .mobile-menu {
                display: none !important;
            }
            .customheader {
                border-radius: 50px;
            }
        }
    </style>
</head>
<body>
    <section class="customheader">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-6 col-md-4">
                    <a class="navbar-brand" href="https://sepalfoundation.dezinegenius.com">
                        <img src="https://sepalfoundation.dezinegenius.com/wp-content/uploads/2025/07/logo.png" alt="Logo">
                    </a>
                </div>
                <div class="col-6 col-md-8">
                    <!-- Desktop Menu -->
                    <ul class="desktop-menu">
                        <li><a href="https://sepalfoundation.dezinegenius.com">Home</a></li>
                        <li><a href="https://sepalfoundation.dezinegenius.com/about">About</a></li>
                        <li><a href="https://sepalfoundation.dezinegenius.com/our-work">Our Work</a></li>
                        <li><a href="https://sepalfoundation.dezinegenius.com/our-teams/">Teams</a></li>
                        <li><a href="https://sepalfoundation.dezinegenius.com/contact">Contact</a></li>
                        <li><a class="Button-custom" href="https://sepalfoundation.dezinegenius.com/contact">Get In Touch</a></li>
                    </ul>
                    
                    <!-- Mobile Menu Button -->
                    <button class="mobile-menu-btn" id="mobileMenuBtn">
                        <i class="fas fa-bars"></i>
                    </button>
                    
                    <!-- Mobile Menu Dropdown -->
                    <div class="mobile-menu" id="mobileMenu">
                        <a href="https://sepalfoundation.dezinegenius.com">Home</a>
                        <a href="https://sepalfoundation.dezinegenius.com/about">About</a>
                        <a href="https://sepalfoundation.dezinegenius.com/our-work">Our Work</a>
                        <a href="https://sepalfoundation.dezinegenius.com/our-teams/">Teams</a>
                        <a href="https://sepalfoundation.dezinegenius.com/contact">Contact</a>
                        <a class="Button-custom" href="https://sepalfoundation.dezinegenius.com/contact" style="margin: 10px 15px; display: inline-block;">Get In Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            const mobileMenu = document.getElementById('mobileMenu');
            
            if (mobileMenuBtn && mobileMenu) {
                mobileMenuBtn.addEventListener('click', function(e) {
                    e.stopPropagation(); // Prevent the click from bubbling up
                    mobileMenu.classList.toggle('show');
                });
                
                // Close menu when clicking outside
                document.addEventListener('click', function() {
                    mobileMenu.classList.remove('show');
                });
                
                // Prevent menu from closing when clicking inside it
                mobileMenu.addEventListener('click', function(e) {
                    e.stopPropagation();
                });
            }
        });
    </script>
</body>
</html>