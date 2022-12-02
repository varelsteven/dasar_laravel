<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">nama</th>
        <th scope="col">umur</th>
        <th scope="col">alamat</th>
        <th scope="col">jenis_kelamin</th>
        <th scope="col">class_id</th>
        <th scope="col">created at</th>
        <th scope="col">updated at</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($student as $item)
         <tr>
          <td>{{$loop -> iteration}}</td>
          <td>{{$item -> nama}}</td>
          <td>{{$item -> umur}}</td>
          <td>{{$item -> alamat}}</td>
          <td>{{$item -> jenis_kelamin}}</td>
          <td>{{$item -> class_id}}</td>
          <td>{{$item -> created_at}}</td>
          <td>{{$item -> updated_at}}</td>


         </tr>
     @endforeach
    </tbody>
  </table>
  
</body>
</html>