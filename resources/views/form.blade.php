 <!-- CSS only -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<form action="/student/adds" method="POST">
  @csrf
    <legend>Input Siswa</legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">nama</label>
      <input type="text" name="nama" id="nama" class="form-control" placeholder="nama">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">umur</label>
      <input type="text" name="umur" id="umur" class="form-control" placeholder="umur">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">alamat</label>
      <input type="text" name="alamat" id="alamat" class="form-control" placeholder="alamat">
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">jenis kelamin</label>
      <select id="disabledSelect" class="form-select" name="jenis_kelamin">
        <option>jenis kelamin</option>
       
        <option value="laki-laki">laki-laki</option> 
        <option value="perempuan">perempuan</option> 
     
      </select>
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">kelas</label>
      <select id="disabledSelect" class="form-select" name="class_id">
        <option>pilih kelas</option>
        @foreach ($class as $item)
        <option value="{{$item->id}}">{{$item->name}}</option> 
        @endforeach
      </select>
    </div>
 
    <button  type="submit" class="btn btn-primary">Submit</button>

</form>