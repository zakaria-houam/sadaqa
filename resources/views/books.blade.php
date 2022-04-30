@include('header')

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  
  <div class="carousel-inner">
    
  <div class="carousel-item active">
      <img src="./booksimage/{{$data[0]->image}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>{{$data[0]->title}}</h3>
        <p>{{$data[0]->description}}</p>
        <a href="{{$data[0]->link}}" class="text-decoration-none">حمل الآن</a>
      </div>
    </div>

   
   @foreach($data as $data)
    <div class="carousel-item">
      <img src="./booksimage/{{$data->image}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h3>{{$data->title}}</h3>
        <p>{{$data->description}}</p>
        <a href="{{$data->link}}" class="text-decoration-none">حمل الآن</a>
      </div>
    </div>
@endforeach
    <!--
    <div class="carousel-item">
      <img src="./assets/imgs/book3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
 
    <div class="carousel-item">
      <img src="./assets/imgs/book4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
-->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        