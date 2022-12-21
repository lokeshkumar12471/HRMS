<x-app-layout>
    <div class="container">
         @if(session()->has('Successfull'))
       <div class="alert alert-success">{{ session()->get('Successfull') }}</div>
       @endif
<form method="post" action="{{ route('update',$department->id) }}">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Department_Name</label>
    <input type="text" name="department_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $department->department_name }}">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
    </div>
</x-app-layout>
