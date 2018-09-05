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
</style>

<body class="sidebar-icon-only">
  <div class="container-scroller">
    <?php include('navbar.php'); ?>
    <div class="container-fluid page-body-wrapper">
      <?php include('sidebar.php'); ?>
      <div class="main-panel">
        <div class="content-wrapper">



          <div class="card">
            <div class="card-body">
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
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

</body>