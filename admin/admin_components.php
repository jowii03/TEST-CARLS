<?php
class admin_components{
	function fetch_user_ajx(){
		$out = "<script type=\"text/javascript\">  
      $(document).ready(function(){

       //Read//
       //fetch_user();

       function fetch_user()
       {
        var action = \"fetch_user\";
        $.ajax({
         url:\"admin_actions.php\",
         method:\"POST\",
         data:{action:action},
         success:function(data)
         {
          $('#users_data').html(data);
         }
        })
       }


        //Update//
       $(document).on('click', '.btnupdate', function(){
        
        $('#user_id').val($(this).attr('id'));
        $('#action').val('update');
        $('#lname').val($(this).attr('ln'));
        $('#fname').val($(this).attr('fn'));
        $('#mname').val($(this).attr('mn'));
        $('#bdate').val($(this).attr('bd'));
        $('#email').val($(this).attr('em'));
        $('#phone').val($(this).attr('cp'));
        $('.modal-title').text('Update User');
        $('#editprofile').modal('show');
        
       });

       $('#frmUserEdit').submit(function(event){
        event.preventDefault();
        
          $.ajax({
           url:'admin_actions.php',
           method:'POST',
           data:new FormData(this),
           contentType:false,
           processData:false,
           success:function(data)
           {
            if(data == 'New E-Book Inserted into Database' || data == 'User Updated into Database'){
              
              //swal('SUCCESS' ,data ,'success');
              alert(data);
              $('#frmUserEdit')[0].reset();
              $('#editprofile').modal('hide');
              location.reload();
            }
            else{
              //swal('WARNING' ,data ,'warning');
              alert(data)
              return false;
            }
           }
          });
        });
     
       

		});	
      </script>
    ";
    echo $out;
	}

  function module_ajx(){
    $out = "<script type=\"text/javascript\">  
      $(document).ready(function(){

        //Update//
       $(document).on('click', '.btnupdate', function(){
        
        $('#module_id').val($(this).attr('id'));
        $('#action').val('updateModule');
        $('#mName').val($(this).attr('mn'));
        $('#editprofile').modal('show');
        
       });

       $('#frmModuleEdit').submit(function(event){
        event.preventDefault();
        
          $.ajax({
           url:'admin_actions.php',
           method:'POST',
           data:new FormData(this),
           contentType:false,
           processData:false,
           success:function(data)
           {
            if(data == 'New E-Book Inserted into Database' || data == 'Module Updated into Database'){
              
              //swal('SUCCESS' ,data ,'success');
              alert(data);
              $('#frmModuleEdit')[0].reset();
              $('#editprofile').modal('hide');
              location.reload();
            }
            else{
              //swal('WARNING' ,data ,'warning');
              alert(data)
              return false;
            }
           }
          });
        });

        //Insert//
        $('#frmModuleAdd').submit(function(event){
        event.preventDefault();
        
          $.ajax({
           url:'admin_actions.php',
           method:'POST',
           data:new FormData(this),
           contentType:false,
           processData:false,
           success:function(data)
           {
            if(data == 'New E-Book Inserted into Database' || data == 'Module Added into Database'){
              
              //swal('SUCCESS' ,data ,'success');
              alert(data);
              $('#frmModuleAdd')[0].reset();
              $('#addmodule').modal('hide');
              location.reload();
            }
            else{
              //swal('WARNING' ,data ,'warning');
              alert(data)
              return false;
            }
           }
          });
        });

        //Delete//
        $(document).on('click', '.btndelete', function(){
          var module_id = $(this).attr('id');
          var action = 'deleteModule';
          
           $.ajax({
           url:'admin_actions.php',
           method:'POST',
           data:{module_id:module_id, action:action},
           success:function(data)
           {
            if(data == 'New E-Book Inserted into Database' || data == 'Module Deleted into Database'){
              
              //swal('SUCCESS' ,data ,'success');
              alert(data);
              location.reload();
            }
            else{
              //swal('WARNING' ,data ,'warning');
              alert(data)
              return false;
            }
           }
           });
       });
     
       
    }); 
      </script>
    ";
    echo $out;
  }

  function questionaire_ajx(){
    $out = "<script type=\"text/javascript\">  
      $(document).ready(function(){

        //Update//
       $(document).on('click', '.btnupdate', function(){
        
        $('#questionaire_id').val($(this).attr('id'));
        $('#action').val('updateQuestionaire');
        $('#aq').val($(this).attr('qd'));
        $('#aca').val($(this).attr('qac'));
        $('#ac1').val($(this).attr('qaw1'));
        $('#ac2').val($(this).attr('qaw2'));
        $('#ac3').val($(this).attr('qaw3'));
        $('#editprofile').modal('show');
        
       });

       $('#frmQuestionaireEdit').submit(function(event){
        event.preventDefault();
        
          $.ajax({
           url:'admin_actions.php',
           method:'POST',
           data:new FormData(this),
           contentType:false,
           processData:false,
           success:function(data)
           {
            if(data == 'New E-Book Inserted into Database' || data == 'Question Updated into Database'){
              
              //swal('SUCCESS' ,data ,'success');
              alert(data);
              $('#frmQuestionaireEdit')[0].reset();
              $('#editprofile').modal('hide');
              location.reload();
            }
            else{
              //swal('WARNING' ,data ,'warning');
              alert(data)
              return false;
            }
           }
          });
        });

        //Insert//
        $('#frmQuestionaireAdd').submit(function(event){
        event.preventDefault();
        
          $.ajax({
           url:'admin_actions.php',
           method:'POST',
           data:new FormData(this),
           contentType:false,
           processData:false,
           success:function(data)
           {
            if(data == 'New E-Book Inserted into Database' || data == 'Question Added into Database'){
              
              //swal('SUCCESS' ,data ,'success');
              alert(data);
              $('#frmQuestionaireAdd')[0].reset();
              $('#addmodule').modal('hide');
              location.reload();
            }
            else{
              //swal('WARNING' ,data ,'warning');
              alert(data)
              return false;
            }
           }
          });
        });

        //Delete//
        $(document).on('click', '.btndelete', function(){
          var id = $(this).attr('id');
          var action = 'deleteModule';
          
           $.ajax({
           url:'admin_actions.php',
           method:'POST',
           data:{id:id, action:action},
           success:function(data)
           {
            if(data == 'New E-Book Inserted into Database' || data == 'Question Deleted into Database'){
              
              //swal('SUCCESS' ,data ,'success');
              alert(data);
              location.reload();
            }
            else{
              //swal('WARNING' ,data ,'warning');
              alert(data)
              return false;
            }
           }
           });
       });
     
       
    }); 
      </script>
    ";
    echo $out;
  }

}

?>