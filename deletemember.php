<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
#cover
{
   
    background: #222 url('https://www.goyalco.com/wp-content/uploads/2015/05/7.jpg') center center no-repeat; 
   
    background-size: cover;
    height: 100%;
    text-align: center;
    display: flex;
    align-items: center;
    position: relative;
}
/* u1{
    color:black;
} */
body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #f4efef;
    /* background-color: #fff; */
    color:#c5cae9;
}
#cover-caption {
    width: 100%;
    position: relative;
    z-index: 1;
    margin-left: 550px;
}
.container{
    padding-right:300px;
}
b{
     /* outline-color:black;
    outline-style:solid; */
    color:black;
    font-size:40px;
    /* -webkit-text-stroke-width:1px; */
    -webkit-text-stroke-color:white;
    /* color:white; */
     text-shadow:0 0 5px white;
     /* background-color:white;  */
    margin-right:410; 
}
u{
    color:red;
}

h2{
    /* font-size: 2em; */
    /* font-style:oblique; */
    /* font-family:Courier,monospace; */
    font-family:Times,serif;
    /* text-shadow: -1px 1px 0px white; */
    /* margin: .67em 0; */
    /* -webkit-text-stroke-width:1px;  */
    text-shadow:0 0 2px white;
    -webkit-text-stroke-color:white;
     /* margin-right: 350; */
     color:black; 
     /* background-color:#9e9e9e;  */
     
    /* color:orangered; */
   /* color: #ffao7a;*/
}

form:before {
    content: '';
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    background-color: rgba(0,0,0,0.3);
    z-index: -1;
    border-radius: 10px;
}

</style>
</head>
<body>

<?php 
if(isset($_POST["btnsubmit"]))
{
	$cnn=mysqli_connect("localhost","root","","elegance");
	$username=$_POST["txtusername"];
	$pwd=$_POST["txtpwd"];
	$fname=$_POST["txtfname"];
	$lname=$_POST["txtlname"];
	$mpic=$_FILES['file1']['name'];
	$gen=$_POST["gen"];
	$houseid=$_POST["cmbhouseid"];
	$cno=$_POST["txtcno"];
	$email=$_POST["txtemail"];
	$adharno=$_POST["txtadharno"];
	$dob=$_POST["txtdob"];
	$doannivarsary=$_POST["doannivarsary"];
	//$doj=$_POST["txtdoj"]; 
	$jobtype=$_POST["txtjob"];
	$doj=date("m/d/Y h:i:s a", time());
	$isactive="yes";
			//$isactive="yes";
    $iscurrant="yes";
    $roleid=7;
			
    $qry="Delete from member where mid='$id'";
		$result=$cnn->query($qry);
		$yourURL="displaymember.php";
        echo ("<script>location.href='$yourURL'</script>");
			
    if($_FILES['file1']['name'] != "" )
    {
       	move_uploaded_file($_FILES["file1"]["tmp_name"],
        "img/" . $_FILES["file1"]["name"]);
         echo "File is uploaded";	
    }
    else
    {
         echo "File is not selected";
    }
		
	}
    $cnn=mysqli_connect("localhost","root","","elegance");
	//$title=$row["title"];
    $qry="select *from festivaldetail where feid='$id'";
	$result=$cnn->query($qry);
	$row=$result->fetch_assoc();
    $username=$_POST["txtusername"];
	$pwd=$_POST["txtpwd"];
	$fname=$_POST["txtfname"];
	$lname=$_POST["txtlname"];
	$mpic=$_FILES['file1']['name'];
	$gen=$_POST["gen"];
	$houseid=$_POST["cmbhouseid"];
	$cno=$_POST["txtcno"];
	$email=$_POST["txtemail"];
	$adharno=$_POST["txtadharno"];
	$dob=$_POST["txtdob"];
	$doannivarsary=$_POST["doannivarsary"];
	//$doj=$_POST["txtdoj"]; 
	$jobtype=$_POST["txtjob"];
	$doj=date("m/d/Y h:i:s a", time());
	$isactive="yes";
			//$isactive="yes";
    $iscurrant="yes";
    $roleid=7;
    

?>
    

<div class="background">
<div class="transbox">
<section id="cover" class="min-vh-100">
<div id="cover-caption">
<div class="container">
<div class="row text-white">
<u><h3 class="display-4 py-2 text-truncate"><b>ELEGANCE RESIDENCY</b></h3> </u>

<!-- <center>  <h1 class="display-4 py-2 text-truncate">
REGISTRATION FORM</h1> </center> -->
<br>
<!-- <center>  <h1 class="display-4 py-2 text-truncate"><b> -->
<!-- REGISTRATION  FORM</h1></b> </center> -->
<div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
<h2 class="display-4 py-2 text-truncate"  >REGISTRATION FORM</h2> 


 <!-- <h3 class="display-4 py-2 text-truncate"><b>ELEGANCE RESIDENCY</b></h3>  -->
<div class="px-2">


<form action="" method="post" class="justify-content-center"  enctype="multipart/form-data">
<!-- <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data"> -->
<div class="form-group">
<!-- <h6 class="display-4 py-2 text-truncate">REGISTRATION  FORM</h6>  -->

<!-- <table  class="form-control"> -->
<!-- <tr class="form-control"> -->
   <!-- <label class="pull-left">Username</label> -->
   <!-- <td class="form-control" > -->
   <input type="text" class="form-control" placeholder="USER NAME" name="txtusername" required>
   <!-- </td> -->
<!-- </div> -->
 <!-- <div class="form-group"> -->
    <!-- <label class="pull-left">Password</label> -->
    <input type="password" class="form-control" placeholder="PASSWORD" name="txtpwd" required>
    <input type="text" class="form-control" placeholder="FIRST NAME" name="txtfname" required>
    <input type="text" class="form-control" placeholder="LAST NAME " name="txtlname" required>
    <input type="file"  class="form-control" name="file1" placeholder="CHOOSE FILE" >
     <!-- <tr class="form-control"> -->
    <!-- <td> -->
    <input type="radio"  name="gen" value="female"> FEMALE  <input type="radio"  name="gen"  value="male">MALE
    <!-- </td> -->
    <!-- </tr> -->
    
    <!-- <label class="pull-left">HOUSE ID</label> -->
    <input type="text" name="txthouseid" class="form-control" placeholder="HOUSE-ID" disabled >
	
    <select name="cmbhouseid" class="form-control">

	<option   value="1" >1 </option>
	<option   value="2" >2 </option>
	<option   value="3">3 </option>
	<option   value="4">4 </option>
	<option   value="5">5 </option>
	<option   value="6">6 </option>
	<option   value="7">7 </option>


    

    <input type="text" class="form-control" placeholder="CONTECT NUMBER" name="txtcno" required>
    <input type="email" class="form-control" placeholder="EMAIL" name="txtemail" required>
    <input type="text" class="form-control" placeholder="ADHAR NUMBER" name="txtadharno" required>


    <input type="text" class="form-control" placeholder="DATE OF BIRTH" name="txtdob" required>
    <!-- <input type="text" class="form-control" placeholder="DATE OF JOIN" name="txtdoj" required> -->

    <!-- <input type="text" class="form-control" placeholder="ISACTIVE" name="txtisactive" required>
    <input type="text" class="form-control" placeholder="ISCURRENT" name="txtiscurrent" required> -->
    <!-- <tr class="form-control"> -->
    <!-- <td> -->
   
    <!-- </td> -->
    <!-- </tr> -->
    <input type="text" class="form-control" placeholder="JOB TYPE" name="txtjob" required>
    <!-- <input type="text" class="form-control" placeholder="ROLE  ID" name="txtroleid" required> -->
    <label class="pull-left">DO ANNIVARSARY</label>
    <input type="radio"  name="doannivarsary" value="yes" > YES <input type=radio name="doannivarsary"  value="no" >NO 
    <!-- </tr> -->
    <!-- </table> -->
 </div>
    <button type="submit" class="btn btn-primary btn-lg" name="btnsubmit" value="roleid">Submit</button>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
 </div>
</div>

</body>
</html>