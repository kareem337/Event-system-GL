$(document).ready(function(){
 
    $('#game').change(function(){

       var id = $(this).val();

       // Empty the dropdown
       $('#device').find('option').not(':first').remove();

       // AJAX request 
       $.ajax({
         url: '/getDevices/'+id,
         type: 'get',
         dataType: 'json',
         success: function(response){

           var len = 0;
           if(response['data'] != null){
             len = response['data'].length;
           }

           if(len > 0){
             // Read data and create <option >
             for(var i=0; i<len; i++){

               var id = response['data'][i].id;
               var name = response['data'][i].name;

               var option = "<option value='"+id+"'>"+name+"</option>"; 

               $("#device").append(option); 
             }
           }

         }
      });
    });

    $('#device').change(function(){

        var id = $(this).val();
 
        $('#time').find('option').not(':first').remove();
 
        // AJAX request 
        $.ajax({
          url: '/getTimes/'+id,
          type: 'get',
          dataType: 'json',
          success: function(response){
 
            var len = 0;
            if(response['data'] != null){
              len = response['data'].length;
            }
 
            if(len > 0){
              // Read data and create <option >
              for(var i=0; i<len; i++){
 
                var id = response['data'][i].id;
                var time= response['data'][i].time;
 
                var option = "<option value='"+id+"'>"+time+"</option>"; 
 
                $("#time").append(option); 
              }
            }
 
          }
       });
     });

  });