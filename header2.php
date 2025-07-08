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
        .customheader{
            background: #fff;
        }
        .Button-custom{
            background-color:#F48120 ;
            color: #333;
        }
        @media screen and (min-width:624px){
            .customheader{
                border: 1px solid #fff;
                border-radius: 50%;
            }
        }
    </style>
</head>
<body>
    <section class="customheader">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-6">
                     <a class="navbar-brand" href="https://sepalfoundation.dezinegenius.com">
                                <img src="https://sepalfoundation.dezinegenius.com/wp-content/uploads/2025/07/logo.png" alt="Logo">
                        </a>
                </div>
                <div class="col-md-8 col-lg-8 col-sm-6">
                     <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="https://sepalfoundation.dezinegenius.com">Home</a></li>
                        <li><a class="dropdown-item" href="https://sepalfoundation.dezinegenius.com/about">About</a></li>
                        <li><a class="dropdown-item" href="https://sepalfoundation.dezinegenius.com/news-and-services">News & Services</a></li>
                        <li><a class="dropdown-item" href="https://sepalfoundation.dezinegenius.com/contact">Contact</a></li>
                        <li><a class="dropdown-item Button-custom" href="https://sepalfoundation.dezinegenius.com/contact">Donate Now</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</body>
</html>