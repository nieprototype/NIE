<script type="text/javascript" src="js/validation.js"></script>
<?php include "includes/header.html"; ?>

        <div id="holder" style="background: #f8f8f8;">
            
            <div id="body" ><br>
            <!-- all other page content-start -->
            <div class="container" style="    
           background: #fff; 
        box-shadow: 0px 15px 16.83px 0.17px rgba(0, 0, 0, 0.05);
        -moz-box-shadow: 0px 15px 16.83px 0.17px rgba(0, 0, 0, 0.05);
        -webkit-box-shadow: 0px 15px 16.83px 0.17px rgba(0, 0, 0, 0.05);
        -o-box-shadow: 0px 15px 16.83px 0.17px rgba(0, 0, 0, 0.05);
        -ms-box-shadow: 0px 15px 16.83px 0.17px rgba(0, 0, 0, 0.05);
        border-radius: 20px;
        -moz-border-radius: 20px;
        -webkit-border-radius: 20px;
        -o-border-radius: 20px;
        -ms-border-radius: 20px;
        margin-bottom: 50px;">
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
<br><br>
                            <center> 
                                <h2>Results of the examinations</h2>
                                <p>Select the examination and enter one of following to get your results.</p>
                            </center>
                            <br>
                            <br>
                        </div>
                    </div>
                    <div style="border: 2px solid orange;border-radius: 5px;padding: 50px 50px 50px 50px;">
                    <div class="row">
                        <div class="col-md-3 field-label-responsive">
                            <label for="name">Examination</label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                       <div class="input-group"> 
                                        <select class="custom-select" id="inputGroupSelect04" required>
<option value="">Select your examination</option>
                                          <option value="1">M.Ed. Entrance Examination 2017</option>
                                          <option value="2">B.Ed. 2009/11 Part I </option>
                                          <option value="3">B.Ed. 2011/13 Part II</option>
                                          <option value="4">B.Ed. 2014 Part II Second List</option>
                                          <option value="5">B.Ed. 2011/2013 Part III 2015- Freshers and Repeaters</option>
                                          <option value="6">Combined Results of B.Ed. 2011/13 (2016)</option>
                                          <option value="7">Final Results of the Diploma in Early Childhoof Development 2015/16</option>
                                          <option value="8">Final Results of the Diploma in Teaching English as a Second Language</option>
                                          <option value="9">Final Results of the Diploma in Councelling English as a Second Language 2015/16</option>
                                          <option value="10">Final Results of the Advancced Certificate Course in Teaching Mathematics 2015/16</option>
                                          <option value="11">B.Ed. Entrance Examamination 2017</option>
                                        </select>  
 <div class="invalid-feedback">
       invalid entry or empty field!
      </div>
<div class="valid-feedback">
        Examination selected!
      </div> 
                                      </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-3 field-label-responsive">
                            <label for="email">Registration No.</label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                   
                                    <input type="text" name="registartion_no" class="form-control" id="registartion_no" required autofocus>
                                    <div class="invalid-feedback">
       invalid entry or empty field!
      </div>
<div class="valid-feedback">
        Registration number filled!
      </div> 
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-3 field-label-responsive">
                            <label for="password">Index number of Examination</label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-danger">
                                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                    
                                    <input type="text" name="Index_no" class="form-control" id="Index_no" required autofocus>
                                    <div class="invalid-feedback">
       invalid entry or empty field!
      </div>
<div class="valid-feedback">
       Index number filled!
      </div> 
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-3 field-label-responsive">
                            <label for="password">National Identity Card (NIC) No.</label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                    
                                    <input type="text" name="NIC" class="form-control"
                                           id="NIC" maxlength="12"  pattern="[0-9]{11}[V]{1}" required autofocus placeholder="NIC number since 2016 - 12 digits with capital V">
                                           <div class="invalid-feedback">
       invalid entry or empty field!
      </div>
<div class="valid-feedback">
        NIC filled!
      </div> 
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <br>
                            <center><button type="submit" class="btn btn-primary"> Find Results</button></center>
                        </div>
                        
                    </div></div><br>
                    <br>
                   
                </form>

            </div>
          
            <!-- all other page content-end -->
        </div>
<br><br>
        <?php include "includes/footer.html"; ?>
