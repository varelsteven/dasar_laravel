<h2>anda sedang melihat detail dari {{$student->nama}}</h2>
<table>
  <thead>
    <tr>
      <th>umur </th>
      <th>alamat</th>
      <th>class</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ $student->umur }}</td>
      <td>{{ $student->alamat }}</td>
      <td>{{ $student->class['name'] }}</td>
    </tr>
  </tbody>
</table>