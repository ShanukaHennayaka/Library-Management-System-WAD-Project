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
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

        <style>
            #iconColour{
                border: none;
                color: #964B00;
            }
            
            .pagination>li>a {
                background-color: #ADD8E6;
                border-color: #F0F8FF;
                color: #000000;
            }
        </style>
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
                    <p class="font-weight-bold">VIEW BOOK</p>
                </div>

                <div class="main-cards">

                    <div class="cardss">
                        <div class="cardss-inner">
                            <p class="textPrimary">TOTAL USERS</p>
                            <span class="material-icons-outlined text-blue"><i class="fa fa-users" aria-hidden="true"></i></span>
                        </div>
                        <span class="textPrimary font-weight-bold">549</span>
                    </div>

                    <div class="cardss">
                        <div class="cardss-inner">
                            <p class="textPrimary">ADMIN USER</p>
                            <span class="material-icons-outlined text-orange"><i class="fa fa-users" aria-hidden="true"></i></span>
                        </div>
                        <span class="textPrimary font-weight-bold">83</span>
                    </div>

                    <div class="cardss">
                        <div class="cardss-inner">
                            <p class="textPrimary">STUDENT USER</p>
                            <span class="material-icons-outlined text-green"><i class="fa fa-users" aria-hidden="true"></i></span>
                        </div>
                        <span class="textPrimary font-weight-bold">79</span>
                    </div>

                </div>

                <div class="charts">

                    <div class="charts-cardss table-responsive">
                        <table class="table table-hover table-responsive-md">
                            <thead class="text-center table-success py-2">
                                <tr>
                                    <th scope="col" class="text-center">Entrolmrnt no :</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">NIC</th>
                                    <th scope="col">Phone no</th>
                                    <th scope="col" colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>UWU/IIT/20/001</td>
                                    <td>Lilaniya</td>
                                    <td>ranjanlilani@gmail.com</td>
                                    <td>Lilani</td>
                                    <td>200065202888</td>
                                    <td>0772298307</td>
                                    <td><button id="iconColour" style=""><i class="fa fa-pencil-square" aria-hidden="true"></i></button></td>
                                    <td><button id="iconColour"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                </tr>
                                <tr>
                                    <td>UWU/IIT/20/001</td>
                                    <td>Lilaniya</td>
                                    <td>ranjanlilani@gmail.com</td>
                                    <td>Lilani</td>
                                    <td>200065202888</td>
                                    <td>0772298307</td>
                                    <td><button id="iconColour" style=""><i class="fa fa-pencil-square" aria-hidden="true"></i></button></td>
                                    <td><button id="iconColour"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                </tr>
                                <tr>
                                    <td>UWU/IIT/20/001</td>
                                    <td>Lilaniya</td>
                                    <td>ranjanlilani@gmail.com</td>
                                    <td>Lilani</td>
                                    <td>200065202888</td>
                                    <td>0772298307</td>
                                    <td><button id="iconColour" style=""><i class="fa fa-pencil-square" aria-hidden="true"></i></button></td>
                                    <td><button id="iconColour"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                </tr>
                                <tr>
                                    <td>UWU/IIT/20/001</td>
                                    <td>Lilaniya</td>
                                    <td>ranjanlilani@gmail.com</td>
                                    <td>Lilani</td>
                                    <td>200065202888</td>
                                    <td>0772298307</td>
                                    <td><button id="iconColour" style=""><i class="fa fa-pencil-square" aria-hidden="true"></i></button></td>
                                    <td><button id="iconColour"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                </tr>
                                <tr>
                                    <td>UWU/IIT/20/001</td>
                                    <td>Lilaniya</td>
                                    <td>ranjanlilani@gmail.com</td>
                                    <td>Lilani</td>
                                    <td>200065202888</td>
                                    <td>0772298307</td>
                                    <td><button id="iconColour" style=""><i class="fa fa-pencil-square" aria-hidden="true"></i></button></td>
                                    <td><button id="iconColour"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                </tr>
                                <tr>
                                    <td>UWU/IIT/20/001</td>
                                    <td>Lilaniya</td>
                                    <td>ranjanlilani@gmail.com</td>
                                    <td>Lilani</td>
                                    <td>200065202888</td>
                                    <td>0772298307</td>
                                    <td><button id="iconColour" style=""><i class="fa fa-pencil-square" aria-hidden="true"></i></button></td>
                                    <td><button id="iconColour"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                </tr>
                            </tbody>
                            <tfoot>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            </tfoot>
                        </table>
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