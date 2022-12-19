<!DOCTYPE html>
<html lang="en">
<head>
  <title>Website Image Uploder</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<div class="container mt-3">
  <h2>Image form</h2>
  <form id="addForm" enctype="multipart/form-data">

    <div class="mb-3 mt-3">
      <label for="email">Add Link</label>
      <input type="text" class="form-control" id="link" placeholder="Enter Website Link" name="link">
    </div>
   
    <button type="submit" class="btn btn-primary" id="save-button">Submit</button>
  </form>
</div>

<div id="error-message" class="bg-danger"></div>
  <div id="success-message" class="bg-success"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>

    $.ajaxSetup({
headers:{
    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
}
    });
     // Insert New Records
    $("#save-button").on("click",function(e){
      e.preventDefault();
      var link = $("#link").val(); //alert(link);
      if(link == "" ){
        $("#error-message").html("All fields are required.").slideDown();
        $("#error-message").delay(2000).hide(0);
        $("#success-message").slideUp();
        return false;
      }else{

        $.ajax({
          url: "{{route('save')}}",
          type : "POST",
          data: 'link=' + link + '&_token={{ csrf_token() }}',
          beforeSend: function(data){console.log(data);},
          success : function(data){
          if(data){      

          console.log(data);        
              $("#addForm").trigger("reset");
              $("#success-message").html("Data Inserted Successfully.").slideDown();
              $("#error-message").slideUp();
               return true;
            }else{
              $("#error-message").html("Can't Save Record.").slideDown();
              $("#success-message").slideUp();
              return false;
            }
               return true;
           // alert(data);

          },
        error: function(error) {

            $("#error-message").html("Can't Save Record.").slideDown();
              $("#error-message").delay(2000).hide(0);
               $("#success-message").slideUp();
               console.log(error);
               $("#addForm").trigger("reset");
              return false;
            //console.log(error);
         // alert(error);
       }
        });
      }

    });

</script>
</body>
</html>
