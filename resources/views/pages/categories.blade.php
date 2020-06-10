@extends('base')
@section('content')
  <div class="container">
    <div class="row">
        <div class="col-md-1">
          <ul class="list-unstyled">
            <li class="nav-header"> <a class="" href="./" data-toggle="collapse" data-target="#userMenu"></a>
              <ul class="nav nav-pills nav-stacked">
                    <dl> <a href="pages">CATEGORIES</a></dl>
                    <div class = "list-group">
                      <ul class = "small"><a href="pages" >Designers</a></ul>
                      <ul class = "small"><a href="pages" >Clothing</a></ul>
                      <ul class = "small"><a href="pages" >Accessories</a></ul>
                      <br>
                    </div>
                    <dl><a href="pages">REFINE</a></dl>
                    <li class="small bold">CATEGORY</li>
                    <div class = "list-group">
                      <ul class = "small"><a href="pages" >Shirts</a></ul>
                      <br>
                    </div>
                    <li class="small bold">COLOR</li>
                    <div class = "list-group">
                      <ul class = "small"><a href="pages" >Beige(81)</a></ul>
                      <ul class = "small"><a href="pages" >Black(67)</a></ul>
                      <ul class = "small"><a href="pages" >Blue(130)</a></ul>
                      <ul class = "small"><a href="pages" >Brown(15)</a></ul>
                      <ul class = "small"><a href="pages" >Cream(3)</a></ul>
                      <ul class = "small"><a href="pages" >Coral(1)</a></ul>
                      <ul class = "small"><a href="pages" >Gold(4)</a></ul>
                      <br>
                    </div>
                    <li class="small bold">CLOTHING</li>
                    <div class = "list-group">
                      <ul class = "small"><a href="pages" >MadeonOrder</a></ul>
                      <ul class = "small"><a href="pages" >ReadytoShip</a></ul>
                      <br>                    
                    </div>
                    <li class="small bold">MEN'S</li>
                    <div class = "list-group">
                      <ul class = "small"><a href="pages" >Adah(4)</a></ul>
                      <ul class = "small"><a href="pages" >Anita(27)</a></ul>
                      <ul class = "small"><a href="pages" >Ashish(13)</a></ul>
                      <ul class = "small"><a href="pages" >Anurag(24)</a></ul>
                    </div>
              </ul>
            </li>
          </ul>
        </div>
    <div class="col-md-1">
    </div>
    <div class="col-md-10">

      <!--Grid row-->
      
      @for ($i=0; $i < 8; $i++)
        <div class="row wow fadeIn">
          @for ($j = $i; $j < $i+4; $j++)
           <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
              <div class="view overlay">
                <img src="storage/pages/{{$j+1}}.jpg" class="img-fluid" alt="">
                <a href="pages/{{$datas[$j]->id}}">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <div class="card-body text-center">
                <a href="pages/{{$datas[$j]->id}}" class="grey-text">
                  <h5>{{$datas[$j]->category}}</h5>
                </a>
                <h5>
                  <strong>
                    <a href="pages/{{$datas[$j]->id}}" class="dark-grey-text">{{$datas[$j]->clothes}}
                      <span class="badge badge-pill danger-color">NEW</span>
                    </a>
                  </strong>
                </h5>
                <h4 class="font-weight-bold blue-text">
                  <strong>{{$datas[$j]->price}}</strong>
                </h4>
              </div>
            </div>
           </div>
          @endfor
        </div>
        {{$i += 3}}
      @endfor
    </div>
  </div>
</div>
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Call to action-->
    <div class="pt-4">
      <a href="/" 
        role="button">
        
      </a>
      <a  href="/"  role="button">
  
        
      </a>
    </div>
    <!--/.Call to action-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="https://www.facebook.com/" target="_blank">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>

      <a href="https://twitter.com/" target="_blank">
        <i class="fab fa-twitter mr-3"></i>
      </a>

      <a href="https://www.youtube.com/" target="_blank">
        <i class="fab fa-youtube mr-3"></i>
      </a>

      <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
        <i class="fab fa-google-plus-g mr-3"></i>
      </a>

      <a href="https://dribbble.com/" target="_blank">
        <i class="fab fa-dribbble mr-3"></i>
      </a>

      <a href="https://pinterest.com/" target="_blank">
        <i class="fab fa-pinterest mr-3"></i>
      </a>

      <a href="https://github.com/" target="_blank">
        <i class="fab fa-github mr-3"></i>
      </a>

      <a href="http://codepen.io/" target="_blank">
        <i class="fab fa-codepen mr-3"></i>
      </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2020 Copyright
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>

@endsection