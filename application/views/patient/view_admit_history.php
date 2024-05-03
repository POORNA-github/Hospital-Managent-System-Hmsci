<div class="box">

	<div class="box-header">

    

    	<!------CONTROL TABS START------->

		<ul class="nav nav-tabs nav-tabs-left">

			<li class="active">

            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 

					<?php echo ('Bed Allotment List');?>

                    	</a></li>

		</ul>

    	<!------CONTROL TABS END------->

        

	</div>

	<div class="box-content padded">

		<div class="tab-content">

            

            <!----TABLE LISTING STARTS--->

            <div class="tab-pane box active" id="list">

				

                <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive table-hover">

                	<thead>

                		<tr>

                    		<th><div>#</div></th>

                    		<th><div><?php echo ('Bed Number');?></div></th>

                    		<th><div><?php echo ('Bed Type');?></div></th>

                    		<th><div><?php echo ('Patient');?></div></th>

                    		<th><div><?php echo ('Allotment DateTime');?></div></th>

                    		<th><div><?php echo ('Discharge DateTime');?></div></th>

                    		<th><div><?php echo ('Options');?></div></th>

						</tr>

					</thead>

                    <tbody>

                    	<?php $count = 1;foreach($bed_allotments as $row):?>

                        <tr>

                            <td><?php echo $count++;?></td>

							<td><?php echo $this->crud_model->get_type_name_by_id('bed',$row['bed_id'],'bed_number');?></td>

                            <td><?php echo $this->crud_model->get_type_name_by_id('bed',$row['bed_id'],'type');?></td>

							<td><?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name');?></td>

                            <td><?php echo ($row['allotment_timestamp']);?></td>

                            <td><?php echo ($row['discharge_timestamp']);?></td>

							<td align="center">

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