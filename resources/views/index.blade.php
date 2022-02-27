<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD AJAX </title>
  </head>
  <body>
    <div class="container">
      <h1>CRUD AJAX</h1><input type="text">
      <p id="respon"></p>
      <button class="btn btn-primary" onclick="tambah()">Tambah</button>
      <div id="read">

      </div>
    </div>
    <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="page"></div>
      </div>
      <div class="modal-footer">        
      </div>
    </div>
  </div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script>
      $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
      $(document).ready(function(){
        read();       
      });
      function respon(respon){
        $("#respon").html(respon);
      }
      function read(){
        $.get("{{url('read')}}",{},function(data,status){
          $("#read").html(data);         
        });
      }
      function tambah(){
        $.get("{{url('create')}}",{},function(data,status){
          $("#page").html(data);
          $("#exampleModal").modal("show");
        });
      }
      function show(id){
        $.get("{{url('show')}}/"+id,{},function(data,status){
          $("#page").html(data);
          $("#exampleModal").modal("show");
        });
      }
      function store(){
        var instansi = $("#instansi").val();
        var deskripsi = $("#deskripsi").val();
        $.ajax({
          url:"{{url('store')}}",
          type: "post",
          data: {            
            "instansi":instansi,
            "deskripsi":deskripsi,
          },
          success: function(data){
            $(".btn-close").click();
            read();
          }
        });
      }      
      function destroy(id){        
        $.ajax({
          url:"{{url('destroy')}}/"+id,
          type: "get",          
          success: function(response){
            $(".btn-close").click();
            read();
            respon("Hapus");
          }
        });
      }     
      function update(id){   
        var instansi = $("#instansi").val();
        var deskripsi = $("#deskripsi").val();     
        $.ajax({
          url:"{{url('update')}}/"+id,
          type: "get",       
          data:{
            "instansi":instansi,
            "deskripsi":deskripsi,
          },
          success: function(data){
            $(".btn-close").click();
            read();
            respon("Updated");
          }
        });
      }  
      
    </script>
  </body>
</html>