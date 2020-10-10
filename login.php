<?php include "includes/header.html"; ?>

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">


                    <div style="background-color: #E9AD28;" class="veen">
                        <div class="login-btn splits">

                            <h3 style="color: #fff; font-size: 26px; font-family: 'Barlow Condensed', sans-serif;">Already an user ?</h3>
                            <br>
                            <button class="active">Login</button>
                        </div>
                        <div class="rgstr-btn splits">
                            <h3 style="color: #fff; font-size:26px; font-family: 'Barlow Condensed', sans-serif;">Don't have an account ?</h3>
                            <br>
                            <button style="font-family: 'Barlow Condensed', sans-serif">Register</button>
                        </div>
                        <div style="background-color: #1a1a1a;" class="wrapper">
                            <form id="hid1"  autocomplete="off" style="background-color: transparent;" action="forms.php" method="POST">
                                <h2 style="color: #fff; font-family: 'Barlow Condensed', sans-serif;">NIE STAFF</h2>
                                
                                <img width="70%" src="img/downloads/login.png">
                                <h4 style="color: #fff; margin-bottom: 15px; margin-top: 10px; font-family: 'Barlow Condensed', sans-serif;">Login</h4>
                                <div class="mail">
                                    <input readonly type="text" onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly');
    // fix for mobile safari to show virtual keyboard
    this.blur();    this.focus();  }" placeholder="Enter Username" name="roll_no" required>
                                </div>
                                <div class="passwd">
                                    <input readonly onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly');
    // fix for mobile safari to show virtual keyboard
    this.blur();    this.focus();  }" type="password" placeholder="Enter Password" name="password" required>
                                </div>
                                <div class="submit">
                                    <button type="submit" class="dark">Login</button>
                                </div>
                            </form>

                            <form id="hid2" autocomplete="off" style="background-color: transparent; display: none;" action="" method="POST">
                                <h2 style="color: #fff; font-family: 'Barlow Condensed', sans-serif;">NIE STAFF</h2>

                                <img width="70%" src="img/downloads/login.png">
                                <h4 style="color: #fff; margin-bottom: 15px; margin-top: 10px; font-family: 'Barlow Condensed', sans-serif;">Register</h4>

                                <h5 style="color: #fff; font-weight: 400;">
                                    Click the Register button below to register as an a teacher
                                </h5>
<br>
                                <div class="submit">
                                    <button type="submit" class="dark">Register</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include "includes/footer.html"; ?>