 <div class="container">
    
    <div class="row">
    <div class="col-sm-10">
    <?php
      require 'database.php';
      $sql = "SELECT * FROM hostels";
      $result = mysqli_query($connect,$sql);
      if (mysqli_num_rows($result) > 0) {
        ?>
        <table class="table table-bordered table-responsive table-lg" style="color:white;">
        <thead>
          <tr>
            <th>Hostel name</th>
            <th>Price</th>
            <th>Number of rooms</th>
            <th>Type</th>
            <th></th>

          </tr>
        </thead>
        <?php
        while ($data = mysqli_fetch_assoc($result)) {
          
          $hostelname = $data['hostelname'];
          $numrooms = $data['numrooms'];
          $price = $data['price'];
          $type = $data['type'];
        ?>

        
        <tr>
          <td><?php echo "$hostelname"?></td>
          <td><?php echo "$price"?></td>
          <td><?php echo "$numrooms"?></td>
          <td><?php echo "$type"?></td>
        </tr>
          
        
        <?php
        }
        ?>
        </table>
        <?php
      }
    ?>
    </div>
      <div class="col-sm-2 ">
      
       <div class="panel panel-success">
<div class="panel-heading">
  <h3 class="panel-title">Logged in as:</h3>
</div>
  <div class="panel-body">
          <?php 
             if (isset($_SESSION['username'])){
              echo "".$_SESSION['username'].'</b>';;
             }
             ?>
    
        </div>
        <div class="panel-footer">
       <a href="logout.php" class="btn btn-success">LogOut</a>
       </div>
</div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <?php
      require 'database.php';
      $sql = "SELECT * FROM hostel";
      $result = mysqli_query($connect,$sql);
      if (mysqli_num_rows($result) > 0) {
        ?>
        <table class="table table-stripped table-responsive table-lg" style="color:white;">
        <thead>
          <tr>
             <th>Picture</th>
            <th>Hostel name</th>
            <th>Category</th>
             <th>Price</th>
           

          </tr>
        </thead>
        <?php
        while ($data = mysqli_fetch_assoc($result)) {
          
          $picture = $data['image'];
          $name = $data['name'];
        
          $category = $data['category'];
            $price = $data['price'];
         
        ?>

        
        <tr>
        <td><img src=" <?php 
    echo $row["image"]
     ?>" class="responsive"></td>
        <td><?php echo "$name"?></td>
          <td><?php echo "$category"?></td>
          <td><?php echo "$price"?></td>
          <td><?php echo "<button class='btn btn-primary'>Book now</button>"?></td>
        </tr>
          
        
        <?php
        }
        ?>
        </table>
        <?php
      }
    ?>

        </div>
      </div>
     
    </div>
  </div>

    <?php 
    echo $row["image"]
     ?>