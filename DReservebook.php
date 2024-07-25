<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Admin Dashboard</title>

        <!-- Bootstrap Link -->
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

        <!-- Montserrat Font -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="./assets/css/DashboardStyle.css">

        <!-- Fontawesome Icon -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="grid-container">

            <!-- Header -->
            <header class="header">
                <div class="menu-icon" onclick="openSidebar()">
                    <span class="material-icons-outlined">menu</span>
                </div>
                <div class="header-left">
                    <a><span class="material-icons-outlined">search</span></a>
                </div>
                <div class="header-right">
                    <span class="material-icons-outlined">account_circle</span>
                </div>
            </header>
            <!-- End Header -->

            <!-- Sidebar -->
            <aside id="sidebar">
                <div class="sidebar-title">
                    <div class="sidebar-brand">
                        <span class="material-icons-outlined"><i class="fa fa-building-o" aria-hidden="true"></i></span> ADMIN PANEL
                    </div>
                    <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
                </div>

                <ul class="sidebar-list">
                    <li class="" style="padding: 20px 20px 20px 20px;">
                        <a href="#" style="text-decoration: none; color: #9799ab;">
                            <span class="material-icons-outlined"><i class="fa fa-users" aria-hidden="true"></i></span> USER
                        </a>
                    </li>
                    <li class="sidebar-list-item">
                        <a href="DAdduser.php">
                            <span class="material-icons-outlined px-2"><i class="fa fa-angle-right" aria-hidden="true"></i></span> Add User
                        </a>
                    </li>
                    <li class="sidebar-list-item">
                        <a href="DViewuser.php">
                            <span class="material-icons-outlined px-2"><i class="fa fa-angle-right" aria-hidden="true"></i></span> View User
                        </a>
                    </li>
                    <li class="" style="padding: 20px 20px 20px 20px;">
                        <a href="#" style="text-decoration: none; color: #9799ab;">
                            <span class="material-icons-outlined"><i class="fa fa-book" aria-hidden="true"></i></span> BOOK
                        </a>
                    </li>
                    <li class="sidebar-list-item">
                        <a href="DAddbook.php">
                            <span class="material-icons-outlined px-2"><i class="fa fa-angle-right" aria-hidden="true"></i></span> Add Book
                        </a>
                    </li>
                    <li class="sidebar-list-item">
                        <a href="Dashboard.php">
                            <span class="material-icons-outlined px-2"><i class="fa fa-angle-right" aria-hidden="true"></i></span> View Book
                        </a>
                    </li>
                    <li class="sidebar-list-item">
                        <a href="DBorrowbook.php">
                            <span class="material-icons-outlined px-2"><i class="fa fa-angle-right" aria-hidden="true"></i></span> Borrow Book
                        </a>
                    </li>
                    <li class="sidebar-list-item">
                        <a href="DReturnbook.php">
                            <span class="material-icons-outlined px-2"><i class="fa fa-angle-right" aria-hidden="true"></i></span> Return Book
                        </a>
                    </li>
                    <li class="sidebar-list-item">
                        <a href="DReservebook.php">
                            <span class="material-icons-outlined px-2"><i class="fa fa-angle-right" aria-hidden="true"></i></span> Reserve Book
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- End Sidebar -->

            <!-- Main -->
            <main class="main-container">
                <div class="main-title">
                    <p class="font-weight-bold"></p>
                </div>

                <div class="">

                    <div id="cardStyle" class="card mx-auto shadow p-5 mb-5 bg-body rounded my-5" style="width: 50%;;">
                        <div class="card-header text-center"><h4 style="color: #008080;">RESERVE BOOK</h4></div>
                        <div class="card-body">
                            <div class="card-body">
                                <div class="form-group my-2">
                                    <label for="entrolemtno">Entrolment No :</label>
                                    <input type="text" id="entrolemtno" class="form-control"/> 
                                </div>
                                <div class="form-group my-2">
                                    <label for="bId">Book Id :</label>
                                    <input type="text" id="bId" class="form-control" />
                                </div>
                                <div class="form-group my-2">
                                    <label for="BDueDate">Reservation Date :</label>
                                    <input type="date" id="BDueDate" class="form-control" />
                                </div>
                                <button type="submit" class="mt-3 btn btn-secondary btn-lg btn-block form-control">Reserve</button>
                            </div>
                        </div>
                    </div>

                </div>


            </main>
            <!-- End Main -->

        </div>

        <script src="./assets/js/jquery.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
        <script src="./assets/js/DScript.js"></script>

    </body>
</html>