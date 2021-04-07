 <?php
include "timeout.php";
include "config.php";
$user_id=$_SESSION['user_id'];
$page="chat-map";
$date =date('y/m/d H:i:s');
$msg = "";
$msg_color = "red";
if (isset($_POST['submit'])) {

    $chat_message = $_POST['chat_message'];

    $sql="INSERT INTO chat (user_id,chat_message,date) VALUES ($user_id, '$chat_message' , '$date')";
    mysqli_query($conn,$sql);
}
?>
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-body">
						<center><iframe src="https://calendar.google.com/calendar/embed?src=yogaparameswarar%40gmail.com&ctz=Asia/Calcutta" style="border: 0" width="90%" height="450" frameborder="0" scrolling="no"></iframe></center>				
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>



				<div class="col-lg-4">
                    <div class="panel panel-default">
                        <!--<div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Notifications Panel
                        </div>-->
                        <!-- /.panel-heading -->
                        <div class="chat-panel panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i>Live Chat
                           <div class="btn-group pull-right">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu slidedown">

<style>									
.dy {
    height: 350px;
    overflow-y: scroll;
}

     </style>								<div class="dy"	
								<?php
                            $sql = "select * from users order by full_name";
							$result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>							

                                    <li>

                                   <a href="dashboard.php?id=<?php echo $row['id']; ?>">
                                            <span class="chat-img pull-left">
                                        <img width="40" height="40" src="photo/<?php echo $row['photo']; ?>?<?php echo rand(); ?>" class="img-circle" />
                                    </span>
									<?php echo $row['full_name']; ?>
                                        </a>
										<hr>
                                    </li>
									 <?php } ?>
									</div>
                                </ul>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="chat">
								<?php
										$user_id=$_SESSION['user_id'];
										 $sql1 = "select a.*,b.full_name,b.photo from chat a,users b where a.user_id=b.id order by id desc";
										 $result1 = mysqli_query($conn, $sql1);
                                         while ($row1 = mysqli_fetch_assoc($result1)) {
											 if($user_id=$_SESSION['user_id']==""){

                                          ?>
								<li class="right clearfix">
                                    <span class="chat-img pull-right">
                                        <img width="40" height="40" src="photo/<?php echo $row1['photo']; ?>?<?php echo rand(); ?>" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font"><?php echo $row1['full_name']; ?></strong>
                                           
                                        </div>
                                        <p>
                                           <?php echo $row1['chat_message']; ?>
                                        </p>
										 <small class="pull-left text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> <?php echo $row1['date']; ?>
                                            </small>
                                    </div>
                                </li> 
											 <?php } 

											 else { ?>
								
								<li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img width="40" height="40" src="photo/<?php echo $row1['photo']; ?>?<?php echo rand(); ?>" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font"><?php echo $row1['full_name']; ?></strong>
                                           
                                        </div>
                                        <p>
                                           <?php echo $row1['chat_message']; ?>
                                        </p>
										 <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> <?php echo $row1['date']; ?>
                                            </small>
                                    </div>
                                </li>
											 <?php } ?>
								<?php
											 
                        }
                        ?>
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                        <div class="panel-footer">
                            <div class="input-group">

							 <form method="post" action="" enctype="multipart/form-data">
                                
						<div class="panel-footer">
                            <div class="input-group">
                                <input id="btn-input" type="text" name="chat_message" class="form-control input-sm" placeholder="Type your message here..." />
                                <span class="input-group-btn">
                                    <a href="admin.php"><button class="btn btn-warning btn-sm" name="submit" id="btn-chat">Send</button></a>
                                </span>
                            </div>
                        </div>

								</form>
								
								

						
						
                            </div>
                        </div>
                        <!-- /.panel-footer -->
                    </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                  
                    <!-- /.panel .chat-panel -->
                </div>