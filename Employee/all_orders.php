<?php include 'header.php';
	include 'Controllers/orderController.php';
	$orders = getOrders();
	
?>
  <div class="card">
            <div class="card-body">
              <h1 class="grid_title">Category Master</h1>
			  <a href="manage_category.php" class="add_link">Add Category</a>
              <div class="row grid_box">
				
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
						<th>Sl#</th>
			<th> Name</th>
			<th>Gmail </th>
			<th>Phone</th>
			<th>Address</th>
			<th>Payment Mode</th>
			<th>Products</th>
			<th>Total Amount</th>
			<th>Action</th>
			
                        </tr>
                      </thead>
                      <tbody>
                        <?php if(mysqli_num_rows($res)>0){
						$i=1;
						while($row=mysqli_fetch_assoc($res)){
						?>
						<tr>
                            <td><?php echo $i?></td>
                            <td><?php echo $row['name']?></td>
							<td><?php echo $row['gmail']?></td>
							<td><?php echo $row['phone']?></td>
							<td><?php echo $row['address']?></td>
							<td><?php echo $row['pmode']?></td>
							<td><?php echo $row['products']?></td>
							<td><?php echo $row['amount_paid']?></td>
							<td>
							
								<?php
								if($row['order_status']==1){
								?>
								<a href="?id=<?php echo $row['id']?>&type=deactive"><label class="badge badge-danger">Active</label></a>
								<?php
								}else{
								?>
								<a href="?id=<?php echo $row['id']?>&type=active"><label class="badge badge-info">Deactive</label></a>
								<?php
								}
								
								?>
								&nbsp;
								
							</td>
                           
                        </tr>
                        <?php 
						$i++;
						} } else { ?>
						<tr>
							<td colspan="5">No data found</td>
						</tr>
						<?php } ?>
                      </tbody>
                    </table>
                  </div>
				</div>
              </div>
            </div>
          </div>
        
