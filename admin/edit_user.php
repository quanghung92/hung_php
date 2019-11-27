<?php
        if(isset($_GET['id'])){
            $id=$_GET['id'];
        }
        $erro='';
        $sql_select=mysqli_query($conn,"SELECT * FROM user WHERE user_id='$id'");
        $rows=mysqli_fetch_assoc($sql_select);
        if(isset($_POST['sbm'])){
            $user_full=$_POST['user_full'];
            $user_mail=$_POST['user_mail'];
            $user_pass=md5($_POST['user_pass']);
            $user_repass=md5($_POST['user_re_pass']);
            $sql=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM user WHERE user_mail='$user_mail'"));
            if($user_pass!= $user_repass || $sql>=1) {
               $erro= '<div class="alert alert-danger">Email đã tồn tại, Mật khẩu không khớp !</div>';
            }else {
                $user_full=$_POST['user_full'];
                $sql_update="UPDATE user SET user_full='$user_full',user_mail='$user_mail',user_pass='$user_pass', user_full='$user_full' WHERE user_id='$id' ";
                $query_update=mysqli_query($conn,$sql_update);
                header('location:index.php?page_layout=user');
            }
          
        }
    ?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="">Quản lý thành viên</a></li>
				<li class="active"><?php echo $rows['user_full']?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Thành viên: <?php echo $rows['user_full']?></h1>
			</div>
        </div><!--/.row-->
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-8">
                            <?php echo $erro;?>
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Họ & Tên</label>
                                    <input type="text" name="user_full" required class="form-control" value="<?php echo $rows['user_full']?>" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="user_mail" required value="<?php echo $rows['user_mail']?>" class="form-control">
                                </div>                       
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input type="password" name="user_pass" required  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Nhập lại mật khẩu</label>
                                    <input type="password" name="user_re_pass" required  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Quyền</label>
                                    <select name="user_level" class="form-control">
                                    <option <?php if($rows['user_level']==1){echo 'selected';}?>value=1>Admin</option>
                                        <option <?php if($rows['user_level']==0){echo 'selected';}?> value=0 >Member</option>
                                    </select>
                                </div>
                                <button type="submit" name="sbm" class="btn btn-primary">Cập nhật</button>
                                <button type="reset" class="btn btn-default">Làm mới</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div><!-- /.col-->
            </div><!-- /.row -->
		
	</div>	<!--/.main-->	
