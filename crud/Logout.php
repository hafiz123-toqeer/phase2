<?php
//Simple Admin Login PHP Script - From: https://coursesweb.net/
session_start();

//Here add users that can login as admin
$admins =[
 ['user'=>'Admin', 'pass'=>'password', 'rank'=>9],
 ['user'=>'toqeer', 'pass'=>'pass123', 'rank'=>7],
 ['user'=>'admin-3', 'pass'=>'passx', 'rank'=>4]
];

//form to log-in
$re_cnt ='<form action="'. basename($_SERVER['PHP_SELF']) .'" method="post" id="login">
 <label>Login Form</label><br>
 <label>Name: <input type="text" name="user" id="user" /></label>
 <label>Password: <input type="password" name="pass" id="pass" /></label>
 <input type="submit" value="login" id="submit" />
</form>';

//to logout
if(isset($_GET['lgo']) && $_GET['lgo']=='logout'){
  if(isset($_SESSION['adminlog'])) unset($_SESSION['adminlog']);
  if(isset($_SESSION['adminrank'])) unset($_SESSION['adminrank']);
  if(isset($_SESSION['adminix'])) unset($_SESSION['adminix']);
  $re_cnt ='<h4>Logged out</h4>' .$re_cnt;
}
else if(isset($_POST['user']) && isset($_POST['pass'])){ //form data sent to log-in
  //check if correct login data
  $err ='<h4>Incorrect User Name or Password</h4>';
  $nradm = count($admins);
  for($i=0; $i<$nradm; $i++){
    if($_POST['user']==$admins[$i]['user'] && $_POST['pass']==$admins[$i]['pass']){
      //set session with admin
      $_SESSION['adminlog'] = $admins[$i]['user'];
      $_SESSION['adminrank'] = $admins[$i]['rank'];
      $_SESSION['adminix'] = $i;
      $err ='';
      break;
    }
  }

  //if error, add it to output
  if($err!='') $re_cnt = $err .$re_cnt;
}

//admin loged
if(isset($_SESSION['adminlog']) && isset($_SESSION['adminrank'])){
  //Here you can set /include additional content for logged admin

  $re_cnt ='<h4>Logged</h4>User: '. $_SESSION['adminlog'] .'<br>Rank: '. $_SESSION['adminrank'] .'<br><br><a href="'. basename($_SERVER['PHP_SELF']) .'?lgo=logout" title="Log-Out" id="logout">Log-Out</a>';
}
?>	

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Admin Login System</title>
<meta name="description" content="Simple Admin Login System with php, without database. From: https://coursesweb.net/" />
<meta name="author" content="MarPlo" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<style>
body {text-align:center;margin:0 1%; padding:0;}
h1 {
font-size:25px;
margin:10px auto 18px auto;
text-decoration:underline;
}
#content {
margin:0 auto 18px auto;
color:red;
}
#logout {
display:block;
font-style:oblique;
font-size:17px;
font-weight:700;
margin:0;
}
#login {
position:relative;
width:13em;
margin:10% auto 2em auto;
background:lightgreen;
padding:1em;
border:1px solid black;
font-size:1.2em;
font-weight:700;
color:black;
}
#login label {
display:block;
margin:.2em 1px;
text-align:center;
}
#login #user, #login #pass {
width:10.7em;
background:#ffcccc;
padding:.1em;
font-style:oblique;
}
#login #user:focus, #login #pass:focus {
background:#ffcccc;
}
#login #user {
margin-left:2.2em;
}
#login #submit {
background:#ff3333;
border:1px solid black;
display:block;
margin:1em auto .5em auto;
}
#footer {
margin:0 auto;
}
#cwb {
display:block;
font-style:oblique;
margin:11% auto 15px auto;
}
</style>
<body style="background-color:lightblue">
<h1 style="background-color:#F1F1F1;">Admin Login System</h1><br>
<div id="content">
<a href="welcome.php">welcome</a>
<?php echo $re_cnt; ?>
</div><br>
<a href="/" title="CoursesWeb" title="Home Page"></a>
<footer id="footer div">
<a href="https://coursesweb.net/" title="CoursesWeb" id="cwb" style="background-color:#F1F1F1;">CoursesWebEngineering.net</a>
</footer>
</body>
</html>