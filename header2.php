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
    <style>
        .header-container {
            background-color: #fff;
            border-radius: 50px; /* Adjust this value to make it more/less circular */
            padding: 15px 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin: 20px auto;
            max-width: 95%;
        }
        
        .navbar {
            padding: 0;
            background-color: transparent !important;
        }
        
        .navbar-brand img {
            height: 40px;
            width: auto;
        }
        
        .header-right-content {
            display: flex;
            align-items: center;
            gap: 25px;
        }
        
        .header-text {
            font-size: 14px;
            color: #333;
            font-weight: 500;
            white-space: nowrap;
        }
        
        .dropdown-toggle::after {
            display: none;
        }
        
        .dropdown-menu {
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
        }
        
        /* Mobile styles */
        @media (max-width: 991.98px) {
            .header-container {
                border-radius: 30px;
                padding: 15px 20px;
            }
            
            .navbar-collapse {
                background-color: transparent;
                padding: 15px 0;
                margin-top: 15px;
            }
            
            .header-right-content {
                flex-direction: column;
                align-items: flex-start;
                gap: 12px;
                padding-top: 10px;
            }
            
            .navbar-toggler {
                border: none;
                padding: 5px;
                background-color: #f8f9fa;
                border-radius: 50%;
                width: 40px;
                height: 40px;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="header-container">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                            <!-- Logo -->
                            <a class="navbar-brand" href="#">
                                <img src="https://sepalfoundation.dezinegenius.com/wp-content/uploads/2025/07/logo.png" alt="Logo">
                            </a>
                            
                            <!-- Mobile toggle button -->
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fas fa-bars"></i>
                            </button>
                            
                            <!-- Navigation content -->
                            <div class="collapse navbar-collapse" id="navbarContent">
                                <div class="header-right-content ms-auto">
                                    <span class="header-text">sepals</span>
                                    <span class="header-text">tone</span>
                                    
                                    <!-- Dropdown menu -->
                                    <div class="dropdown">
                                        <a class="header-text dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            Aint Baton
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                    
                                    <span class="header-text">wma coat</span>
                                    <span class="header-text">ESE</span>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>