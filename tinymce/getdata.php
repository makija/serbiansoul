<!DOCTYPE html>
<html>
<head>
	<title>Tinymce getdata</title>
</head>
<body>

<?php

 /* if(isset($_POST['getTiny'])){

    $p=($_POST['tiny']);

    echo "$p";
  }*/




  ?>

<!-- <div id="data-container"> -->


<form id="get-data-form" method="post" action="">

	<textarea class="tinymce" id="texteditor" name="tiny" data-container=''>  </textarea>




  <input type="submit" value="Get Data" name="getTiny">

</form>


<!-- 	</div> -->
<?php

if (isset($_POST['getTiny'])){

  $table=$_POST['tiny'];


$t=preg_replace("/<([a-z][a-z0-9]*) .+?>/",'<$1>',$table);

$conn=new mysqli('localhost','root','','agencija');
$q=$conn->query("insert into test values (null,'$t','','')");
}



?>

<!-- JAVASCRIPT -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="plugin/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="plugin/tinymce/init-tinymce.js"></script>
<script type="text/javascript" src="js/getdata.js"></script>
</body>
</html>
 <!--  <script>
    var c = document.getElementsByTagName("textarea");
    console.log(c.outerHTML);
  </script> -->