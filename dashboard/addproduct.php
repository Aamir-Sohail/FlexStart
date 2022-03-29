<?php 
include 'includes/header.php';
?>
                <div class="row layout-top-spacing">
                    
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
                        <div class="widget widget-content-area br-4">
                            <div class="widget-one">

                                

                              <form action="addproduct.php" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
    <label for="exampleInputProduct_Name">Product_Name</label>
    <input type="text" class="form-control" id="Product_Name" name="product_name" aria-describedby="Product_Name" placeholder="Enter Product_Name">
   
  </div>
  <div class="form-group">
    <label for="exampleCategory_id">Category_id</label>
    <input type="text" class="form-control" id="Category_id" name="category_id" placeholder="Category_id">
  </div>


         <div class="form-group">
    <label for="exampleCategory_id">Product_id</label>
    <input type="text" class="form-control" name="product_id" id="Product_id" placeholder="Product_id">
  </div>



              <div class="form-group">
    <label for="exampleCategory_id">Product_image</label>
    <input type="file" class="form-control" name="img" id="product_image" placeholder="Product_image">
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <input type="submit" value="SUbmit" name ="submit" class="btn btn-primary">
                                 </form>


                            </div>
                        </div>
                    </div>
    


                </div>

            </div>
<?php 
include 'includes/footer.php';
?>


                      <?php
$con=mysqli_connect('localhost','root','','ali');
if (isset($_POST['submit'])) {
    $product_name =$_POST['product_name'];
    $category_id =$_POST['category_id'];
    $product_id =$_POST['product_id'];
     
   if(isset($_FILES['img'])){
        $error = array();
        $img_name = $_FILES['img']['name'];
        $img_size =$_FILES['img']['size'];
        $img_tmp =$_FILES['img']['tmp_name'];
        $img_type=$_FILES['img']['type'];
        $tmp = explode('.',$_FILES['img']['name']);
        
        $img_ext=strtolower(end($tmp));
        
        $extensions= array("jpeg","jpg","png");
        
        if(in_array($img_ext,$extensions)=== false){
            $error[]="this extension is not allowed !";
        }
        
        if($img_size > 2 * 1024 * 1024){
            $error[]="Please insert img of size less than 2MB";
        }
        
        if(empty($errors)==true){
            $img = "./uploads/".$img_name;
            move_uploaded_file($img_tmp,$img);
        }
        echo $img;
    }
    

    

$sql ="INSERT INTO product(product_name,category_id,product_id,img) VALUES('$product_name','$category_id','$product_id','$img')";


$result=mysqli_query($con,$sql);
if ($result) {
    // header("Location: addproduct.php?action=success");
}else{
        echo "unsuccesful";
}


}

?>