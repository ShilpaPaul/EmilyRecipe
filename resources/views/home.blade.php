@extends("theme")

@section("content")
  <div class="container">
  <div class="row">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://assets-eu-01.kc-usercontent.com/559bb7d3-88a4-01c1-79a3-dd4d5b2d2bb0/96d8d3ff-beb8-4967-9423-ad5b0af55d72/Mini%20Orange%20Sponge%20Cake%20(7).jpg?w=1920&q=85&auto=format&lossless=1" class="d-block w-100" height="600" alt="img1">
      <div class="carousel-caption d-none d-md-block">
        <h1>Hello Spring</h1>
        <p>Celebrate the season with a fresh set of bakes</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://assets-eu-01.kc-usercontent.com/559bb7d3-88a4-01c1-79a3-dd4d5b2d2bb0/17a3cfbc-7eca-4ea2-9498-10476a7a2a5f/Lemon-Scones-SQUARE-3.jpg?w=1920&q=85&auto=format&lossless=1" class="d-block w-100" height="600" alt="img2">
      <div class="carousel-caption d-none d-md-block">
        <h1>Snacks & Chats</h1>
        <p>Bakes to share with mates on your outside meetups</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://lh3.googleusercontent.com/proxy/0_cJSiSOD4Q-1CCjhAwa6rdJbZAbCCM5ZR06b6DqUXlJ2n_R9uttzR19J9AM_D0IfVk86di52FQzks-E9Ftax5Yw" class="d-block w-100" height="600" alt="img3">
      <div class="carousel-caption c-carouselHero__content d-none d-md-block">
      <h1>Yummy Sweets</h1>
        <p>To quench your sweet tooth</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </div>
  </div>
@endsection
