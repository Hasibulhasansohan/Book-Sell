<?php 
	include 'includes/top_header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <style>
        .our-service{
        margin-top: 100px;
        margin-bottom: 100px;
        }
        .section-title{
            width:100%;
            margin-bottom:40px;	
        }
        .section-title h2{
            color: red;
        }
        .section-title p{
            max-width:500px;
            color:#6c757d ;
            margin:0 auto;
        }
        .our-service .single-service .fa {
            margin-top: 30px;
            font-size: 60px;
            color: #e65f78;
        }
        .single-service {
            border:1px solid #e8e8e8;
            padding:15px;
            margin-bottom:20px;
            position:relative;
        }
        .single-service h3{
            font-size:20px;
            padding:15px 0px;
            color:#212529;
            font-weight:600;
            cursor: pointer;
        }
        .single-service p{
            color:#6c757d;
            margin-top: 30px;
        }
        .border-bottom-h3{
            height:2px;
            position: absolute;
            background:#e65f78;
            transition: all 0.5s;
            width: 18%;
            right: 0;
            left: 0;
            margin: 0px auto;
        }
        .single-service:hover .border-bottom-h3{
            width:80px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="our-service text-center"> 
	    <div class="container">
			<div class="row">
				<div class="section-title">
					<h2>Our Categories</h2>
					<p>Book Lending and selling system</p>
				</div>
				<div class="col-md-4">
					<div class="single-service">
						<a href="cse_gallery.php"><i class="fa fa-gamepad"></i>
						<h3>Software Department</h3></a>
						<div class="border-bottom-h3"></div>
						<P>The system is a university based system. The system will work in two ways.</P>
					</div>
                </div>
                <div class="col-md-4">
					<div class="single-service">
						<a href="cse_gallery.php"><i class="fa fa-laptop"></i>
						<h3>CSE Department</h3></a>
						<div class="border-bottom-h3"></div>
						<P>The system is a university based system. The system will work in two ways.</P>
					</div>
                </div>
                <div class="col-md-4">
					<div class="single-service">
						<a href="cse_gallery.php"><i class="fa fa-lightbulb-o"></i>
						<h3>EEE Department</h3></a>
						<div class="border-bottom-h3"></div>
						<P>The system is a university based system. The system will work in two ways.</P>
					</div>
                </div>
                <div class="col-md-4">
					<div class="single-service">
						<a href="cse_gallery.php"><i class="fa fa-building"></i>
						<h3>Civil Department</h3></a>
						<div class="border-bottom-h3"></div>
						<P>The system is a university based system. The system will work in two ways.</P>
					</div>
                </div>
                <div class="col-md-4">
					<div class="single-service">
						<a href="cse_gallery.php"><i class="fa fa-wrench"></i>
						<h3>ME Department</h3></a>
						<div class="border-bottom-h3"></div>
						<P>The system is a university based system. The system will work in two ways.</P>
					</div>
                </div>
                <div class="col-md-4">
					<div class="single-service">
						<a href="pharmacy.php"><i class="fa fa-stethoscope"></i>
						<h3>Pharmacy</h3></a>
						<div class="border-bottom-h3"></div>
						<P>The system is a university based system. The system will work in two ways.</P>
					</div>
                </div>

			</div>
		</div>
	</div>   
</body>
</html>


<?php 
	include 'includes/footer.php';
?>