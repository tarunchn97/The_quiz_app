<?php 
include("class/user.php");
$ans=new users;
$answer=$ans->answer($_POST);
// print_r($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
<style>
    
    body { 
    background: url("./images/answer.jpg") no-repeat center/cover; /* #1abc9c Green */
    /* color: #333; */
    /* filter: blur(8px); */
    /* opacity: 1.0 ;  */
  }
</style>

</head>

<body>

<div class="container">
    <?php 
    $total_ques=$answer['right']+$answer['wrong']+$answer['no_answer'];
    $attempt_ques=$total_ques-$answer['no_answer'];
    // echo $answer['no_answer'];
    $percent=($answer['right']*100)/$total_ques;
    ?>
  <center><h1><b> Here is your Result !!</b></h1></center>          
  <table class="table table-hover">
    <thead>
      <tr>
        <th><h4>Final Score! -&nbsp; <?php echo $percent;?>%</h4></th>
      </tr>
    </thead>
    <tbody>
    <tr>
        <td>
        <div class="alert alert-info">
            <center><strong><h4>Total Questions -&nbsp;<?php echo $total_ques; ?></h4></strong></center>
        </div>
        </td>
      </tr>
      <tr>
        <td>
        <div class="alert alert-success">
            <center><strong><h4>Right Answer -&nbsp;<?php echo $answer['right']; ?></h4></strong></center>
        </div>
        </td>
      </tr>
      <tr>
        <td>
        <div class="alert alert-danger">
            <center><strong><h4>Wrong Answer -&nbsp;<?php echo $answer['wrong']; ?></h4></strong></center>
        </div>
        </td>
      </tr>
      <tr>
        <td>
        <div class="alert alert-info">
            <center><strong><h4>Questions Attempt -&nbsp;<?php echo $attempt_ques; ?></h4></strong></center>
        </div>
        </td>
      </tr>
      <tr>
        <td>
        <div class="alert alert-warning">
            <center><strong><h4>Not attempt -&nbsp;<?php echo $answer['no_answer']; ?></h4></strong></center> 
        </div>
        </td>
      </tr>
    </tbody> 
  </table>

</div>

</body>
</html>
