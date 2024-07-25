<?php
require './classes/DbConnector.php';

use classes\DbConnector;

$dbcon = new DbConnector();
?>

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
                    <!--<a><span class="material-icons-outlined">search</span></a>-->
                </div>
                <div class="header-right">
                    <span class="material-icons-outlined m-2">account_circle</span>Lilani Ranjan
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

            <?php
            $total_book = 0;
            $borrowed_book = 0;
            $reserved_book = 0;
            $available_book = 0;

            $con = $dbcon->getConnection();
            $query = "SELECT * FROM book";
            $pstmt = $con->prepare($query);
            $pstmt->execute();
            $rs = $pstmt->fetchAll(PDO::FETCH_OBJ);
            $i = 1;

            foreach ($rs as $book) {
                $total_book++;
                if (($book->Availability_Status) == "Available") {
                    $available_book++;
                } elseif (($book->Availability_Status) == "Borrowed") {
                    $borrowed_book++;
                } else {
                    $reserved_book++;
                }
            }
            ?>
            <!-- Main -->
            <main class="main-container">
                <div class="main-title">
                    <p class="font-weight-bold">VIEW BOOK</p>
                </div>

                <div class="main-cards">

                    <div class="cardss">
                        <div class="cardss-inner">
                            <p class="textPrimary">TOTAL BOOK</p>
                            <span class="material-icons-outlined text-blue"><i class="fa fa-book" aria-hidden="true"></i></span>
                        </div>
                        <span class="textPrimary font-weight-bold"><?php echo $total_book; ?></span>
                    </div>

                    <div class="cardss">
                        <div class="cardss-inner">
                            <p class="textPrimary">BORROWED BOOK</p>
                            <span class="material-icons-outlined text-orange"><i class="fa fa-suitcase" aria-hidden="true"></i></span>
                        </div>
                        <span class="textPrimary font-weight-bold"><?php echo $borrowed_book; ?></span>
                    </div>

                    <div class="cardss">
                        <div class="cardss-inner">
                            <p class="textPrimary">RESERVED BOOK</p>
                            <span class="material-icons-outlined text-green"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                        </div>
                        <span class="textPrimary font-weight-bold"><?php echo $reserved_book; ?></span>
                    </div>

                    <div class="cardss">
                        <div class="cardss-inner">
                            <p class="textPrimary">AVAILABLE BOOK</p>
                            <span class="material-icons-outlined text-red"><i class="fa fa-book" aria-hidden="true"></i></span>
                        </div>
                        <span class="textPrimary font-weight-bold"><?php echo $available_book;?></span>
                    </div>

                </div>

                <div class="charts">

                    <div class="charts-cardss table-responsive">
                        <div class="d-inline d-flex justify-content-end mx-3">
                            <a href="DAddbook.php" data-toggle="modal" class="btn btn-outline-info" role="button" aria-pressed="true">ADD NEW</a>
                        </div>
                        <h5 class="card-title mt-4">
<!--                            <form class="input-group" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
                                <input name="values" type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                <button type="submit" class="btn btn-outline-primary">search</button>
                            </form>-->
                        </h5>
                        <table class="table table-hover table-responsive-md mt-4">
                            <thead class="text-center table-success py-2">
                                <tr>
                                    <th scope="col" class="text-center">No.</th>
                                    <th scope="col">Book ID</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">ISBN</th>
                                    <th scope="col">Availability Status</th>
                                    <th scope="col">Publication year</th>
                                    <th scope="col">Medium</th>
                                    <th scope="col">Category</th>
                                    <th scope="col" colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php
                                try {
                                    $con = $dbcon->getConnection();
                                    $query = "SELECT * FROM book";
                                    $pstmt = $con->prepare($query);
                                    $pstmt->execute();
                                    $rs = $pstmt->fetchAll(PDO::FETCH_OBJ);
                                    $i = 1;
                                    foreach ($rs as $book) {
                                        $total_book++;
                                        if (($book->Availability_Status) == "Available") {
                                            $available_book++;
                                        } elseif (($book->Availability_Status) == "Borrowed") {
                                            $borrowed_book++;
                                        } else {
                                            $reserved_book++;
                                        }
                                        ?>
                                        <tr>
                                            <td><?php echo "$i"; ?></td>
                                            <th scope="row"><?php echo $book->Book_Id; ?></th>
                                            <td><?php echo $book->Title; ?></td>
                                            <td><?php echo $book->Author; ?></td>
                                            <td><?php echo $book->ISBN; ?></td>
                                            <td><?php echo $book->Availability_Status; ?></td>
                                            <td><?php echo $book->Publication_year; ?></td>
                                            <td><?php echo $book->Medium; ?></td>
                                            <td><?php echo $book->Category; ?></td>
                                            <td><a href="updateAddBook.php?id=<?php echo $book->Book_Id; ?>"><button id="iconColour" style=""><i class="fa fa-pencil-square" aria-hidden="true"></i></button></a></td>
                                            <td><a href="deleteBook.php?id=<?php echo $book->Book_Id; ?>"><button id="iconColour"><i class="fa fa-trash" aria-hidden="true"></i></button></a></td>
                                        </tr>
                                        <?php
                                        $i++;
                                    }
                                } catch (PDOException $exc) {
                                    echo $exc->getMessage();
                                }
                                ?>

                            </tbody>
                        </table>
                        <h5 class="card-title mt-3">
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
                        </h5>
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