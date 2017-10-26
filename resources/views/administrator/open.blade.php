<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Jobs - Best choice for you</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="../css/mdb.min.css" rel="stylesheet">

    <!-- Template styles -->
    <style rel="stylesheet"> 
        /* TEMPLATE STYLES */
        
        html,
        body, 
        .view {
            height: 100%;
        }
        /* Navigation*/
        
        .navbar {
            background-color: transparent;
        }
        
        .scrolling-navbar {
            -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
            -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
            transition: background .5s ease-in-out, padding .5s ease-in-out;
        }
        
        .top-nav-collapse {
            background-color: #1C2331;
        }
        
        footer.page-footer {
            background-color: #1C2331;
            margin-top: -1px;
        }
        
        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #1C2331;
            }
        }
        .navbar .btn-group .dropdown-menu a:hover {
            color: #000 !important;
        }
        .navbar .btn-group .dropdown-menu a:active {
            color: #fff !important;
        }
        /*Call to action*/
        
        .flex-center {
            color: #fff;
        }
        
        .view {
            background: url("https://mdbootstrap.com/img/Photos/Others/img%20(50).jpg")no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>

</head>

<body>

    <!--Navbar    https://mdbootstrap.com/img/Photos/Others/img%20(50).jpg-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <div class="container">
                <a class="navbar-brand" href="#"> <h3> <b>Jobs</b></h3> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-sm-2">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home<span ></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin">Menu</a>
                        </li>
                        
                        @if (Sentinel::check())
                        <li class="nav-item">
                            <a  class="nav-link" >Wellcome {!! Sentinel::getUser()->first_name !!}</a>
                           
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" name="logout" href="/logout">logout</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" name="signup" href="/signup">Register </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" name="signin" href="/login">Login</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

    <!--/.Navbar-->

    <!--Mask-->
    <div class="view hm-black-light">
        <div class="full-bg-img flex-center">
    <div class="card animated fadeInUp" style="width:600px;">
        <div class="card-body mx-4">

            <div class="text-center">

                <h3 class="pink-text mb-5"><strong>Profile</strong></h3>
            </div>
            <div clas="text" style="color:black;"> 
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td>{!! $applicant->name !!}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>{!! $applicant->email !!}</td>
                    </tr>
                    <tr>
                        <td>Contact</td>
                        <td>:</td>
                        <td>{!! $applicant->contact !!}</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>:</td>
                        <td>{!! $applicant->address !!}</td>
                    </tr>
                </tbody>
                </table>                 
            </div>
            <button type="button" class="btn btn-deep-purple" onclick="window.history.back()">Back</button>
    </div>
    </div>
    </div>
    <!-- JQuery -->
    <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>

    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="../js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>


</body>

</html>
