<?php
//название раздла
$page = "destinations";

include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";
include $_SERVER['DOCUMENT_ROOT']. '/admin/parts/header.php';

// Если пришел get запрос, после нажатия на кнопку edit
if(isset($_GET['id'])){

	// Берем все данные из таблици destinations где id=$_GET["id"]
    $sql = "SELECT * FROM destinations WHERE id=" . $_GET["id"];
    
    // Выполняем запрос
    $categories = $conn->query($sql);
    
    // Если строки с sql апроса были найдены
    if ($categories->num_rows > 0) {  
    	// присваюем переменной  des_info полученный массив 
        $des_info = mysqli_fetch_assoc($categories);
    }

}


// Если была нажата кнопа вернуться назад
if(isset($_POST['back'])) {
	// Делаем переадресацию на страницу destinations.php
  	header("Location: /admin/destinations.php");
}

// Если была нажата кнопка редактировать
if(isset($_POST['submit'])){
    
    // Пишем запрос на обновление данных в направлении
  	$sql = "UPDATE destinations 
            SET arrival='". $_POST['arrival'] ."',
                departure='". $_POST['departure'] ."',
                categori_id='". $_POST['categori_id'] ."'              
            WHERE id =" . $_GET['id'];

    // Выполняем запрос
  	$result = $conn->query($sql);

  	// ерезагружаем эту же страничку
  	header("Location: /admin/modules/destinations/edit.php?id=" . $_GET['id']);
}

?>

<!-- ==================
Блок с формой для внесения изменений
=====================-->
<div class="main-panel" id="main-panel">
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-md-8">
	            <div class="card">
	                <div class="card-header">
	                    <h4 class="card-title">Edit Category</h4>
	                </div>
	                <div class="card-body">

	                    <form method="POST" active="" id="form-edit-products" enctype="multipart/form-data">
	                      
	                      <div class="form-group">
	                        <label for="arrival">Arrival</label>
	                        <input type="text" name="arrival" class="form-control" id="arrival" value="<?php echo $des_info['arrival']; ?>">
	                      </div>
	                      <div class="form-group">
	                        <label for="departure">Departure</label>
	                        <input type="text" name="departure" class="form-control" id="departure" value="<?php echo $des_info['departure']; ?>">
	                      </div>
	                      <div class="form-group">
	                         <label for="categori_id">Сategory</label>

	                        <select name="categori_id" class="form-control" >  
	                          <?php


	                            $categories = "SELECT * FROM `categories`";
	                            $result_categories = $conn->query($categories);

	                            while ($categorie = mysqli_fetch_assoc($result_categories)){
	                              
	                              echo "<option value='". $categorie['id']."'";
	                                    if ($des_info['categori_id'] == $categorie['id']){
	                                      echo "selected";
	                                    }
	                              echo ">". $categorie['title'] ."</option>";
	                            }

	                          ?>
	                        </select>
	                      </div>
	                      <button type="submit" name="submit" id="submit" class="btn btn-primary mb-2">Edit</button>
	                      <button type="submit" name="back" class="btn btn-primary mb-2">Back</button>
	                    </form>
	                </div>
	            </div>     
	      </div>
	    </div>    
	</div>
</div>
<!-- ==================
end Блок с формой для внесения изменений 
=====================-->

<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/admin/parts/footer.php';
?> 