<?php
session_start();
?>
<html>
<head>

    <link rel='stylesheet' href='http://localhost/Wt/css/style.css'/>
    
  </head>

  <body>

 <div id="header" style="background-color:#19334d" >
  <a href="http://localhost/index.php"><img src="http://localhost/Wt/img/edge.jpg" align="middle" style="margin-left:30%;"></a>
</div>
<div style="background-image:url(img/back3.jpg); background-repeat:no-repeat;
    background-size:cover;">

<nav>
  <ul id="ul">
    <li id="li">
      <a id="lia" href="learn.php"> <span>Learn</a> </span> </li>

    <li id="li" class="dropdown" "style="padding-left:10px"><a href="#"> Gates</a>
    <div class="dropdown-content" style="z-index:20">
    <a href="AND.php">AND Gate</a>
    <a href="OR.php">OR Gate</a>
    <a href="NOT.php">NOT Gate</a>
    <a href="NAND.php">NAND Gate</a>
    <a href="NOR.php">NOR Gate</a>
    <a href="XOR.php">XOR Gate</a>
    <a href="XNOR.php">XNOR Gate</a>
    </div>
    </li>

    <li id="li"><a id="lia" href="shop.php">Shop</a></li>
    <li id="li"><a id="lia" href=" test.php">Test</a></li>
    <!-- <li id="li" style="padding-left:10px"><a id="lia" href="about.html">About us</a></li> -->

    <?php if(!isset($_SESSION['logged_user'])){
    echo '<li id="signin" style="float:right; padding-right: 10px;"><a href="login.html"> Log in </a> </li>
    <li id="signin" style="float:right; padding-right: 10px;"><a href="register.html"> Register </a> </li> ' ;
    }
    ?>
      <li id="userinfo" style=" padding-top: 10px;float:right"> <span><?php if(isset($_SESSION['logged_user'])) echo '<p style="padding-right:20px; display:inline; color:white; font-weight:800"> ' . 'Welcome ' . $_SESSION['logged_user'] ; ?> </p></span>
     </li>
     
     <?php if(isset($_SESSION['logged_user'])){
      echo '<li id="signout" style="float:right; padding-right: 10px;"><a href="logout.php"> Logout </a> </li> ' ;
  }
  ?>
</nav>


<h1 align="center">NAND Gate</h1>
</br></br>
<img id="pic" src='img/NAND.jpg'>
</br></br>
<p>In digital electronics, a NAND gate (negative-AND) is a logic gate which produces an output which is false only if all its inputs are true; thus its output is complement to that of the AND gate. A LOW (0) output results only if both the inputs to the gate are HIGH (1); if one or both inputs are LOW (0), a HIGH (1) output results. It is made using transistors and junction diodes. By De Morgan's theorem, AB=A+B, and thus a NAND gate is equivalent to inverters followed by an OR gate.</p>
</br></br>


<table border=3 cellpadding="25" align="center">

<tr><th>  A  </th><th>  B  </th><th>  Y  </th></tr>
<tr><td>  0  </td><td>  0  </td><td>  1  </td></tr>
<tr><td>  0  </td><td>  1  </td><td>  1  </td></tr>
<tr><td>  1  </td><td>  0  </td><td>  1  </td></tr>
<tr><td>  1  </td><td>  1  </td><td>  0 </td></tr>
</table>
</body>
</html>
