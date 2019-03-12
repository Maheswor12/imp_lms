<!--<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->

<script src="http://<?=$_SERVER['HTTP_HOST'];?>/updated_lms/css/jquery.js"></script>
 <script src="http://<?=$_SERVER['HTTP_HOST'];?>/updated_lms/css/js/bootstrap.js"></script>
 <!-- for sweet alert -->
 <script src="http://<?= $_SERVER['HTTP_HOST']; ?>/updated_lms/css/sweetalert.min.js"></script>
<script src="http://<?= $_SERVER['HTTP_HOST']; ?>/updated_lms/css/feather.min.js"></script>

 <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>-->
    
<script>

$(document).ready(function(){
                  
    $('#subject').submit(function(event){
        //alert('document id ready');    
        event.preventDefault();
        var formData = $('#subject').serialize();              
        $.ajax({
          type:"post",
          url:"process1.php",
          data: formData,
          dataType: "text",
          success: function(response){

            if (response === 'success') {
                    swal('Department', 'You have successfully added the department.',
                        'success', {
                            timer: 2000,
                            button: false
                        }).then(function() {
                          window.location.replace('index.php?page=<?php echo $_GET['page'];?>');
                    });
                } else if (response === 'failed') {
                    swal('Department', 'We could not add the department to the database',
                        'error', {
                            timer: 2000,
                            button: false
                        }).then(function() {
                          window.location.replace('index.php?page=<?php echo $_GET['page'];?>');
                    });
                }




           // if(response==='success'){
           // window.location.replace('index.php?page=subjects');
     //  }else if(response==='failed'){
          //  window.location.replace('index.php?page=subjects&type=error');
      //}    
          }
        });
          
         
            
       
    });
    $('#teacher').submit(function(event){
        event.preventDefault();
        var formData = $('#teacher').serialize();              
        $.ajax({
          type:"post",
          url:"process1.php",
          data: formData,
          dataType: "text",
          success: function(response){

            if (response === 'success') {
                    swal('Department', 'You have successfully added the department.',
                        'success', {
                            timer: 2000,
                            button: false
                        }).then(function() {
                          window.location.replace('index.php?page=teacher');
                    });
                } else if (response === 'failed') {
                    swal('Department', 'We could not add the department to the database',
                        'error', {
                            timer: 2000,
                            button: false
                        }).then(function() {
                          window.location.replace('index.php?page=teacher');
                    });
                }  
          }
        });
          
         
            
       
    });
   
    $('#page').submit(function(event){
        event.preventDefault();
        var formData = $('#page').serialize();              
        $.ajax({
          type:"post",
          url:"process1.php",
          data: formData,
          dataType: "text",
          success: function(response){
            console.log(response);

            if (response === 'success') {
                    swal('Department', 'You have successfully added the department.',
                        'success', {
                            timer: 2000,
                            button: false
                        }).then(function() {
                          window.location.replace('index.php?page=pages');
                    });
                } else if (response === 'failed') {
                    swal('Department', 'We could not add the department to the database',
                        'error', {
                            timer: 2000,
                            button: false
                        }).then(function() {
                          window.location.replace('index.php?page=pages');
                    });
                }  
          }
        }); 
    });
$('#classes').submit(function(e){
e.preventDefault();
var formData=$('#classes').serialize();
$.ajax({
  type:"post",
  url:"process1.php",
  data: formData,
  dataType:"text",
  success:function(response){
    //console.log(response);
    if (response === 'success') {
                    swal('Department', 'You have successfully added the department.',
                        'success', {
                            timer: 2000,
                            button: false
                        }).then(function() {
                          window.location.replace('index.php?page=classes');
                    });
                } else if (response === 'failed') {
                    swal('Department', 'We could not add the department to the database',
                        'error', {
                            timer: 2000,
                            button: false
                        }).then(function() {
                          window.location.replace('index.php?page=classes');
                    });
                } 

  }
})

});

});
//for delete
$(document).ready(function(){
$('#delete').click(function(e){
e.preventDefault();
var url= this.href;
  alert(url);
  swal({
  title: 'Are you sure?',
  text: "It will permanently deleted !",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then(function() {
  
  $.ajax({
  type:"GET",
  url: url,
  success:function(response){
    //console.log(response);
    if (response === 'deleted') {
                    swal('Department', 'You have successfully delete the subject.',
                        'success', {
                            timer: 2000,
                            button: false
                        }).then(function() {
                          window.location.replace('index.php?page=subject');
                    });
                } else  {
                    swal('Department', 'We could not delete the subject to the database',
                        'error', {
                            timer: 2000,
                            button: false
                        }).then(function() {
                          window.location.replace('index.php?page=subject');
                    });
                } 

  }
});
})
  
});



});


$(document).ready(function(){
         
                      //alert('document id ready');    
                      $.ajax({
                        type:"GET",
                        url:"process1.php?page=<?php echo $_GET['page'];?>",
                        success: function(html){
                          $("#table_data").html(html);
                        }
                      });
                        
                       
             
                  });
</script>
</body>
</html>




