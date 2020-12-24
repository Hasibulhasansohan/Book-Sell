<?php 
    include 'includes/top_header.php';
    include 'includes/config.php';
    if(isset($_POST["submit"])){
        $name       =$_POST['name'];
        $father     =$_POST['father'];
        $phone      =$_POST['phone'];
        $address    =$_POST['address']; 
        $book       =$_POST['book']; 
        $amount     =$_POST['amount']; 

        $shop  = mysqli_query($con,"INSERT INTO `shop` (`id`, `name`, `father name`, `phone no`, `address`, `book name`, `amount`) VALUES (NULL, '$name', '$father', '$phone', '$address', '$book', '$amount')");

    }
    // contact form
    if(isset($_POST["insert"])){
        $name    =$_POST['name'];
        $email   =$_POST['email'];
        $subject =$_POST['subject'];
        $msg     =$_POST['msg'];

        $book  = mysqli_query($con,"INSERT INTO `contact`(`id`, `name`, `email`, `subject`, `msg`) VALUES (Null,'$name','$email','$subject','$msg')");  
    }
?>

<div class="success">
    <div class="container">
        <div class="row">
           <div class="col-md-12">
               <div class="content text-center">
                    <img src="assets/images/success1.png" alt="congrats">
                    <h1>Successfully!</h1>
                    <h3>You have been able to connect us. <br/> We will contact you as soon as possible.</h3>
                    <h2>Thanks!</h2>
               </div>
           </div> 
        </div>
    </div>
</div>

<?php 
	include 'includes/footer.php';
?>