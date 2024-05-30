
<html>
<head>
<title>login</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="jquery-3.7.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<style>
h1{text-align:center;margin-top:50px;}
div.a{background-align:center;width:600px;height:280px;text-align:center;
margin-left:500px;padding:70px;
}
	</style>
</head>
<body>
<h1>login</h1>
<div class="a">
<form class="form-control"action="addin.php"  method="post" height="300px" width="400px" encType="multipart/form-data">
<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" id="exampleInputEmail1" class="form-control"  placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" >Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>