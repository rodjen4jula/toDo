<div class="container"><br>

<form action="<?php echo ROOT_URL; ?>" method="post">

	<div class="row ">
	    <div class="col-8 col-md-9 col-lg-8 text-sm-left text-md-center ">
	      <h1>TO DO - LIST</h1>
	    </div>
	    <div class="col-2 col-md-1 col-lg-1 offset-lg-1">
	      <button type="submit" class="btn btn-primary" name="csv" value=""> Export to CSV </button>
	    </div>
	 </div>
	 	<br>
	 <div class="row ">
	 	    <div class="col-9 col-md-9 col-lg-8 offset-lg-1">
	 	    	<textarea rows="3" type="text" class="form-control" placeholder="Insert text" name="text" value=""></textarea>
	 	    </div>
	 	    <div class="col-3 col-md-1 col-lg-1">
	 	    	<button type="submit" class="btn btn-success btn-rounded" name="submit" value="submit" ><i class="fas fa-plus fa-2x"></i></button>
	 	    </div>
	  </div> <br>

<?php foreach ($viewmodel as $value) {	?>

<div class="row j">
    <div class="col-9 col-md-9 col-lg-8 offset-lg-1">
    	<textarea readonly rows="2" type="text" class="form-control" placeholder="<?php echo $value['id'].') '. $value['value']; ?>" name="dataEntered" value=" "></textarea>
    </div>
    <div class="col-3 col-md-1 col-lg-1">
    	<button type="submit" class="btn btn-danger" name="delete" value="<?php echo $value['id']; ?>" ><i class="fas fa-minus fa-2x"></i></button>
    </div>
 </div>
<br>

<?php } ?>


</form>


</div>
