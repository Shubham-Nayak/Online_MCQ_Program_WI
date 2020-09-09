<?php $conn=mysqli_connect('localhost','root','','db_wi');

if(isset($_POST['submit']))
{
    $id=$POST['id'];
}
if(!empty($id))
{
$sql="SELECT * FROM  commonmaster WHERE id='$id' ";
    
}
else{
$sql="SELECT * FROM  commonmaster ";
}
$query=mysqli_query($conn,$sql);


?>

<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<title>
WI Task 
</title>
</head>
<style>
    span{
        font-weight: 500;
    }
    .paper{
        display: none;
    }
</style>
<body>
   <center><h1 >WI Task</h1></center>
   <div class="container row">

   <div class="col-md-8 col-xl-8" style="background-color: #dcd6d6;">
       <?php $counter=1; foreach($query as $info):?>
        <div id="paper<?php echo $info['id'];?>" class="paper">
       <p ><span>Question No <?php echo $counter;?>:</span> <?php echo $info['question'];?></p>
       <p><span>Choose Correct Awnser:</span> </p>
       <input type="radio" name="awnser" value="<?php echo $info['choice_one'];?>"><?php echo $info['choice_one'];?></br>
       <input type="radio" name="awnser" value="<?php echo $info['choice_two'];?>"><?php echo $info['choice_two'];?></br>
       <input type="radio" name="awnser" value="<?php echo $info['choice_three'];?>"><?php echo $info['choice_three'];?></br>
       <input type="radio" name="awnser" value="<?php echo $info['choice_four'];?>"><?php echo $info['choice_four'];?></br>
        </div>
       <?php $counter++; endforeach;?>

   </div>
   <div class="col-md-4 col-xl-4">
   <?php $counter=1; foreach($query as $info):?>
    <button class="btn btn-danger question" data-qid="<?php echo $info['id'];?>" id=""> <?php echo $counter;?></button>
    <?php $counter++; endforeach;?>

       
   </div>
   </div>

</body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>


$(document).ready(function(){
    $('.question').on('click',function(){
    var dataId = $(this).attr("data-qid");
    $(".paper").css('display','none'); 
    $("#paper"+dataId).css('display','inline-block'); 



  });
});

</script>
</html>