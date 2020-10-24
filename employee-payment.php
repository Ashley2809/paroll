<!DOCTYPE html>
<html lang="en">
<title>Payment parameter</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/font.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="vendor/icofont/icofont.min.css" rel="stylesheet">
<link href="vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="vendor/venobox/venobox.css" rel="stylesheet">
<link href="vendor/aos/aos.css" rel="stylesheet">
                                                   
<!-- Template Main CSS File -->
<link href="css/style.css" rel="stylesheet">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

<!-- Sidebar/menu -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><span>Payroll Management System</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="images/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="department.php">Department</a></li>
          <li><a href="employee.php">Employee</a></li>
          <li  class="active"><a href="employee-payment.php">Payment Salary</a></li>
          <li><a href="employee-payslip.php">Payslip</a></li>
          <li><a href="employee-setsalary.php">Set salary</a></li>
          <li><a href="employee-payhistory.php">payment history</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header>

<!-- Top menu on small screens -->

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:290px;margin-right:-10px;margin-top: -5px;margin-bottom: 0px">

  <!-- Header -->
      
      
      <div class="w3-container" style="padding: 150px 200px 20px 200px">
      
     
      <form class="w3-container" action="emp-payphp.php" method="post">
          
                 <p><label>Employee id</label>
                      <input class="w3-input w3-light-grey w3-animate-input" type="number" name="empid"></p>
                 <p>
                     <label>Select Year</label>
                      <input class="w3-input w3-light-grey w3-animate-input" type="number" name="year"></p>
                <p> <label>Select Month</label>
                 <select class="w3-input w3-light-grey w3-animate-input" name="month">
                  <option value="january">january</option>
                   <option value="february">february</option>
                   <option value="march">march</option>
                    <option value="april">april</option>
                      <option value="may">may</option>
                     <option value="june">june</option>
                     <option value="july">july</option>
                     <option value="august">august</option>
                     <option value="september">september</option>
                     <option value="october">october</option>
                     <option value="november">november</option>
                     <option value="december">december</option>
              </select>
          </p>
                <p>
                     <label>Absence</label>
                      <input class="w3-input w3-light-grey w3-animate-input" type="number" name="absence"></p>
                <p>
                     <label>Overtime</label>
                       <input class="w3-input w3-light-grey w3-animate-input" type="number" name="overtime"></p>
               <p><label>Seasonal Bonus</label>
                      <input class="w3-input w3-light-grey w3-animate-input" type="number" name="sbonus"></p>
          
               <p><label>Other Bonus</label>
                      <input class="w3-input w3-light-grey w3-animate-input" type="number" name="obonus"></p>
                 
                 
                     <input type="submit" value="Submit" class="w3-input w3-green w3-round-xxlarge w3-animate-input w3-hover-blue">
                     
       
                 
               
            </form>
      
      
      
      </div>
   
      
          
  </div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>
