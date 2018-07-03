<?php

/**
 * @author lolkittens
 * @copyright 2018
 */



?>

<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<script src="jquery/jquery-2.2.4.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
    <head> 
		
          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


		<!-- Website CSS style -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/layout.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>LSMJC-RESULT PORTAL</title>
        
        <style>
         a.red{
            color:#669d89 !important;
            font-size: 18px;
         }
         
         a:hover{
            color: #669d89;
            background-color: ;
         }
         
         li>a.active{
            color: white !important;
         }
         a.active:hover{
            background-color:#f27c7e !important;
         }
         button.color{background-color: green !important;
         }
         
        </style>
	</head>
	<body style="background-image: url(images/back.png); overflow-x: hidden;">
    
    <div class="header3" style="width:100%;">
    <a href="http://lsmjcmeiran.org/"><img  src="images/lagos.png" width="100%"/> </a> 
    
    <div class="nav">
  
   <nav class="navbar navbar-inverse main-menu"  style="background-color:#f4df90; border: none;">
  <div class="container-fluid text-center">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle color" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar "></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" style="padding-left: 90px;">
        
            <li > <a href="http://lsmjcmeiran.org/" class="red">Home</a></li> 
            <li> <a href="http://lsmjcmeiran.org/index.php/about/" class="red"> About  </a> </li> 
            <li> <a href="http://lsmjcmeiran.org/index.php/academics/" class="red">Academics</a></li> 
            <li>  <a href="http://lsmjcmeiran.org/index.php/gallery/" class="red">Gallery</a></li> 
            <li> <a href="http://lsmjcmeiran.org/index.php/parents-forum/" class="red">Parents&apos; Forum</a></li>
            <li> <a href="http://portal.lsmjcmeiran.org/" class="active red">Result Portal </a></li>
            <li> <a href="http://lsmjcmeiran.org/index.php/news/" class="red">News</a> </li>
            <li><a href="http://lsmjcmeiran.org/index.php/contact/" class="red">Contact</a></li>
        </ul>
      
    </div>
  </div>
</nav>
    
    </div>
    </div>
    
    
     
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h3 class="text-center">RESULT CHECKER</h3>
               
					<form name="frmCtnt" action="result.php" method="post" onSubmit="return(frmValidate());">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Examination Number</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="	fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="examno" id="examno"  placeholder="EnterExamination Number"/>
								</div>
							</div>
						</div>

                         
                             <div class="form-group">
                             
                                        <label for="acadses" class="cols-sm-2 control-label"> Academic Session </label>
                                        <div class="cols-sm-10">
                                        
                                        <div  class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-sort-numeric-desc fa" aria-hidden="true"></i></span>
                                        <select name="session" class="form-control" id="email">
                                         <option value="i"> --Select Session-- </option> 
                                        <?php for($i=2000; $i<= date("Y"); $i++)  { $j= $i+1; ?>
                                        
                                        <option value=" <?= "$i/$j"; ?>"> <?= "$i/$j"; ?> </option>
                                        
                                        <?php } ?>
                                      
                                        
                                        </select>
                                        </div>
                                        
                                        </div>
                                 
                             </div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Examination Term</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="	fa fa-calendar fa" aria-hidden="true"></i></span>
									<select name="term"  class="form-control"  id="username" required="required">
                                      <option value="0">Select term</option>
                                      <option value="first">First Term</option>
                                      <option value="second">Second Term</option>
                                      <option value="third">Third Term</option>
                                     </select>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Class</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-graduation-cap fa-lg" aria-hidden="true"></i></span>
								<select name="classes" class="form-control" id="password"  required="required">
                              <option value="0">Select your class</option>
                              <option value="JSS1">JSS 1 </option>
                              <option value="JSS2">JSS 2 </option>
                              <option value="JSS3">JSS 3 </option>
                             </select>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Class arm</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="	fa fa-sort-alpha-asc fa-lg" aria-hidden="true"></i></span>
									<select name="arm" class="form-control" id="confirm" required="required">
                              <option value="0">Select class arm</option>
                              <option value="A">A</option>
                              <option value="B">B</option>
                              <option value="C">C</option>
                              <option value="D">D</option>
                              <option value="E">E</option>
                              <option value="F">F</option>
                             </select>
								</div>
							</div>
						</div>

						<div class="form-group ">
						 <!-- <a href="http://deepak646.blogspot.in" target="_blank" type="button" id="button" class="btn btn-primary btn-lg btn-block login-button " style=" background-color:#f4df90;">GO</a>
						--><button type="submit" class="btn btn-success btn-labeled pull-right" style="background-color: #f4df90; color: green;">Search&nbsp;<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span>
                        </button>
                        </div>
                         <div class="form-group " >
                            <a href="http://lsmjcmeiran.org/" style="color: white; visibility: hidden;">Back to Main Site</a>
                         </div>
						
					</form>
                    </div>
				</div>
			</div>
            
             <div class="row" style="background-color: #3A863A; text-align: center;">
             <div class="col-md-6">
             <small>
             <p class="text-muted text-center" style=" background-color: #3A863A; color:white; text-align: center; padding: 20px;" > Copyright &copy; <?=date("Y");?> Lagos State Model College - Meiran </p>
             </small>
             
             </div>
              <div class="col-md-6">
              <small>
             <p class="text-muted text-center" style=" background-color: #3A863A; gray; text-align: center; padding: 20px;">
             <span style="color: #fff;">Developed By</span><a style="text-decoration:none; color: #fff;"href="http://boldlinks.com.ng/"> Boldlinks Technology Solutions</a>
                         
             
             </p> </small>
             </div>
         </div>
		

		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/form_script.js" type="text/javascript"></script>
	</body>
</html>