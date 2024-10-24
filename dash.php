<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <script src="js/bootstrap.bundle.js"></script>
    <style>
        #outer {
            position: fixed;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            padding: 60px 30px 40px 60px;
            background-color: gray;

        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 60px;
            background-color: black;
            display: flex;
            justify-content: space-between;
        }

        #left {
            position: fixed;
            top: 60px;
            bottom: 30px;
            width: 50px;
            background-color: black;
            transition: width 2s ease;
            z-index: 9999;
            left: 0;
        }

        #check:checked~#left {
            width: 200px;

        }

        #check:checked~#right {
            width: 100%;

        }

        #right {
            position: fixed;
            top: 60px;
            bottom: 30px;
            left: 0;
            transition: all 0.8s linear;
            width: 0px;
            z-index: 999;
            background-color: rgba(0, 0, 0, 0.5);
        }

        #left ul {
            list-style: none;
            padding: 0;

        }

        #left ul li {
            padding: 15px;
        }

        #left ul li a {
            text-decoration: none;
            color: white;
            display: flex;
        }

        #left ul li a span {
            display: inline-block;
            overflow: hidden;
            width: 0;
            transition: all 2s ease;
        }

        #check:checked~#left>ul li a span {
            width: 150px;
            padding-left: 20px;


        }

        #body {
            position: fixed;
            top: 60px;
            right: 0px;
            bottom: 40px;
            left: 60px;
            width: auto !important;

        }

        .card {
            z-index: 99;
            height: 100%;

        }

        #check:checked~#left ul li.dropdown:hover>.dropdown-menu{
            display: block;
        }

        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            height: 30px;
            background-color: black;
            display: flex;
        }
    </style>
</head>

<body>
    <div id="outer">
        <header>
            <span class="pt-2 ps-2"> <label for="check" class="btn btn-outline-light"><i
                        class="bi bi-list"></i></label></span>
                        <h1 class="text-light">Admin</h1>
                        <span class="pt-2 pe-2">  <button class="btn p-0  rounded-circle btn-outline-light" ><img src="neha.jpeg" class=" rounded-circle" style="height:45px;width:45px"/></button></span>
        </header>
        <main>
            <input type="checkbox" id="check" hidden />
            <div id="left">
                <ul>
                    <li><a href=#><i class="bi bi-house-door"></i><span>Dashboard</span></a></li>
                    <li><a href=#><i class="bi bi-person-circle"></i><span>Users</span></a></li>
                    <li><a href=#><i class="bi bi-app-indicator"></i><span>Categories</span></a></li>
                    <li><a href=#><i class="bi bi-bag-check"></i><span>Products</span></a></li>
                    <li class="dropdown"><a href="#"><i class="bi bi-box-arrow-right"></i><span>Admin</span></a>
                            <ul class="dropdown-menu bg-dark">
                                <li><a href="#">Change Password</a></li>
                                <li><a href="#" class="ps-2"><i class="bi bi-box-arrow-right"></i>Logout</a></li>
                                <li></li>
                            </ul>
                        </li>
                </ul>

            </div>
            <div id="right"></div>
            <div class=" container-fluid overflow-y-auto " id="body">
                <div class="row">
                    <div class="col-sm-6 col-lg-4 col-xl-3 mx-auto p-3">
                        <div class="card" style="min-height: 200px;">

                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 mx-auto p-3">
                        <div class="card" style="min-height: 200px;"></div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 mx-auto p-3">
                        <div class="card" style="min-height: 200px;"></div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 mx-auto p-3">
                        <div class="card" style="min-height: 200px;"></div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 mx-auto p-3">
                        <div class="card" style="min-height: 200px;"></div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 mx-auto p-3">
                        <div class="card" style="min-height: 200px;"></div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 mx-auto p-3">
                        <div class="card" style="min-height: 200px;"></div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 mx-auto p-3">
                        <div class="card" style="min-height: 200px;"></div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 mx-auto p-3">
                        <div class="card" style="min-height: 200px;"></div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 mx-auto p-3">
                        <div class="card" style="min-height: 200px;"></div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 mx-auto p-3">
                        <div class="card" style="min-height: 200px;"></div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 mx-auto p-3">
                        <div class="card" style="min-height: 200px;"></div>
                    </div>
                </div>
            </div>
        </main>
        <footer></footer>
    </div>
</body>

</html>