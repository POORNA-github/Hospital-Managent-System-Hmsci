<div class="box">

	<div class="box-header">

    

    	<!------CONTROL TABS START------->

		<ul class="nav nav-tabs nav-tabs-left">



			<li class="active">

            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 

					<?php echo ('Manage Profile');?>

                    	</a></li>

		</ul>

    	<!------CONTROL TABS END------->

        

	</div>

	<div class="box-content padded">

		<div class="tab-content">

        	<!----EDITING FORM STARTS---->

			<div class="tab-pane box active" id="list" style="padding: 5px">

                <div class="box-content padded">

					<?php 

                    foreach($edit_profile as $row):

                        ?>

                        <?php echo form_open('admin/manage_profile/update_profile_info/' , array('class' => 'form-horizontal validatable'));?>

                                <div class="control-group">

                                    <label class="control-label"><?php echo ('Name');?></label>

                                    <div class="controls">

                                        <input type="text" class="" name="name" value="<?php echo $row['name'];?>"/>

                                    </div>

                                </div>

                                <div class="control-group">

                                    <label class="control-label"><?php echo ('Email');?></label>

                                    <div class="controls">

                                        <input type="text" class="" name="email" value="<?php echo $row['email'];?>"/>

                                    </div>

                                </div>

                                <div class="control-group">

                                    <label class="control-label"><?php echo ('Address');?></label>

                                    <div class="controls">

                                        <input type="text" class="" name="address" value="<?php echo $row['address'];?>"/>

                                    </div>

                                </div>

                                <div class="control-group">

                                    <label class="control-label"><?php echo ('Phone');?></label>

                                    <div class="controls">

                                        <input type="text" class="" name="phone" value="<?php echo $row['phone'];?>"/>

                                    </div>

                                </div>

                                <div class="form-actions">

                            		<button type="submit" class="btn btn-primary"><?php echo ('Update Profile');?></button>

                        		</div>

                        <?php echo form_close();?>

						<?php

                    endforeach;

                    ?>

                </div>

			</div>

            <!----EDITING FORM ENDS--->

            

		</div>

	</div>

</div>





<!--password-->

<div class="box">

	<div class="box-header">

    

    	<!------CONTROL TABS START------->

		<ul class="nav nav-tabs nav-tabs-left">



			<li class="active">

            	<a href="#list" data-toggle="tab"><i class="icon-lock"></i> 

					<?php echo ('Change Password');?>

                    	</a></li>

		</ul>

    	<!------CONTROL TABS END------->

        

	</div>

	<div class="box-content padded">

		<div class="tab-content">

        	<!----EDITING FORM STARTS---->

			<div class="tab-pane box active" id="list" style="padding: 5px">

                <div class="box-content padded">

					<?php 

                    foreach($edit_profile as $row):

                        ?>

                        <?php echo form_open('admin/manage_profile/change_password/' , array('class' => 'form-horizontal validatable'));?>

                                <div class="control-group">

                                    <label class="control-label"><?php echo ('Password');?></label>

                                    <div class="controls">

                                        <input type="password" class="" name="password" value=""/>

                                    </div>

                                </div>

                                <div class="control-group">

                                    <label class="control-label"><?php echo ('New Password');?></label>

                                    <div class="controls">

                                        <input type="password" class="" name="new_password" value=""/>

                                    </div>

                                </div>

                                <div class="control-group">

                                    <label class="control-label"><?php echo ('Confirm new password');?></label>

                                    <div class="controls">

                                        <input type="password" class="" name="confirm_new_password" value=""/>

                                    </div>

                                </div>

                                <div class="form-actions">

                            		<button type="submit" class="btn btn-primary"><?php echo ('Update password');?></button>

                        		</div>

                        <?php echo form_close();?>

						<?php

                    endforeach;

                    ?>

                </div>

			</div>

            <!----EDITING FORM ENDS--->

            

		</div>

	</div>

</div>