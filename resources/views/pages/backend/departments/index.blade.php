<x-guest-layout>
    <a href="{{ route('create') }}"<button class="text-end">Create Department</button></a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">Department_Name</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($department as $data)
    <tr>
      <th scope="row">{{ $data->id }}</th>
      <td>{{$data->department_name}}</td>
      <td><a href="{{ route('edit',$data->id)}}"><button class="btn btn-primary btn-sm">Edit</button></a>
    <a href="{{ route('delete',$data->id)}}"><button class="btn btn-danger btn-sm">Delete</button></a></td>
    </tr>
     @endforeach
  </tbody>
</table>
</x-guest-layout>
