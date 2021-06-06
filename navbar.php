<div class="topnav" id="myTopnav">
  <a href="index.php" class="active">Home</a>
  <a href="create_post.php">Create</a>
 
  <a href="logout.php">logout</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>


<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}</script>
