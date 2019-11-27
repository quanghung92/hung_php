   <?php
    $cat_name=$_GET['cat_name'];
    $cat_id=$_GET['cat_id'];
    $sql=mysqli_query($conn,"SELECT * FROM product WHERE cat_id='$cat_id'");
    $num=mysqli_num_rows($sql);


    
   ?>

                <!--	List Product	-->
                <div class="products">
                    <h3><?php echo $cat_name;?> (hiện có <?php echo $num ?> sản phẩm)</h3>
                    <div class="product-list card-deck">
                        <?php 
                            while($row=mysqli_fetch_assoc($sql)){
                        ?>
                        <div class=" photobox photobox_type6 product-item card text-center">
            <div class="photobox__previewbox">
            <a class="photobox__preview" href="?page_layout=product&prd_id=<?php echo $row['prd_id']?>"><img src="admin/img/products/<?php echo $row['prd_image'];?>"></a>
            <span class="photobox__label"> 
            <p class="colo glyphicon glyphicon-thumbs-up">&sim; Bảo hành: <?php echo $row['prd_warranty']?> </p>
            
                  <p class="colo">&sim; Đi kèm:<?php echo $row['prd_accessories']?> </p>
                  <p class="colo">&sim; Tình trạng:<?php echo $row['prd_new']?></p>
                 <p class="colo">&sim; Khuyến Mại:<?php echo $row['prd_promotion'];?></p>
        
        </span>
            </div >
                            <h4><a href="?page_layout=product&prd_id=<?php echo $row['prd_id']?>"><?php echo $row['prd_name']?></a></h4>
                            <p>Giá Bán: <span><?php echo $row['prd_price']?></span></p>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <!--	End List Product	-->
                
                <div id="pagination">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Trang trước</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Trang sau</a></li>
                    </ul> 
</div>
