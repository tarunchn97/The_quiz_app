<?php
include("class/user.php");
$email=$_SESSION['email'];
$profile=new users;
$profile->users_profile($email);
$profile->cat_shows();
// print_r($profile->data);
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    
    body { 
    background: url("./images/explore.jpg") no-repeat center/cover; /* #1abc9c Green */
    /* color: #333; */
    opacity: 0.9;
  }
  .panel {
    box-shadow: 0 1rem 1rem -0.7rem rgba(0, 0, 0, 0.9);
  }
    </style>


</head>
<body>

<div class="container">
<br>
<div class="panel panel-info">
<div class="panel-heading"><h2>Online Quiz</h2></div>                 
  <ul class="nav nav-tabs" role="tablist">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Profile</a></li>
    <li><a data-toggle="tab" href="#menu2">Test-Guidelines</a></li>
    <li><a data-toggle="tab" href="#menu3">About</a></li>        
  </ul>
  <div class="tab-content">
  <div id="home" class="tab-pane fade in active">
  <h3>Read the test-guidelines by clicking on the <strong>Test-Guidelines</strong> in the menu before starting the test.</h3>
  <br>
  <center><button type="button" class="btn btn-warning" data-toggle="tab" href="#sel1">Subject List</button></center>
    <div id="sel1" class="form-group">

    <form action="ques_show.php" method="post">
    
      <label for="sel1">Select the test Domain of your choice :</label>
      
      <select class="form-control" id="" name="cat">
      <?php 
      foreach($profile->cat as $category)
      {?>
        <option value="<?php echo $category['id'];?>"><?php echo $category['cat_name'];?></option>
        <?php }?>
      </select> 
      <br>
    <center><input type="submit" value="Start Test" class="btn btn-primary"></center>
      </form>
    </div>
  </div>

  <div id="menu1" class="tab-pane fade">
  <center><h3>Your Profile</h3></center>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>E-Mail</th>
        <th>Profile-Image</th>
      </tr>
    </thead>
    <tbody>
    <?php
    foreach($profile->data as $prof)
    {?>
      <tr>
        <td><?php echo $prof['id'];?></td>
        <td><?php echo $prof['name'];?></td>
        <td><?php echo $prof['email'];?></td>
        <td><img src="img/<?php echo $prof['img']; ?>" alt="" width="100px" height="100px"></td>
      </tr>
    </tbody>
    <?php }?>
  </table>
  </div>

  <div id="menu2" class="tab-pane fade">
  <center><h3>Test - Guidelines</h3></center>
  <p>1. The test will contains 10 multiple choice questions.</p>
  <p>2. You have to attempt any 8 out of 10 questions.</p>
  <p>3. The duration of test will be 20 minutes.</p>
  <p>4. Each question carry one mark.</p>
  <p>5. There is no negetive marking.</p>
  <p>6. The test will be auto submited after 20 minutes.</p>
  <center><h2>Best Of Luck !!</h2></center>
  </div>

  <div id="menu3" class="tab-pane fade">
  <center><h3>About</h3></center>
  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis exercitationem facilis similique repellendus doloremque, repudiandae esse. Voluptatibus nostrum, impedit dolorum porro velit nisi corrupti optio repudiandae labore quia quam? Doloremque aliquid quo fugiat at!</p>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore ipsam suscipit adipisci delectus eum, modi obcaecati dignissimos similique ea vel excepturi sequi? Doloremque, a aliquam! Sequi assumenda sint impedit voluptatem modi? Iusto perferendis totam expedita possimus. A ab eius cum laborum amet aspernatur, nemo illo, eaque tenetur repellat necessitatibus? Earum corrupti vero ipsum molestias facere eveniet nam qui illum aliquid eum laborum nobis, repellat quae debitis numquam necessitatibus ea? Eveniet fugit nulla nobis libero, consequuntur dolore assumenda, possimus exercitationem officiis quasi voluptatibus pariatur voluptate tempore eum corrupti similique dicta facere dolorum consectetur ut perferendis inventore ullam. Ipsam eius officia voluptate accusamus cum numquam blanditiis, ipsa doloribus id nihil ullam. Qui debitis dignissimos pariatur. Eius veritatis numquam modi quod suscipit sit ipsam. Molestiae, dicta illo cum odio sequi quis sapiente aperiam ipsum, nisi minima tempore ut aspernatur officiis at. Quibusdam eligendi a consequuntur dolorum cum quod eaque illum earum aperiam, autem iste fugit? Libero enim distinctio numquam suscipit dolor! Eaque tempore consequuntur placeat! Vitae, qui animi aut perferendis ad facilis culpa!</p>
  </div>

  </div>
  <br>
  </div>
</div>

</body>
</html>
