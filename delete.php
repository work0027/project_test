<?php

	include("../connect/conDB.php");
  	include("../check/check_session.php");

  	$file_id = $_GET["f_id"];
    $file_trans_id = $_GET["ft_id"];
    $issue_id = $_GET["i_id"];

		 $sql = "UPDATE trn_file SET file_status = 0 WHERE file_id = $file_id";
		 $query = mysqli_query($conn, $sql);
        	if($query){
        		$sql2 = "UPDATE trn_file_transaction SET file_trans_status = 0 WHERE file_trans_id = $file_trans_id";
        		$query2 = mysqli_query($conn, $sql2);
        		if($query2){
					echo '<script language="javascript">';
		          	echo 'alert("delete Complete");';
		          	echo 'window.location = "detail_and_comment.php?issue_id='; echo $issue_id; echo '";';
		          	echo '</script>'; 
        		}
        		else{
        			echo "<script>alert('Con not delete issue');window.history.back();</script>";
        		}
	          	       
	        }
        	else{
         	 	echo "<script>alert('Con not delete issue');window.history.back();</script>";
        	}

	

?>