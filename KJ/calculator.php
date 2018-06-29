<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <br><br>
  <title>Calculator</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.css" rel="stylesheet">
<link rel="shortcut icon" href="img/title.png"/>

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php"><img src="img/logos/kaijing white logo.png" > </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <!-- <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.html#services">Services</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="about.html">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.html#portfolio">Articles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="reviews.html">Reviews</a>
          </li>

          <!-- <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.html#team">Team</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="contactus.html">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<!-- <script type="text/javascript">
 function cal() {


    var capex1=document.getElementById("capex1");
    var time1=document.getElementById("time1");
    var sel1=document.getElementById("sel1");
    var result = document.getElementById("result");
    if(sel1==="Retirement"))
    {

      var myResult=capex1*Math.pow(1.10,time1);
      // alert("Expense for "+ sel1 +" will be ="+myResult+" Rupees");
      document.write("asdf");
    }
    else {
      var myResult = capex1*Math.pow(1.08,time1);
      alert("Expense for "+ sel1 +" will be ="+myResult+" Rupees");
    }
  };

</script> -->

<section>
  <h2>&emsp;&emsp;&emsp;Want to plan your Finance...?</h2>
  <div class="container">
    <div class="row">
      <div class="col-md-5">




<form name="sid" id="sid" method="POST" action="">
<!--
<div class="form-group">
<label for="email">Email:</label>
<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
</div> -->

<label for="sel1">What is your next expense:</label>
  <select class="form-control" id="sel1" name="sel1">
    <option value="Education">Education</option>
    <option value="Marriage">Marriage</option>
    <option value="Retirement">Retirement</option>
  </select>
  <br>
<div class="form-group">
<label for="time">When is your next Expense:</label>
<input type="number" class="form-control" id="time1" placeholder="Time in Years" name="time1">
</div>
<br>
<div class="form-group">
<label for="capex">Capital Expense:</label>
<input type="number" class="form-control" id="capex1" placeholder="In Rupees" name="capex1">
</div>
<br>
<!--<input type="text" value="<?php echo $result; ?>"></input>-->
<center><button type="submit" class="btn btn-success" onclick="sam()">Submit</button></center>
<br>
<!-- <input type="number" class="form-control" id="result" placeholder="In Rupees" name="result"></input> -->

</div>
</form>


        <?php
		error_reporting(0);
        $capex1 = ($_POST['capex1']);
        $time1 = ($_POST['time1']);
        $sel1 =($_POST['sel1']);
        if ($sel1=="Retirement") {
          // code...

        }
        else {
          $base=1.08;
          // code...
           $result=$capex1*pow($base,$time1);
           echo $result;
        }

        ?>

<div class="col-md-2">

</div>


  <!-- <div class="col-md-5"> -->

  <!-- <form name="sid" id="sid" method="POST" action="calculator.html"> -->
  <!--
  <div class="form-group">
  <label for="email">Email:</label>
  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
  </div> -->

  <!-- <label for="sel1">What is your next expense:</label>
    <select class="form-control" id="sel1">
      <option>Education</option>
      <option>Marriage</option>
    </select>
    <br>
  <div class="form-group">
  <label for="time">When is your next Expense:</label>
  <input type="number" class="form-control" id="time1" placeholder="Time in Years" name="time1">
  </div>
  <br>
  <div class="form-group">
  <label for="capex">Capital Expense:</label>
  <input type="number" class="form-control" id="capex1" placeholder="In Rupees" name="capex1">
  </div>
  <br> -->
  <!-- <center><button type="submit" class="btn btn-success" onclick="cal()">Submit</button></center> -->
  <br>
  <!-- <input type="number" class="form-control" id="result" placeholder="In Rupees" name="result"></input> -->
<!-- </form> -->
  </div>
</div>
<!-- </div> -->
<!-- </div> -->

  </section>
  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy;Kaijing.in 2018</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="https://twitter.com/connectsudhir"  target="_blank">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.facebook.com/FinancialFitness.org.in"  target="_blank">
                <i class="fa fa-facebook"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.linkedin.com/in/sudhirkhot/"  target="_blank">
                <i class="fa fa-linkedin"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#"  target="_blank">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#"  target="_blank">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <!-- <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script> -->

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>


  <!-- EDU MF -->
  <!-- Bootstrap core JavaScript -->
  <!-- <script src="Styling for EDU/vendor/jquery/jquery.min.js"></script>
  <script src="Styling for EDU/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->


  <script type="text/javascript">
    if ("Notification" in window){
      let ask = Notification.requestPermission();
      ask.then(permission => {
        if (permission=="granted") {
          let msg = new Notification("KAIJING",{
            body:"We are the solution to all your investment related problem",
            icon:"img/kaijing black.png"
          });

          // msg.addEventListener("click", event =>{
          //   alert("Click Received");
          // });

        }
      });
    }
  </script>

  </body>
  </html>
