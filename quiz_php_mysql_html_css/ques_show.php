<?php 
include("class/user.php");
$ques=new users;
$cat=$_POST["cat"];
$ques->ques_show($cat);
$_SESSION['cat']=$cat

// echo"<pre>";
// print_r($ques-> ques);

?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript">

  // timeout implimentation
 
  function timeout() {
    //   var hours=Math.floor(timeLeft/60);
      var minute=Math.floor(timeLeft/60);
      var second=timeLeft%60;
      var min=checktime(minute);
      var sec=checktime(second);

      if (timeLeft<=0)
      {     
          clearTimeout(tm);
        //   $("#form").submit();
          document.getElementById("form1").submit();
      }
      else
      {
        //   if (minute<10) {
        //       minute='0'+minute;
        //   }
        document.getElementById("time").innerHTML=min+":"+sec;
      }
      timeLeft--;
      var tm = setTimeout(function(){timeout()},1000); 
  }
  function checktime(msg) {
        if(msg<10)
        {
            msg='0'+msg;
        }
        return msg;
  }
  </script>
  
<style>
    
    body { 
    background: url("./images/ques.jpg") no-repeat center/cover; /* #1abc9c Green */
    /* color: #333; */
    opacity: 0.9;
  }
  .panel {
    box-shadow: 1rem 1rem 1rem -0.7rem rgba(0, 0, 0, 0.9);
  }

</style>

</head>

<body onload="timeout()">

<div class="container">
<br>
<div class="panel panel-info">
    <div class="col-sm--2"></div>
    <div class="col-sm--8">
 <div class="panel-heading"><h2>Quiz on php 
 <script type="text/javascript">
 var timeLeft=20*60;
 
 </script>
 <div id="time" style="float:right">Timeout</div> </h2></div>
 <form id="form1" action="answer.php" method="post">

  <!-- logic for showing questions on the page -->
   
   <?php 
   $i=1;
   foreach ($ques->ques as $qust) 
   {?>                       
  <table class="table table-bordered">
    <thead>
      <tr class="danger">
        <th><?php echo $i; ?>&nbsp;<?php echo $qust['question'];?></th>
      </tr>
    </thead>
    <tbody>
     <?php if(isset($qust['ans 1'])) {?>
      <tr class="info">
        <td>&nbsp;1&emsp;<input type="radio" value="0" name="<?php echo $qust['id'];?>">&nbsp;<?php echo $qust['ans 1'];?></td>
      </tr>
      <?php  }?>
      <?php if(isset($qust['ans 2'])) {?>
      <tr class="success">
        <td>&nbsp;2&emsp;<input type="radio" value="1" name="<?php echo $qust['id'];?>">&nbsp;<?php echo $qust['ans 2'];?></td>
      </tr>
      <?php  }?>
      <?php if(isset($qust['ans 3'])) {?>
      <tr class="info">
        <td>&nbsp;3&emsp;<input type="radio" value="2" name="<?php echo $qust['id'];?>">&nbsp;<?php echo $qust['ans 3'];?></td>
      </tr>
      <?php  }?>
      <?php if(isset($qust['ans 4'])) {?>
      <tr class="success">
        <td>&nbsp;4&emsp;<input type="radio" value="3" name="<?php echo $qust['id'];?>">&nbsp;<?php echo $qust['ans 4'];?></td>
      </tr>
      <?php  }?>
      <tr class="info">
        <td><input type="radio" checked="checked" style="display:None ;" value="Not_attempt" name="<?php echo $qust['id'];?>"></td>
      </tr>
    </tbody>
  </table>
  <?php $i++; }?>
  <center><input type="submit" value="submit Quiz" class="btn btn-success"></center> 
  </form>
  </div>
  </div>
</div>

</body>
</html>