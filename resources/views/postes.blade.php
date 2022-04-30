@include('header')
 @foreach($postes as $postes)
    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="./postesimage/{{$postes->image}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$postes->title}}</h5>
    <p class="card-text">{{$postes->description}}</p>
    <a href="{{$postes->link}}" class="btn full">اقرأ المنشور كاملا</a>
  </div>
</div>
    </div>
    @endforeach
  


