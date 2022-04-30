@include('header')
<body>
<x-app-layout>

<div class="admin-home">
    <h1 class="admin-title">إدارة صفحة الكتب</h1>

    <form action="{{url('uploadbook')}}" method="post" enctype="multipart/form-data">
      @csrf
  <div class="mb-3">
    <label for="booktitle" class="form-label">عنوان الكتاب</label>
    <input type="text" class="form-control" id="booktitle" aria-describedby="emailHelp" name="title" required>
    
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">وصف الكتاب</label>
    <input type="text" class="form-control" id="description" name="description" required>
  </div>
  <div class="mb-3">
    <label for="link" class="form-label"> رابط التجميل</label>
    <input type="text" class="form-control" id="link" name="link" required>
  </div>
  <div class="mb-3">
    <label for="image" class="form-label">  غلاف الكتاب</label>
    <input type="file" class="form-control" id="image" accept="image/png, image/gif, image/jpeg" name="image" required>
  </div>
  <button type="submit" class="btn">أضف الكتاب</button>
</form>

<h1 class="admin-title">الكتب الموجودة حاليا</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">العنوان</th>
      <th scope="col">الوصف</th>
      <th scope="col">الحالة</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->title}}</td>
      <td>{{$data->description}}</td>
      <td><a href="{{url('/deletebook',$data->id)}}">حذف الكتاب</a></td>
    </tr>
    @endforeach
  </tbody>
</table>




<h1 class="admin-title">إدارة صفحة المنشورات</h1>

    <form action="{{url('uploadpostes')}}" method="post" enctype="multipart/form-data">
      @csrf
  <div class="mb-3">
    <label for="booktitle" class="form-label">عنوان المنشور</label>
    <input type="text" class="form-control" id="booktitle" aria-describedby="emailHelp" name="title" required>
    
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">وصف المنشور</label>
    <input type="text" class="form-control" id="description" name="description" required>
  </div>
  <div class="mb-3">
    <label for="link" class="form-label"> رابط المنشور</label>
    <input type="text" class="form-control" id="link" name="link" required>
  </div>
  <div class="mb-3">
    <label for="image" class="form-label">  غلاف المنشور</label>
    <input type="file" class="form-control" id="image" accept="image/png, image/gif, image/jpeg" name="image" required>
  </div>
  <button type="submit" class="btn">أضف المنشور</button>
</form>

<h1 class="admin-title">المنشورات الموجودة حاليا</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">العنوان</th>
      <th scope="col">الوصف</th>
      <th scope="col">الحالة</th>
    </tr>
  </thead>
  <tbody>
    @foreach($postes as $postes)
    <tr>
      <th scope="row">{{$postes->id}}</th>
      <td>{{$postes->title}}</td>
      <td>{{$postes->description}}</td>
      <td><a href="{{url('/deletpostes',$postes->id)}}">حذف المنشور</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>



</x-app-layout>







   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     <script src="./assets/js.js"></script>
</body>
</html>
