<h1><?php echo $_SESSION['error'];?></h1>
<form action="<?php echo URL;?>upload/imgInsert/" method="post" enctype="multipart/form-data">
<p>
	<label>Name</label><input type="text" name="cat_name" /><br />
	<label>Category</label><input type="text" name="cat_type" /><br />
	<label>Prize</label><input type="text" name="cat_prize" /><br />
	<label>Description</label><textarea rows="5" cols="40" name="cat_description" id="cat_description"></textarea><br />
	<label>Upload Image</label>
	<input type="file" name="image" /><br />
	<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
	<input type="submit" id="submit" value="Upload" />
</p>
</form>
</br></br>
<a class="button" href="<?php echo URL;?>index">Cancel</a>