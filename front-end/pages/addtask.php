<?php
include_once("../partials/header.php");
include_once("../partials/nav.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>  
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>

  
<title> Add A New Site </title>

</head>

	<body>

      <form name="add-task">
        <div class="form-style-10">
            <h1>Add New Tasks</h1>
            <form>
                <div class="section"><span>1</span>Task</div>
                <div class="inner-wrap">
                    <label>Task Description: <input type="text" name="task_name" id="task_name" required /></label>
                    <label>Task Duration Max (Sec): <input type="int" name="taskmax" id="taskmax" required /></label>
                    <label>Task Duration Min (Sec): <input type="int" name="taskmin" id="taskmin" required /></label>

                </div>            
            
                <div class="button-section">
                 <button class="btn btn-primary" id="btn-submit">Submit</button>
                </div>
            </form>
            </div>
            
</body>

</html>


<?php include_once("../partials/footer.php");?>

<script src="../js/addTask.js"></script>