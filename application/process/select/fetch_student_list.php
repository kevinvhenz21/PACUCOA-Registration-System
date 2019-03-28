
<?php
//fetch.php
require('../../../config/connection.php');

$columns = array('a1', 'a2', 'a3','a4', 'a5', 'a5');

$query = "SELECT * FROM tbl_studlist";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE StudNo LIKE "%'.$_POST["search"]["value"].'%" OR StudLname LIKE "%'.$_POST["search"]["value"].'%" OR StudFname LIKE "%'.$_POST["search"]["value"].'%"
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY StudLname ASC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($conn, $query));

$result = mysqli_query($conn, $query . $query1);

$data = array();
$i=1;

session_start();

while($row = mysqli_fetch_array($result))
{			
	$id = $row['id'];
	$stud_id = $row['StudNo'];
	$lastname = $row['StudLname'];
	$firstname = $row['StudFname'];
	$college = $row['college'];

	$stat = $row['status'];
	if($stat === '1'){
		$stat = '<label class="label label-success"> Active</label>';
	}
	else{
		$stat = '<label class="label label-danger"> Inactive</label>';
	}
	
 $sub_array = array();

 $sub_array[] = '<div data-column="a1">' . $stud_id . '</div>';
 $sub_array[] = '<div data-column="a2" >' . $lastname . '</div>';
 $sub_array[] = '<div data-column="a3">' . $firstname . '</div>'; 
 $sub_array[] = '<div data-column="a4">' . $college . '</div>'; 
 $sub_array[] = '<div data-column="a5">' . $stat . '</div>'; 
 $sub_array[] = '<div data-column="a6">
 					<div class="manage_div">
 						<button class="btn btn-primary btn-sm edit-faculty" id="'.$id.'"><i class="fas fa-edit"></i> Edit</button>					
 						<button class="btn btn-danger btn-sm delete-faculty" id="'.$id.'"><i class="fas fa-trash-alt"></i> Delete</button>
 					</div>
 				</div>';
 $data[] = $sub_array;
}

						
						

function get_all_data($conn)
	{
	 $query = "SELECT id FROM tbl_studlist";
	 $result = mysqli_query($conn, $query);
	 return mysqli_num_rows($result);
	}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($conn),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);
?>


