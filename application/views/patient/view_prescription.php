<div class="box">

	<div class="box-header">

    

    	<!------CONTROL TABS START------->

		<ul class="nav nav-tabs nav-tabs-left">

        	<?php if(isset($edit_profile)):?>

			<li class="active">

            	<a href="#edit" data-toggle="tab"><i class="icon-wrench"></i> 

					<?php echo ('Edit Prescription');?>

                    	</a></li>

            <?php endif;?>

			<li class="<?php if(!isset($edit_profile))echo 'active';?>">

            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 

					<?php echo ('Prescription List');?>

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

                    <form method="post" action="<?php echo base_url();?>index.php?doctor/manage_prescription/edit/do_update/<?php echo $row['prescription_id'];?>" class="form-horizontal validatable">

                        <div class="padded">

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Doctor');?></label>

                                <div class="controls" style="padding-top:5px;">

                                    <?php echo $this->crud_model->get_type_name_by_id('doctor',$row['doctor_id'],'name');?>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Patient');?></label>

                                <div class="controls" style="padding-top:5px;">

                                    <?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name');?>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Case History');?></label>

                                <div class="controls" style="padding-top:5px;">

                                    <?php echo $row['case_history'];?>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Medication');?></label>

                                <div class="controls" style="padding-top:5px;">

                                    <?php echo $row['medication'];?>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Medication from Pharmacist');?></label>

                                <div class="controls" style="padding-top:5px;">

                                    <?php echo $row['medication_from_pharmacist'];?>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Description');?></label>

                                <div class="controls" style="padding-top:5px;">

                                    <?php echo $row['description'];?>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo ('Date');?></label>

                                <div class="controls" style="padding-top:5px;">

                                    <?php echo date('m/d/Y', $row['creation_timestamp']);?>

                                </div>

                            </div>

                        </div>

                    <?php echo form_close();?>

                    <!---------DIAGNOSIS REPORTS----------->

                    <hr />

                    <div class="box">

                    <div class="box-header"><span class="title"><?php echo ('Diagnosis Report');?></span></div>

                    <div class="box-content">

                    	<table cellpadding="0" cellspacing="0" border="0" class="table table-normal ">

                            <thead>

                                <tr>

                                    <td><div>#</div></td>

                                    <td><div><?php echo ('Report Type');?></div></td>

                                    <td><div><?php echo ('Document Type');?></div></td>

                                    <td><div><?php echo ('Download');?></div></td>

                                    <td><div><?php echo ('Description');?></div></td>

                                    <td><div><?php echo ('Date');?></div></td>

                                    <td><div><?php echo ('Laboratorist');?></div></td>

                                </tr>

                            </thead>

                            <tbody>

                                <?php 

                                $count = 1;

                                $diagnostic_reports	=	$this->db->get_where('diagnosis_report' , array('prescription_id' => $row['prescription_id']))->result_array();

                                foreach($diagnostic_reports as $row2):?>

                                <tr>

                                    <td><?php echo $count++;?></td>

                                    <td><?php echo $row2['report_type'];?></td>

                                    <td><?php echo $row2['document_type'];?></td>

                                    <td style="text-align:center;">

                                    	<?php if($row2['document_type'] == 'image'):?>

                                        <div id="thumbs">

  											<a href="<?php echo base_url();?>uploads/diagnosis_report/<?php echo $row2['file_name'];?>" 

                                            	style="background-image:url(<?php echo base_url();?>uploads/diagnosis_report/<?php echo $row2['file_name'];?>)" title="<?php echo $row2['file_name'];?>">

                                                	</a></div>

 										<?php endif;?>

                                                    

										<a href="<?php echo base_url();?>uploads/diagnosis_report/<?php echo $row2['file_name'];?>" target="_blank"

                                        	class="btn btn-danger">	<i class="icon-download-alt"></i> <?php echo ('Download');?></a>

                                    </td>

                                    <td><?php echo $row2['description'];?></td>

                                    <td><?php echo date('d M,Y', $row2['timestamp']);?></td>

                                    <td><?php echo $this->crud_model->get_type_name_by_id('laboratorist',$row2['laboratorist_id'],'name');?></td>

                                    

                                </tr>

                                <?php endforeach;?>

                            </tbody>

                        </table>

                     </div>

                     </div> 

                    <!-------DIAGNOSIS REPORTS ENDS------->

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

                    		<th><div><?php echo ('Date');?></div></th>

                    		<th><div><?php echo ('Patient');?></div></th>

                    		<th><div><?php echo ('Doctor');?></div></th>

                    		<th><div><?php echo ('Options');?></div></th>

						</tr>

					</thead>

                    <tbody>

                    	<?php $count = 1;foreach($prescriptions as $row):?>

                        <tr>

                            <td><?php echo $count++;?></td>

                            <td><?php echo date('d M,Y', $row['creation_timestamp']);?></td>

							<td><?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name');?></td>

							<td><?php echo $this->crud_model->get_type_name_by_id('doctor',$row['doctor_id'],'name');?></td>

							<td align="center">

                            	<a href="<?php echo base_url();?>index.php?patient/view_prescription/edit/<?php echo $row['prescription_id'];?>" class="btn btn-primary">

                                	<?php echo ('View Prescription');?>

                                </a>

        					</td>

                        </tr>

                        <?php endforeach;?>

                    </tbody>

                </table>

			</div>

            <!----TABLE LISTING ENDS--->

            

            

		</div>

	</div>

</div>



