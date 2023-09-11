<?php include('header.php') ?>

<?php include('sidebar.php') ?>

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="d-flex">
              <h1 class="m-0 text-dark">Research Papers</h1>

            </div>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"style="color: white;">Research Papers</a></li>
              <li class="breadcrumb-item "><?php echo ucfirst($_REQUEST['user'])?></li>
            </ol>
          </div><!-- /.col -->
        
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
  <div class="container-fluid">
    <div class="table-responsive">
      <table class="table table-bordered table-responsive" style="background-color: #22668D;">
        <thead>
          <tr>
            <th style="width: 5%;">SNo</th>
            <th style="width: 10%;">Reg. No.</th>
            <th style="width: 15%;">Title</th>
            <th style="width: 35%;">Abstract</th>
            <th style="width: 15%;">Authors</th>
            <th style="width: 10%;">Publish Date</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $count = 1;
          $user_query = 'SELECT * FROM research WHERE `type` = "' . $_REQUEST['user'] . '"';
          $user_result = mysqli_query($db_conn, $user_query);
          while ($users = mysqli_fetch_object($user_result)) { 
          ?>
            <tr>
              <td><?=$count++?></td>
              <td><?=$users->registration_no?></td>
              <td>
                <a href="<?=$users->url?>" target="_blank"><?=$users->title?></a>
              </td>
              <td>
                <div style="max-height: 50px; overflow-y: auto;">
                  <?=$users->abstract?>
                </div>
              </td>
              <td><?=$users->author?></td>
              <td><?=$users->date?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</section>


    <?php include('footer.php') ?>