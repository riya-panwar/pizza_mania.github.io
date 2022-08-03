<?php include('server.php')  ?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pizza Mania</title>
  <script>

  </script>
</head>
<style>

 
form {
  border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

body {
  background-image: url('pizzeria.jpg');
  background-repeat: no-repeat;
  background-size:100%;
}

button {
  padding: 10px 18px;
  background-color: green;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 10%;
  border-radius: 30%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  focustext: black; 
  padding-top: 16px;
}
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }

}

</style>
<body>
    
      <form action="connect.php" method="post">
        <div class="imgcontainer">
          <img src="userpizza.jpg" alt="Avatar" class="avatar"> 
        </div>
      
        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="username" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" required>
      
          <button type="submit" class="button">Login </button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>
      
        <div class="container">
          <button type="button" class="cancelbtn">Cancel</button>
          <span class="psw"> <a href="#">Forgot password?</a></span>
        </div>
      </form>
</body>
</html>