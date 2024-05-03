<div class="box">

	<div class="box-header">

    

    	<!------CONTROL TABS START------->

		<ul class="nav nav-tabs nav-tabs-left">

			<li class="active">

            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 

					<?php echo ('View Log');?>

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

                    		<th><div><?php echo ('Type');?></div></th>

                    		<th><div><?php echo ('Date');?></div></th>

                    		<th><div><?php echo ('User');?></div></th>

                    		<th><div><?php echo ('Name');?></div></th>

                    		<th><div><?php echo ('Description');?></div></th>

                    		<th><div><?php echo ('IP');?></div></th>

                    		<th><div><?php echo ('Lsocation');?></div></th>

						</tr>

					</thead>

                    <tbody>

                    	<?php 

						$count = 1;

						foreach($logs as $row):?>

                        <tr>

                            <td><?php echo $count++;?></td>

                            <td><?php echo $row['type'];?></td>

                            <td><?php echo date('d M,Y', $row['timestamp']);?></td>

                            <td><?php echo $row['user_type'];?></td>

							<td><?php echo $this->crud_model->get_type_name_by_id($row['user_type'],$row['user_id'],'name');?></td>

                            <td><?php echo $row['description'];?></td>

                            <td><?php echo $row['ip'];?></td>

                            <td><?php echo $row['location'];?></td>

                        </tr>

                        <?php endforeach;?>

                    </tbody>

                </table>

			</div>

            <!----TABLE LISTING ENDS--->

		</div>

	</div>

</div>