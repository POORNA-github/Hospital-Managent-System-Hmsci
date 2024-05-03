<div class="box">

	<div class="box-header">

    

    	<!------CONTROL TABS START------->

		<ul class="nav nav-tabs nav-tabs-left">

        	<?php if(isset($edit_profile)):?>

			<li class="active">

            	<a href="#edit" data-toggle="tab"><i class="icon-wrench"></i> 

					<?php echo ('Edit Bed');?>

                    	</a></li>

            <?php endif;?>

			<li class="<?php if(!isset($edit_profile))echo 'active';?>">

            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 

					<?php echo ('Bed List');?>

                    	</a></li>

			<li>

            	<a href="#add" data-toggle="tab"><i class="icon-plus"></i>

					<?php echo ('Add Bed');?>

                    	</a></li>

		</ul>

    	<!------CONTROL TABS END------->

        

	</div>

	<div class="box-content padded">

		<div class="tab-content">

        	<!----EDITING FORM STARTS---->

        	<?php if(isset($edit_profile)):?>

			<div class="tab-pane box active" id="edit" style="padding: 5px">

                <div class="box-content">

                	<?php foreach($edit_profile as $row):?>

                    <?php echo form_open('nurse/manage_bed/edit/do_update/'.$row['bed_id'] , array('class' => 'form-horizontal validatable'));?>

                        <div class="padded">

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Bed Number');?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="bed_number" value="<?php echo $row['bed_number'];?>"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Type');?></label>

                                <div class="controls">

                                    <select name="type" class="uniform" style="width:100%;">

                                    	<option value="ward" <?php if($row['type']=='ward')echo 'selected';?>><?php echo ('Ward');?></option>

                                    	<option value="cabin" <?php if($row['type']=='cabin')echo 'selected';?>><?php echo ('Cabin');?></option>

                                    	<option value="icu" <?php if($row['type']=='icu')echo 'selected';?>><?php echo ('ICU');?></option>

                                    	<option value="other" <?php if($row['type']=='other')echo 'selected';?>><?php echo ('Other');?></option>

                                    </select>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Description');?></label>

                                <div class="controls">

                                    <input type="text" class="" name="description" value="<?php echo $row['description'];?>"/>

                                </div>

                            </div>

                        </div>

                        <div class="form-actions">

                            <button type="submit" class="btn btn-primary"><?php echo ('Edit Bed');?></button>

                        </div>

                    <?php echo form_close();?>

                    <?php endforeach;?>

                </div>

			</div>

            <?php endif;?>

            <!----EDITING FORM ENDS--->

            

            <!----TABLE LISTING STARTS--->

            <div class="tab-pane box <?php if(!isset($edit_profile))echo 'active';?>" id="list">

				

                <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive table-hover">

                	<thead>

                		<tr>

                    		<th><div>#</div></th>

                    		<th><div><?php echo ('Bed Number');?></div></th>

                    		<th><div><?php echo ('Type');?></div></th>

                    		<th><div><?php echo ('Options');?></div></th>

						</tr>

					</thead>

                    <tbody>

                    	<?php $count = 1;foreach($beds as $row):?>

                        <tr>

                            <td><?php echo $count++;?></td>

							<td><?php echo $row['bed_number'];?></td>

							<td><?php echo $row['type'];?></td>

							<td align="center">

                            	<a href="<?php echo base_url();?>index.php?nurse/manage_bed/edit/<?php echo $row['bed_id'];?>"

                                	rel="tooltip" data-placement="top" data-original-title="<?php echo ('Edit');?>" class="btn btn-primary">

                                		<i class="icon-wrench"></i>

                                </a>

                            	<a href="<?php echo base_url();?>index.php?nurse/manage_bed/delete/<?php echo $row['bed_id'];?>" onclick="return confirm('delete?')"

                                	rel="tooltip" data-placement="top" data-original-title="<?php echo ('Delete');?>" class="btn btn-danger">

                                		<i class="icon-trash"></i>

                                </a>

        					</td>

                        </tr>

                        <?php endforeach;?>

                    </tbody>

                </table>

			</div>

            <!----TABLE LISTING ENDS--->

            

            

			<!----CREATION FORM STARTS---->

			<div class="tab-pane box" id="add" style="padding: 5px">

                <div class="box-content">

                    <?php echo form_open('nurse/manage_bed/create/' , array('class' => 'form-horizontal validatable'));?>

                        <div class="padded">

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Bed Number');?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="bed_number"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Type');?></label>

                                <div class="controls">

                                    <select name="type" class="uniform" style="width:100%;">

                                    	<option value="ward"><?php echo ('Ward');?></option>

                                    	<option value="cabin"><?php echo ('Cabin');?></option>

                                    	<option value="icu"><?php echo ('ICU');?></option>

                                    	<option value="other"><?php echo ('Other');?></option>

                                    </select>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Description');?></label>

                                <div class="controls">

                                    <input type="text" class="" name="description"/>

                                </div>

                            </div>

                        </div>

                        <div class="form-actions">

                            <button type="submit" class="btn btn-success"><?php echo ('Add Bed');?></button>

                        </div>

                    <?php echo form_close();?>                

                </div>                

			</div>

			<!----CREATION FORM ENDS--->

            

		</div>

	</div>

</div>