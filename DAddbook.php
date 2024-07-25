<?php
ob_start();
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
                    <?php
                    if (isset($_POST['bId'], $_POST['bTitle'], $_POST['bAuthor'], $_POST['bisbn'], $_POST['bstatus'], $_POST['bpublicationyear'], $_POST['bmedium'], $_POST['bcategory'])) {
                        $bId = $_POST['bId'];
                        $bTitle = $_POST['bTitle'];
                        $bAuthor = $_POST['bAuthor'];
                        $bisbn = $_POST['bisbn'];
                        $bstatus = $_POST['bstatus'];
                        $bpublicationyear = $_POST['bpublicationyear'];
                        $bmedium = $_POST['bmedium'];
                        $bcategory = $_POST['bcategory'];

                        try {
                            $con = $dbcon->getConnection();
                            $query = "INSERT INTO book VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
                            $pstmt = $con->prepare($query);
                            $pstmt->bindValue(1, $bId);
                            $pstmt->bindValue(2, $bTitle);
                            $pstmt->bindValue(3, $bAuthor);
                            $pstmt->bindValue(4, $bisbn);
                            $pstmt->bindValue(5, $bstatus);
                            $pstmt->bindValue(6, $bpublicationyear);
                            $pstmt->bindValue(7, $bmedium);
                            $pstmt->bindValue(8, $bcategory);
                            $pstmt->execute();
                            if (($pstmt->rowCount()) > 0) {
                                header("Location: Dashboard.php");
                                ob_end_flush();
                            } else {
                                ?>
                                <div class="alert alert-danger" role="alert">
                                    Error, try again.
                                </div>
                                <?php
                            }
                        } catch (PDOException $exc) {
                            ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $exc->getMessage(); ?>
                            </div>
                            <?php
                        }
                    }
                    ?>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div id="cardStyle" class="card mx-auto shadow p-3 mb-5 bg-body rounded" style="width: 50%;;">
                            <div class="card-header text-center"><h4 style="color: #008080;">ADD NEW BOOK</h4></div>
                            <div class="card-body">
                                <div class="card-body">
                                    <div class="form-group my-2">
                                        <label for="bId">Book Id :</label>
                                        <input type="text" id="bId" class="form-control" name="bId"/> 
                                    </div>
                                    <div class="form-group my-2">
                                        <label for="bTitle">Book Title :</label>
                                        <input type="text" id="bTitle" class="form-control"name="bTitle"/> 
                                    </div>
                                    <div class="form-group my-2">
                                        <label for="bAuthor">Book Author :</label>
                                        <input type="text" id="bAuthor" class="form-control" name="bAuthor"/>
                                    </div>
                                    <div class="form-group my-2">
                                        <label for="bisbn">Book ISBN :</label>
                                        <input type="text" id="bisbn" class="form-control" name="bisbn"/>
                                    </div>
                                    <div class="form-group my-2">
                                        <label for="bstatus">Book Status :</label>
                                        <select id="bstatus" name="bstatus" class="form-control">
                                            <option value="">--Book Status--</option>
                                            <option value="Available">Available</option>
                                            <option value="Reserved">Reserved</option>
                                            <option value="Borrowed">Borrowed</option>
                                        </select>
                                    </div>
                                    <div class="form-group my-2">
                                        <label for="bpublicationyear">Publication year :</label>
                                        <input type="number" id="bpublicationyear" class="form-control" name="bpublicationyear"/>
                                    </div>
                                    <div class="form-group my-2">
                                        <label for="bmedium">Book Medium :</label>
                                        <select id="bmedium" name="bmedium" class="form-control">
                                            <option value="">--Select Medium--</option>
                                            <option value="English">English</option>
                                            <option value="Tamil">Tamil</option>
                                            <option value="Sinhala">Sinhala</option>
                                        </select>
                                    </div>
                                    <div class="form-group my-2">
                                        <label for="bcategory">Book Category :</label>
                                        <select id="bcategory" name="bcategory" class="form-control">
                                            <option value="">--Select Category--</option>
                                            <option value="Progamming Book">Progamming Book</option>
                                            <option value="Story Book">Story Book</option>
                                            <option value="Liteature Book">Liteature Book</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="mt-3 btn btn-secondary btn-lg btn-block form-control">ADD BOOK</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </main>
            <!-- End Main -->

        </div>

        <script src="./assets/js/jquery.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
        <script src="./assets/js/DScript.js"></script>

    </body>
</html>