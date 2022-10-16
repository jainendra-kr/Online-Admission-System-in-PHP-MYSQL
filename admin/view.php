
<div id="padding">
<div class="section-title">
    <h3>Students list</h3>
</div>

        <?php 

        if(isset($_GET['did']))
        {
        delete();
        print '<h6 class= "successMessage">Student Deleted.</h6>';
        }
        

                /* $cn = mysqli_connect("localhost", "root", "", "db_admission");*/
				$sql = "select * from student";
				
				$table = mysqli_query($cn, $sql);
				
				
				print '<table>';
				print '<tr><th>ID</th><th>Student Name</th><th>Father Name</th><th>Mother Name</th><th>Contact</th><th>Email</th><th>Caste</th><th>Religion</th><th>Address</th><th>Blood Group</th><th>School Name</th><th>School Address</th><th>Qualification</th><th>Course Opted</th><th>Gender</th></tr>';
				$count = 0;
				
				while($row = mysqli_fetch_assoc($table))
				{
					$count++;
					print '<tr>';
					print '<td>'.htmlentities($row["id"]).'</td>';
					print '<td>'.htmlentities($row["sname"]).'</td>';
					print '<td>'.htmlentities($row["fathername"]).'</td>';
					print '<td>'.htmlentities($row["fathername"]).'</td>';
					print '<td>'.htmlentities($row["contact"]).'</td>';
					print '<td>'.htmlentities($row["email"]).'</td>';
					print '<td>'.htmlentities($row["caste"]).'</td>';
					print '<td>'.htmlentities($row["religion"]).'</td>';
					print '<td>'.htmlentities($row["address"]).'</td>';
					print '<td>'.htmlentities($row["blgroup"]).'</td>';
					print '<td>'.htmlentities($row["school"]).'</td>';
					print '<td>'.htmlentities($row["schooladdress"]).'</td>';
					print '<td>'.htmlentities($row["equalification"]).'</td>';
					print '<td>'.htmlentities($row["courseopt"]).'</td>';
					print '<td>'.htmlentities($row["gender"]).'</td>';
					print '<td> <a class= "action-e" href= "?a=edit&eid='.$row["id"].'"><i class="fa fa-wrench" title="Update"></i></a>
					<a class= "action-d" href= "?a='.$_GET['a'].'&did='.$row['id'].'"><i class="fa fa-trash" title="Delete"></i></a></td>';
					print '</tr>';
				}

				$_SESSION['test'] = $count;
	
				print '</table>';


    function delete()
        {
            global $cn;
            $sql = "delete from student where id = ".$_GET['did'];
            mysqli_query($cn, $sql);
        }
	
    ?>
    
</div>
