<!-- ============================
Файл для вывода Направлений из БД
==============================-->
<?php
	//название раздела
	$page = "destinations";
	include $_SERVER['DOCUMENT_ROOT'].'/configs/db.php';
	include $_SERVER['DOCUMENT_ROOT']. '/admin/parts/header.php';
?>

<div class="main-panel" id="main-panel">
	<!--breadcrumb block-->
	<nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
	    <div class="container-fluid">       
	      	<nav aria-label="breadcrumb">
	          	<ol class="breadcrumb">
	            	<li class="breadcrumb-item"><a href="/admin/index.php">Home</a></li>
	            	<li class="breadcrumb-item active">Destinations</li>
	          	</ol>
	      	</nav>
	    </div>
	</nav>
	<!--End breadcrumb block-->
	<br><br><br><br><br>
  
	<!--Table-->
	<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
				<div class="card-body">
	                <div class="table-responsive">
	                	<div class="card-header ">
							<h5 class="card-title">Destinations 
								<a class="btn btn-outline-primary" href="/admin/modules/destinations/add.php">ADD NEW</a>
							</h5>
						</div>

		                <table class="table">
		                    <thead class=" text-primary">
		                      <th>id</th>
		                      <th>Arrival</th>
		                      <th>Departure</th>
		                      <th>Category</th>
		                      <th></th>
		                    </thead>
		                    <tbody>
	                    	  <?php
	                    		$sql = "SELECT destinations.*, categories.title
	                    				FROM destinations, categories 
	                    				WHERE categories.id = destinations.categori_id";
	                    		$result = $conn->query($sql);
	                    		while( $des_info = mysqli_fetch_assoc($result) ) {
			                      ?>
			                      <tr>
			                        <td><?php echo $des_info['id']; ?></td>
			                        <td><?php echo $des_info['arrival']; ?></td>
			                        <td><?php echo $des_info['departure']; ?></td>
			                        <td><?php echo $des_info['title']; ?></td>
			                        <td class="text-right">
			                        	<div class="btn btn-danger">
			                        		<a href="/admin/modules/destinations/delete.php?id=<?php echo $des_info['id']; ?>">DELETE</a>
			                        	</div>
			                        	<div class="btn btn-success">
			                        		<a href="/admin/modules/destinations/edit.php?id=<?php echo $des_info['id']; ?>">EDIT</a>
			                        	</div> 
			                        </td>
			                      </tr>
				                  <?php
		                     	}
	                    	  ?>
		                    </tbody>
		                </table>
	                </div>
	              </div>
              </div>
            </div>
        </div>
    </div>
    <!--End Table-->
</div>

<?php
include $_SERVER['DOCUMENT_ROOT']. '/admin/parts/footer.php';
?>