 <!-- CSS only -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<form action="/student/up/{{$student->id}}" method="post">
  @csrf
  @method('PUT')
    <legend>edit Siswa</legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">nama</label>
      <input value="{{$student->nama}}" type="text" name="nama" id="nama" class="form-control" placeholder="nama">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">umur</label>
      <input value="{{$student->umur}}" type="text" name="umur" id="umur" class="form-control" placeholder="umur">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">alamat</label>
      <input value="{{$student->alamat}}" type="text" name="alamat" id="alamat" class="form-control" placeholder="alamat">
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">jenis kelamin</label>
      <select id="disabledSelect" class="form-select" name="jenis_kelamin">
    <option selected value="{{$student->jenis_kelamin}}">{{$student->jenis_kelamin}}</option>
    @if ($student->jenis_kelamin=="laki-laki")
        <option value="perempuan">perempuan</option>
    @else
        <option value="laki-laki">laki-laki</option>
    @endif
      </select>
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">kelas</label>
      <select id="disabledSelect" class="form-select" name="class_id">
        <option selected value="{{$student->class_id}}">{{$student->class['name']}}</option>
        @foreach ($class as $item)
        <option value="{{$item->id}}">{{$item->name}}</option> 
        @endforeach
      </select>
    </div>
 
    <button  type="submit" class="btn btn-primary">Submit</button>

</form>