<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <input type="text" id="userId" value="">


    <span id="userName"></span>
    <div id="image-preview" style="width:50; height:150;"></div>
 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

 $(document).ready(function(){
    $('#userId').on('keyup', function(){
        var getuserId = $(this).val();
        console.log('user id getting' + getuserId);

            $.ajax({
                url:"{{url('api/fetchUserData')}}/" + getuserId,
                method: 'GET',
                success: function(data){
                $('#userName').text(data.name);

                var imageUrl = "{{ asset('studentImage') }}/" + data.image;

                $('#image-preview').html('<img src="' + imageUrl + '">');

                }
            });
    });
 });































// $(document).ready(function(){

//     $('#userId').on('keyup', function(){
//         var getUserId = $(this).val();
//         console.log('values get' + getUserId);

//             $.ajax({
//                 url:"{{url('api/fetchUserData')}}/" + getUserId,
//                 method:'GET',
//                 success: function(data){
//                     $('#userName').text(data.name);
//                 } 
//             });
//     });
// });



























// $(document).ready(function(){
//    $('#userId').on('keyup',function(){
//         var getUserId = $(this).val();
//         console.log('user get values' + getUserId);
//         $.ajax({
//             url: "{{url('api/fetchUserData')}}/" + getUserId,
//             method : 'GET',
//             success:function(data){
//                 $('#userName').text(data.name);
//             }
//         });

//     });
// });
</script>
</body>
</html>