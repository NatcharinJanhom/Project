<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('head.php'); ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
</head>
<style>
    a {
        color: #6c757d;
    }

    .sli {
        align-content: center;
        max-width: 250px;
        max-height: 250px;
        width: 100%;
        height: 100%;
    }

    .sa {
        align-content: center;
        max-width: 150px;
        max-height: 150px;
        width: 100%;
        height: 100%;
    }

    .tx {
        text-align: center;
    }
</style>

<body class="sidebar-icon-only">
    <div class="container-scroller">
        <?php include('navbar.php'); ?>
        <div class="container-fluid page-body-wrapper">
            <?php include('sidebar.php'); ?>
            <div class="main-panel">
                <div class="content-wrapper">


                    <div class="row">
                        <h2>Administrator</h2>&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="template-demo">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuSplitButton1" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-plus">New</i>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuSplitButton1" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(118px, 32px, 0px);">
                                    <a class="dropdown-item" href="createtitle.php">Create title</a>
                                    <a class="dropdown-item" href="createdetail.php">Create details</a>
                                    <a class="dropdown-item" href="createpicture.php">Create pictures</a>
                                </div>&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="userpage.php" class="button btn btn-primary">User UI</a>
                            </div>
                        </div>
                    </div>


                    <div id="showD" class="container">
                        <div class="row">
                            <div class="col-md-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class=" card-body">
                                        <h2 align='center'>Tomato detail</h2>
                                        <i class="far fa-edit"></i>
                                        <i class="fas fa-trash-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12 h-100">
                                <div class="bg-light p-4">

                                    <div id="profile-list-left" class="py-2">

                                        <div class="card rounded mb-2">
                                            <div class="card-body">


                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <img class="sli img-fluid w-100 rounded" src="pic/t2.jpg" alt="Sample Image">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <p style="padding: 10px 100px 10px 20px; ">
                                                            The Tomato History has origins traced back to the early Aztecs around 700 A.D; therefore it is believed that the tomato is
                                                            native to the Americas. It was not until around the 16th century
                                                            that Europeans were introduced to this fruit when the early explorers
                                                            set sail to discover new lands. Throughout Southern Europe, the
                                                            tomato was quickly accepted into the kitchen, yet as it moved
                                                            north, more resistance was apparent. The British, for example,
                                                            admired the tomato for its beauty, but believe that it was poisonous,
                                                            as its appearance was similar to that of the wolf peach.
                                                        </p>
                                                    </div>
                                                </div>


                                                <i class="fas fa-arrows-alt"></i>
                                                <i class="far fa-edit"></i>
                                                <i class="fas fa-trash-alt"></i>
                                            </div>
                                        </div>


                                        <div class="card rounded mb-2">
                                            <div class="card-body">

                                                <div class="row">

                                                    <div class="col-md-8">
                                                        <p style="padding: 10px 100px 10px 20px; ">
                                                            An interesting aspect of tomato history is the classic debate: Is the Tomato a Fruit or Vegetable? I guess that depends on
                                                            whom you are asking. By definition, a fruit is the edible plant
                                                            structure of a mature ovary of a flowering plant, usually eaten
                                                            raw; some are sweet like apples, but the ones that are not sweet
                                                            such as tomatoes, cucumbers, peppers, etc. are commonly called
                                                            vegetables. Botanists claim that a fruit is any fleshy material
                                                            that covers a seed or seeds where as a horticulturists point
                                                            of view would pose that the tomato is a vegetable plant. Until
                                                            the late 1800's the tomato was classified as a fruit to avoid
                                                            taxation, but this was changed after a Supreme Court ruling that
                                                            the tomato is a vegetable and should be taxed accordingly. When
                                                            it is all said and done, the history of the tomato has classified
                                                            as a poisonous beautiful plant, a tax-avoiding fruit, and a taxable
                                                            vegetable. Nonetheless, the tomato is the most popular vegetable
                                                            in America and enjoyed by millions all over the world.
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <img class="sli img-fluid w-100 rounded" src="pic/t2.jpg" alt="Sample Image">
                                                    </div>
                                                </div>

                                                <i class="fas fa-arrows-alt"></i>
                                                <i class="far fa-edit"></i>
                                                <i class="fas fa-trash-alt"></i>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 grid-margin stretch-card">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h2>Tomato picture</h2>
                                                        <BR>
                                                        <div class="row">

                                                            <div class="img-card col-xl-3 ">
                                                                <div class="card card-pic1">
                                                                    <div class="card-body card-pic1">
                                                                        <div class="clearfix">
                                                                            <center>
                                                                                <img class="sa img-fluid w-100 rounded" src="pic/t3.jpg" alt="Sample Image">
                                                                            </center>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="img-card col-xl-3  ">
                                                                <div class="card card-pic1">
                                                                    <div class="card-body card-pic1">
                                                                        <div class="clearfix">
                                                                            <center>
                                                                                <img class="sa img-fluid w-100 rounded" src="pic/t3.jpg" alt="Sample Image">
                                                                            </center>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="img-card col-xl-3 ">
                                                                <div class="card card-pic1">
                                                                    <div class="card-body card-pic1">
                                                                        <div class="clearfix">
                                                                            <center>
                                                                                <img class="sa img-fluid w-100 rounded" src="pic/t3.jpg" alt="Sample Image">
                                                                            </center>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="img-card col-xl-3  ">
                                                                <div class="card card-pic1">
                                                                    <div class="card-body card-pic1">
                                                                        <div class="clearfix">
                                                                            <center>
                                                                                <img class="sa img-fluid w-100 rounded" src="pic/t3.jpg" alt="Sample Image">
                                                                            </center>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <br>
                                                        <i class="fas fa-arrows-alt"></i>
                                                        <i class="far fa-edit"></i>
                                                        <i class="fas fa-trash-alt"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php include('footer.php'); ?>
                                    </div>
                                    <!-- main-panel ends -->
                                </div>
                                <!-- page-body-wrapper ends -->
                            </div>
                        </div>

                        <script src="theme/assets/js/shared/dragula.js"></script>
</body>

</html>