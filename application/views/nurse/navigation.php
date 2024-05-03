<div class="sidebar-background">

	<div class="primary-sidebar-background">

	</div>

</div>

<div class="primary-sidebar">

	<!-- Main nav -->

    <br />

    <div style="text-align:center;">

    	<a href="<?php echo base_url();?>">

        	<img src="<?php echo base_url();?>uploads/hmslg.png"  style="max-height:100px; max-width:100px;"/>

        </a>

    </div>

   	<br />

	<ul class="nav nav-collapse collapse nav-collapse-primary">

    

        

        <!------dashboard----->

		<li class="<?php if($page_name == 'dashboard')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?nurse/dashboard" >

					<i class="icon-desktop icon-2x"></i>

					<span><?php echo ('Dashboard');?></span>

				</a>

		</li>

        

        <!------patient----->

		<li class="<?php if($page_name == 'manage_patient')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?nurse/manage_patient" >

					<i class="icon-user icon-2x"></i>

					<span><?php echo ('Patient');?></span>

				</a>

		</li>

        

        

        <!------bed/ward------>

		<li class="dark-nav <?php if($page_name == 'manage_bed' || $page_name == 'manage_bed_allotment')echo 'active';?>">

			<span class="glow"></span>

            <a class="accordion-toggle  " data-toggle="collapse" href="#bed_submenu" >

                <i class="icon-hdd icon-2x"></i>

                <span><?php echo ('Bed Ward');?><i class="icon-caret-down"></i></span>

            </a>

            

            <ul id="bed_submenu" class="collapse <?php if($page_name == 'manage_bed' || $page_name == 'manage_bed_allotment')echo 'in';?>">

                <li class="<?php if($page_name == 'manage_bed')echo 'active';?>">

                  <a href="<?php echo base_url();?>index.php?nurse/manage_bed">

                      <i class="icon-hdd"></i> <?php echo ('Manage Bed');?>

                  </a>

                </li>

                <li class="<?php if($page_name == 'manage_bed_allotment')echo 'active';?>">

                  <a href="<?php echo base_url();?>index.php?nurse/manage_bed_allotment">

                      <i class="icon-wrench"></i> <?php echo ('Manage Bed Allotment');?>

                  </a>

                </li>

            </ul>

		</li>

        

        <!------blood bank------>

		<li class="dark-nav <?php if($page_name == 'manage_blood_bank' || $page_name == 'manage_blood_donor')echo 'active';?>">

			<span class="glow"></span>

            <a class="accordion-toggle  " data-toggle="collapse" href="#blood_submenu" >

                <i class="icon-tint icon-2x"></i>

                <span><?php echo ('Blood Bank');?><i class="icon-caret-down"></i></span>

            </a>

            

            <ul id="blood_submenu" class="collapse <?php if($page_name == 'manage_blood_bank' || $page_name == 'manage_blood_donor')echo 'in';?>">

                <li class="<?php if($page_name == 'manage_blood_bank')echo 'active';?>">

                  <a href="<?php echo base_url();?>index.php?nurse/manage_blood_bank">

                      <i class="icon-tint"></i> <?php echo ('Manage Blood Bank');?>

                  </a>

                </li>

                <li class="<?php if($page_name == 'manage_blood_donor')echo 'active';?>">

                  <a href="<?php echo base_url();?>index.php?nurse/manage_blood_donor">

                      <i class="icon-user"></i> <?php echo ('Manage Blood Donor');?>

                  </a>

                </li>

            </ul>

		</li>



		



		<!-------report-------->

		<li class="<?php if($page_name == 'manage_report')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?nurse/manage_report" >

					<i class="icon-hospital icon-2x"></i>

					<span><?php echo ('Report');?></span>

				</a>

		</li>





		<!------manage own profile--->

		<li class="<?php if($page_name == 'manage_profile')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?nurse/manage_profile" >

					<i class="icon-lock icon-2x"></i>

					<span><?php echo ('Profile');?></span>

				</a>

		</li>

		

	</ul>

	

</div>