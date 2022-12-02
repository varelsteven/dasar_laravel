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
        <th scope="col">siswa</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($class as $item)
         <tr>
          <td>{{$loop -> iteration}}</td>
          <td>{{$item -> name}}</td>
          <td>
            @foreach ($item->student as $wahyu)
              {{$wahyu['nama']}} <br>
            @endforeach
          </td>


         </tr>
     @endforeach
    </tbody>
  </table>
</body>
</html>