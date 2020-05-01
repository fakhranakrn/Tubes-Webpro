<div style="padding-left: 30%">
    <!-- <?php echo $this->session->flashdata('msgRegist'); ?> -->
    <h2> <b>Create Account</b> </h2>
    <br>
    <form action="" method="post">
        <p>First Name</p>
        <input type="text" name="fname" style="padding: 5px; padding-right: 225px;">
        <p style="padding: 15px 0 0 0">Last Name</p>
        <input type="text" name="lname" style="padding: 5px; padding-right: 225px;">
        <p style="padding: 15px 0 0 0">Email</p>
        <input type="email" name="email" style="padding: 5px; padding-right: 225px;">
        <p style="padding: 15px 0 0 0">Password</p>
        <input type="password" name="pass" style="padding: 5px; padding-right: 225px;">
        <br>
        <br>
        <button type="submit" name="create" style="padding: 5px; width: 70px; height: 40px; border: 1px solid #332e2b; background-color: #332e2b; color: #e5e4e1"> 
            Create 
        </button> or <a href="<?php echo site_url('HomeController'); ?>" style="text-decoration: none; color: white"> 
            Return to Store 
        </a>
    </form>
</div>