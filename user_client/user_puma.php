<?php include 'nav_user.php' ?>
  <div class="container" style="margin-top: 70px;">
      <?php include 'user_sidebar.php' ?>
   <div class="panel panel-success col-sm-9" style="background: #33b75d;"><h4 style="text-align: center;">Giày Puma</h4></div>
       <div class="content col-sm-9">
            <div class="row">
               <?php include  '../library/user_query_puma.php' ?>
       	    </div>
     </div>
</div>
<?php include '../includes/footer.php' ?>