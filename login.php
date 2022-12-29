<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<style>
       .Container {
	max-width: 1300px;
	margin: auto;
	padding-left: 20px;
	padding-right: 20px;
      }
		img {
			border-style: groove;
			border-radius: 25px
		}
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.bg-image {
  background-image: url("Images/1.jpg");
  height: 100%; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.bg-text {
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0, 0.4); 
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
		#box
	  {
	      width: 100%;
		  height: 270px;
		  border: 1px solid;
		  border-radius: 5px;
		  margin: 0 auto;
		  padding: 0 20px;
		  box-sizing: border-box;
		  
	  } 
.btn
	{
		border: 3px solid #f1f1f1;
		border-style: groove;
		border-radius: 25px;
	}
	
	</style>
	<title>KIDS LAND_LOGIN</title>
	
	<link rel="stylesheet" type="text/css" href="coversheet.css">
	<script src="http://code.jquery.com/jquery-2.1.1.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
</head>
	<br><br>
	<body>
  	<div class="bg-image"></div>
		<div class="bg-text">
			<p><img src="Images/21.png" width="112" height="105" alt=""></p>
			<div id="loginModal" class="container">
		<h2 align="center">LOGIN</h2>
		<br>
		<div id="box"><br>
			<form action="home.php" id="myform" method="POST">
			<div class="form-group">
				<label>Email</label><input type="text" name="txt_email" id="txt_email" class="form-control" required>
				</div>
				
				<div class="form-group">
				<label>Password</label><input type="password" name="txt_password" id="txt_password" class="form-control" required>
				</div>
					
					<div class="form-group">
				<input name="login" id="login" class="btn btn-submit" type="submit" value="Login">
				</div>
						
			</form><br>
		</div>
	
	</div>
			

	<script>

	$(document).ready(function(){
    $("#login").on('click',function(){
        var email = $("#txt_email").val().trim();
        var password = $("#txt_password").val().trim();

        if( email != "" && password != "" ){
            $.ajax({
                url:'user.php',
                type:'POST',
                data:{email:email,password:password},
                success:function(response){
                    var msg = "";
                    if(response == 1){
                        window.location = "home.php";
                    }else{
                        msg = "Invalid username and password!";
                    }
                    $("#message").html(msg);
                }
            });
        }
    });
});
		
	
	</script>
</body>
</html>





