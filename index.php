<?php
session_start();
error_reporting(0);
//include('includes/config.php');?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>School Result Management System</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" />
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" />
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" />
        <link rel="stylesheet" href="css/icheck/skins/flat/blue.css" />
        <link rel="stylesheet" href="css/main.css" media="screen" />
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body style="background-color: green;">
        <div class="main-wrapper" style="background-color: green;"> 

            <div class="login-bg-color bg-green-300">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel login-box"><br />
                            <div class="panel-heading">
                                <div class="panel-title text-center">
                                <div><img src="images/model_logo.png" width="150" height="120"/></div><br />
                                 <h5 style="color: green;">LAGOS STATE JUNIOR MODEL COLLEGE<br /></h5><br />
                                    <h6 style="color: green;">SCHOOL RESULT CHECKER</h6>
                                </div>
                            </div>
                            <div class="panel-body p-20">
                            <form name="frmCtnt" action="result.php" method="post" onsubmit="return(frmValidate());">
                            <div class="form-group">
                                		<label for="examno">Enter your Examination Number</label>
                                        <input type="text" class="form-control" id="examno" placeholder="Enter Examinaation No" autocomplete="off" name="examno"/>
                             </div>
                             
                             <div class="form-group">
                                        <label for="acadses"> Academic Session </label>
                                        <select name="session" class="form-control" id="default">
                                        <option value="0"> Select session </option>
                                        <?php for($i=1990; $i<= date("Y");$i++)  { $j= $i+1; ?>
                                          
                                        <option value=" <?= "$i/$j"; ?>"> <?= "$i/$j"; ?> </option>
                                        
                                        <?php } ?>
                                      
                                        
                                        </select>
                             
                             
                             </div>

                              
                                	<div class="form-group">
                                	 <label for="term">Examination Terms</label>
                                     <select name="term" class="form-control" id="default" required="required">
                                      <option value="0">Select term</option>
                                      <option value="first">First Term</option>
                                      <option value="second">Second Term</option>
                                      <option value="third">Third Term</option>
                                     </select>    
                                    </div>
                            
                             <div class="form-group">
                             <label for="default">Class</label>
                             <select name="classes" class="form-control" id="default" required="required">
                              <option value="0">Select your class</option>
                              <option value="JSS1">JSS 1</option>
                              <option value="JSS2">JSS 2</option>
                              <option value="JSS3">JSS 3</option>
                             </select>
                             </div>
                             <div class="form-group">
                             <label for="default">Class Arms</label>
                             <select name="arm" class="form-control" id="default" required="required">
                              <option value="0">Select class arm</option>
                              <option value="A">A</option>
                              <option value="B">B</option>
                              <option value="C">C</option>
                              <option value="D">D</option>
                              <option value="E">E</option>
                              <option value="F">F</option>
                             </select>
                             </div>

 <!--</select>-->
</div>

    
                                    <div class="form-group mt-20">
                                        <div class="">
                                            <button type="submit" class="btn btn-success btn-labeled pull-right">Search<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>

                                       <div class="col-sm-6">
                                                               <a href="http://lsmjcmeiran.org/">Back to Main Site</a>
                                                            </div>
                                </form>

                                <hr>

                            </div>
                        </div>
                        <!-- /.panel -->
                  
                    <!-- /.col-md-6 col-md-offset-3 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /. -->

        </div>
         <div style="background-color: gray; text-align: center;">
                        <p class="text-muted text-center" style=" background-color: #3A863A; gray; text-align: center;"><small style="color: #000;">Copyright © <a style="text-decoration:none; color: #000;"href="http://lsmjcmeiran.org/">LAGOS STATE MODEL JUNIOR COLLEGE - MEIRAN</a> <?=date("Y");?></small></p>
         </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>
        <script src="js/form_script.js" type="text/javascript"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/icheck/icheck.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function(){
                $('input.flat-blue-style').iCheck({
                    checkboxClass: 'icheckbox_flat-blue'
                });
            });
        </script>
        
        <script>
        /*
        window.onscroll = function() {myFunction()};
        
        // Get the header
        var header = document.getElementById("myHeader");
        
        // Get the offset position of the navbar
        var sticky = header.offsetTop;
        
        // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
            //alert("hurray");
          if (window.pageYOffset >= sticky) {
            header.classList.add("sticky");
          } else {
            header.classList.remove("sticky");
          }
        }*/
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>
