
// Bind to the submit event of our form
$("#btn-submit").click(function(event){

    // Prevent default posting of form - put here to work in case of errors
    event.preventDefault();

    var taskName = $("#task_name").val();
    var taskMax = $("#taskmax").val();
    var taskMin = $("#taskmin").val();

    var valid = true;

    if(taskName === "" || 
       taskMax === "" ||
       taskMin === ""
    
      ){
        Swal.fire("Required Field Left Blank!", "You had one job...", "error", {
            timer: 3000
        });
        valid = false;
      }

   
    if(valid === false){
        
    }else{
      d_saveNewTask(taskName, taskMax, taskMin).then(
        addedtask => {
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000
         });
         
         Toast.fire({
          type: 'success',
          title: 'Task added successfully!'
         }).then(function(){ window.location.href = "index.php";})
        
        }, () => {});


        
      
    }

});
