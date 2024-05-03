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

				<a href="<?php echo base_url();?>index.php?patient/dashboard" >

					<i class="icon-desktop icon-2x"></i>

					<span><?php echo ('Dashboard');?></span>

				</a>

		</li>

        

        <!------appointment----->

		<li class="<?php if($page_name == 'view_appointment')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?patient/view_appointment" >

					<i class="icon-edit icon-2x"></i>

					<span><?php echo ('View Appointment');?></span>

				</a>

		</li>

        

        <!------prescription----->

		<li class="<?php if($page_name == 'view_prescription')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?patient/view_prescription" >

					<i class="icon-stethoscope icon-2x"></i>

					<span><?php echo ('View Prescription');?></span>

				</a>

		</li>

        

        <!------doctor----->

		<li class="<?php if($page_name == 'view_doctor')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?patient/view_doctor" >

					<i class="icon-user-md icon-2x"></i>

					<span><?php echo ('View Doctor');?></span>

				</a>

		</li>

        

        <!------blood bank----->

		<li class="<?php if($page_name == 'view_blood_bank')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?patient/view_blood_bank" >

					<i class="icon-tint icon-2x"></i>

					<span><?php echo ('View Blood Bank');?></span>

				</a>

		</li>

        

        <!------bed allotment----->

		<li class="<?php if($page_name == 'view_admit_history')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?patient/view_admit_history" >

					<i class="icon-hdd icon-2x"></i>

					<span><?php echo ('Admit History');?></span>

				</a>

		</li>

		

		<!------manage report--->

		<li class="<?php if($page_name == 'view_operation_history')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?patient/view_operation_history" >

					<i class="icon-hospital icon-2x"></i>

					<span><?php echo ('Operation History');?></span>

				</a>

		</li>

		

		<!------manage invoice--->

		<li class="<?php if($page_name == 'view_invoice')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?patient/view_invoice" >

					<i class="icon-credit-card icon-2x"></i>

					<span><?php echo ('View Invoice');?></span>

				</a>

		</li>

		

		<!------view payment--->

		<li class="<?php if($page_name == 'payment_history')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?patient/payment_history" >

					<i class="icon-money icon-2x"></i>

					<span><?php echo ('Payment History');?></span>

				</a>

		</li>



		<!------manage own profile--->

		<li class="<?php if($page_name == 'manage_profile')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?patient/manage_profile" >

					<i class="icon-lock icon-2x"></i>

					<span><?php echo ('Profile');?></span>

				</a>

		</li>

		

	</ul>

	

</div>