<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Best PG's in Delhi| PG Life</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap"
        rel="stylesheet" />
    <link href="css/common.css" rel="stylesheet" />
    <link href="css/property_list.css" rel="stylesheet" />
</head>

<body>
    <div class="header sticky-top">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.png" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            

        </nav>
    </div>

    <div id="loading">
    </div>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-2">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Delhi
            </li>
        </ol>
    </nav>
    <div class="property-card row">
        <div class="image-container col-md-4">
            <img src="img/properties/1/download.jpg" />
        </div>
        <div class="content-container col-md-8">
            <div class="row no-gutters justify-content-between">
                <div class="star-container" title="4.5">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
            <div class="detail-container">
                <div class="property-name">Navkar Paying Guest</div>
                <div class="property-address">Kali Nagar, Near unniversal public school, Mahavir Enclave</div>
                <div class="property-gender">
                    <img src="img/male.png" />
                </div>
            </div>
            <div class="row no-gutters">
                <div class="rent-container col-6">
                    <div class="rent">Rs 9,500/-</div>
                    <div class="rent-unit">per month</div>
                </div>
                <div class="button-container col-6">
                    <a href="property_detail2.php" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>
    </div>

    <div class="property-card row">
        <div class="image-container col-md-4">
            <img src="img/properties/1/images.jpg" />
        </div>
        <div class="content-container col-md-8">
            <div class="row no-gutters justify-content-between">
                <div class="star-container" title="4.8">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <div class="detail-container">
                <div class="property-name">Ganpati Paying Guest</div>
                <div class="property-address">28A/6/1, Jia Sarai, Near IIT Delhi gate, Hauz Khas, New Delhi, Jia Sarai, Hauz Khas
</div>
                <div class="property-gender">
                    <img src="img/unisex.png" />
                </div>
            </div>
            <div class="row no-gutters">
                <div class="rent-container col-6">
                    <div class="rent">Rs 8,500/-</div>
                    <div class="rent-unit">per month</div>
                </div>
                <div class="button-container col-6">
                    <a href="property_detail3.php" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>
    </div>

    <div class="property-card row">
        <div class="image-container col-md-4">
            <img src="img/properties/1/46ebbb537aa9fb0a.jpg" />
        </div>
        <div class="content-container col-md-8">
            <div class="row no-gutters justify-content-between">
                <div class="star-container" title="3.5">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
            <div class="detail-container">
                <div class="property-name">PG for Girls Borivali West</div>
                <div class="property-address">Block K , Near Subway, Kalkaji

                </div>
                <div class="property-gender">
                    <img src="img/female.png" />
                </div>
            </div>
            <div class="row no-gutters">
                <div class="rent-container col-6">
                    <div class="rent">Rs 8,000/-</div>
                    <div class="rent-unit">per month</div>
                </div>
                <div class="button-container col-6">
                    <a href="property_detail.php" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="filter-modal" tabindex="-1" role="dialog" aria-labelledby="filter-heading"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="filter-heading">Filters</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="signup-heading"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signup-heading">Signup with PGLife</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form id="signup-form" class="form" role="form">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="full_name" placeholder="Full Name"
                                maxlength="30" required>
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-phone-alt"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="phone" placeholder="Phone Number"
                                maxlength="10" minlength="10" required>
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </div>
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </div>
                            <input type="password" class="form-control" name="password" placeholder="Password"
                                minlength="6" required>
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-university"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="college_name" placeholder="College Name"
                                maxlength="150" required>
                        </div>

                        <div class="form-group">
                            <span>I'm a</span>
                            <input type="radio" class="ml-3" id="gender-male" name="gender" value="male" /> Male
                            <label for="gender-male">
                            </label>
                            <input type="radio" class="ml-3" id="gender-female" name="gender" value="female" />
                            <label for="gender-female">
                                Female
                            </label>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">Create Account</button>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <span>Already have an account?
                        <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#login-modal">Login</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-heading"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="login-heading">Login with PGLife</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form id="login-form" class="form" role="form">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </div>
                            <input type="password" class="form-control" name="password" placeholder="Password"
                                minlength="6" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">Login</button>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <span>
                        <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#signup-modal">Click here</a>
                        to register a new account
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="page-container footer-container">
            <div class="footer-cities">
                <div class="footer-city">
                    <a href="property_list.php">PG in Delhi</a>
                </div>
                <div class="footer-city">
                    <a href="property_list1.php">PG in Mumbai</a>
                </div>
                <div class="footer-city">
                    <a href="property_list2.php">PG in Bangalore</a>
                </div>
                <div class="footer-city">
                    <a href="property_list3.php">PG in Hyderabad</a>
                </div>
            </div>
            <div class="footer-copyright">© 2020 Copyright PG Life </div>
        </div>
    </div>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>