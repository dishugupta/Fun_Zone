
<?php
 $con = mysqli_connect("localhost" ,"id815949_dishugupta" ,"gupta007" ,"id815949_quiz_app") or die("Error " . mysqli_error($con));

 $type  = "Age";
 $sql = "SELECT * FROM Questions WHERE Category= "$type";
 $r = mysqli_query($con,$sql);
 $result = array(); 
 while($row = mysqli_fetch_array($r))
	{
                array_push($result,
		array('question'=>$row['Question'],
			  'opt1'=>$row['option1'],
		      'opt2'=>$row['option2'],
		      'opt3'=>$row['option3'],
		      'opt4'=>$row['option4'],
		      'ans'=>$row['awnser']
		    			));
	}
 if(isset($result))
 echo json_encode(array("result"=>$result));
 else
 echo 'failure';
 mysqli_close($con);
 ?>	