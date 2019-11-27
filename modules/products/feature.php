<?php
    $sql="SELECT * FROM product WHERE prd_featured=1 ORDER BY prd_id DESC LIMIT 6";
    $query=mysqli_query($conn,$sql);
?>

<!--	Feature Product	-->
<div class="products">
    <h3>Sản phẩm nổi bật</h3>
 <div class="product-list card-deck">
    <?php
        while($rows=mysqli_fetch_assoc($query)){     
    ?>
    
        <div class=" photobox photobox_type6 product-item card text-center">
            <div class="photobox__previewbox">
            <a class="photobox__preview" href="?page_layout=product&prd_id=<?php echo $rows['prd_id']?>"><img src="admin/img/products/<?php echo $rows['prd_image'];?>"></a>
            <span class="photobox__label"> 
            <p class="colo glyphicon glyphicon-thumbs-up">&sim; Bảo hành: <?php echo $rows['prd_warranty']?> </p>
            
                  <p class="colo">&sim; Đi kèm:<?php echo $rows['prd_accessories']?> </p>
                  <p class="colo">&sim; Tình trạng:<?php echo $rows['prd_new']?></p>
                 <p class="colo">&sim; Khuyến Mại:<?php echo $rows['prd_promotion'];?></p>
        
        </span>
            </div >
            <h4><a href="?page_layout=product&prd_id=<?php echo $rows['prd_id']?>"><?php echo $rows['prd_name'];?></a></h4>
            <p>Giá Bán: <span><?php echo $rows['prd_price'];?></span></p>
            
        </div>
        <?php    
        }
        ?>
    </div>
</div>
<!--	End Feature Product	-->