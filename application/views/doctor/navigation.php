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

				<a href="<?php echo base_url();?>index.php?doctor/dashboard" >

					<i class="icon-desktop icon-2x"></i>

					<span><?php echo ('Dashboard');?></span>

				</a>

		</li>

        

        <!------patient----->

		<li class="<?php if($page_name == 'manage_patient')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?doctor/manage_patient" >

					<i class="icon-user icon-2x"></i>

					<span><?php echo ('Patient');?></span>

				</a>

		</li>

        

        <!------appointment----->

		<li class="<?php if($page_name == 'manage_appointment')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?doctor/manage_appointment" >

					<i class="icon-edit icon-2x"></i>

					<span><?php echo ('Manage Appointment');?></span>

				</a>

		</li>

        

        <!------prescription----->

		<li class="<?php if($page_name == 'manage_prescription')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?doctor/manage_prescription" >

					<i class="icon-stethoscope icon-2x"></i>

					<span><?php echo ('Manage Prescription');?></span>

				</a>

		</li>

        

        <!------bed allotment----->

		<li class="<?php if($page_name == 'manage_bed_allotment')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?doctor/manage_bed_allotment" >

					<i class="icon-hdd icon-2x"></i>

					<span><?php echo ('Bed Allotment');?></span>

				</a>

		</li>

        

        <!------blood bank----->

		<li class="<?php if($page_name == 'view_blood_bank')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?doctor/view_blood_bank" >

					<i class="icon-tint icon-2x"></i>

					<span><?php echo ('View Blood Bank');?></span>

				</a>

		</li>



		

		<!------manage report--->

		<li class="<?php if($page_name == 'manage_report')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?doctor/manage_report" >

					<i class="icon-hospital icon-2x"></i>

					<span><?php echo ('Manage Report');?></span>

				</a>

		</li>



		<!------manage own profile--->

		<li class="<?php if($page_name == 'manage_profile')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?doctor/manage_profile" >

					<i class="icon-lock icon-2x"></i>

					<span><?php echo ('Profile');?></span>

				</a>

		</li>

		

	</ul>

	

</div>