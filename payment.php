<?php 
    include 'includes/top_header.php';
?>

<div class="payment">
  <div class="content text-center">
        <div class="heading">
            <h1>Only Cash On Delevary</h1>
            <hr/>
        </div>
        <div class="checkout">
            <form action="success.php" method="POST">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                            <input class="form-control" type="text" name="name" placeholder="Your Name.." />
                        </div>
                        
                        <div class="col-md-6">
                            <label for="fname"><i class="fa fa-user"></i> Father's Name</label>
                            <input class="form-control" type="text" name="father" placeholder="Father Name.." />
                        </div>

                        <div class="col-md-6">
                            <label for="email"><i class="fa fa-phone"></i> Phone No</label>
                            <input class="form-control" type="text" name="phone" placeholder="Your Phone Number.." />
                        </div>

                        <div class="col-md-6">
                            <label for="address"><i class="fa fa-envelope"></i> Billing Address</label>
                            <input class="form-control" type="text" name="address" placeholder="Your Address.." />
                        </div>

                        <div class="col-md-6">
                            <label for="book"><i class="fa fa-book"></i> Book Name</label>
                            <input class="form-control" type="text" name="book" placeholder="Books Name.." />
                        </div>

                        <div class="col-md-6">
                            <label for="amount"><i class=""></i> $ Total Amount</label>
                            <input class="form-control" type="text" name="amount" placeholder="Tk." />
                        </div>

                        <div class="col-md-12">
                            <div class="pmnt_btn text-center">
                                <button type="submit" name="submit" class="btn btn-danger">Submit</button>
                            </div>
                        </div>	

                    </div>
                </div>
            </form>        
        </div>
<?php 
	include 'includes/footer.php';
?>