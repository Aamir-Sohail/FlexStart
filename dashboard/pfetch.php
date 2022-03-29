  <?php
$con =mysqli_connect('localhost','root','','ali');
 
 $sql ="SELECT * FROM product";
 $result =mysqli_query($con,$sql);
 ?>



<?php 
include 'includes/header.php';
?>
                <div class="row layout-top-spacing">
                    
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
                        <div class="widget widget-content-area br-4">
                            <div class="widget-one">


                                <table class="table">
  <thead>
     <a class="btn btn-primary mb-3" href ="addproduct.php">Add Product</a>
    <tr>
    
      <th scope="col">Product_Name</th>
      <th scope="col">Category_id</th>
      <th scope="col">Product_id</th>
      <th scope="col">Product_image</th>
      <th class="text-center dt-no-sorting">Action</th>


    </tr>
  </thead>
  <tbody>
  <?php
            
         while ($row =mysqli_fetch_assoc($result)) 
         {

                ?>

                  <tr>
                                    <td><?php echo $row['product_name'];?></td>
                                    <td><?php echo $row['category_id'];?></td>
                                    <td><?php echo $row['product_id'];?></td>
                                    <td><?php echo $row['product_image'];?></td>
                                   

    
   <td><a href="updatepost.php?id=<?php echo $row['id']?>" button class="btn btn-primary btn-sm">Edit</a></td></tr>
            <?php }?>
    
  </tbody>
</table>

                     </div>
                        </div>
                    </div>

                </div>

            </div>
<?php 
include 'includes/footer.php';
?>