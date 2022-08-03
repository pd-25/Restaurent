 <!-- ***** Menu Area Starts ***** -->
 <section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading ">
                    <h6>Our Menu</h6>
                    <h2>Our selection of cakes with quality taste</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-carousel">
        <div class="col-lg-12 col-sm-4">
            <div class="owl-menu-item owl-carousel">
                @foreach ($data as $d)
                    <form action="{{route('addCart',$d->id)}}" method="post">
                        @csrf
                
                <div class="item">
                    <div style="background-image: url('/foodimage/{{$d->image}}')" class='card'>
                        <div class="price"><h6>{{$d->price}}</h6></div>
                        <div class='info'>
                          <h1 class='title'>{{$d->title}}</h1>
                          <p class='description'>{{$d->description}}</p>
                          <div class="main-text-button">
                              <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                          </div> 
                        </div>
                    </div>

                    <input type="number" name="quantity" min="1" value="1" style="width: 80px">
                    <input type="submit"  value="Add Cart">
                </div>
            </form>
                @endforeach
                <!--<div class="item">
                    <div class='card card2'>
                        <div class="price"><h6>$22</h6></div>
                        <div class='info'>
                          <h1 class='title'>Klassy Pancake</h1>
                          <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                          <div class="main-text-button">
                              <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class='card card3'>
                        <div class="price"><h6>$18</h6></div>
                        <div class='info'>
                          <h1 class='title'>Tall Klassy Bread</h1>
                          <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                          <div class="main-text-button">
                              <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class='card card4'>
                        <div class="price"><h6>$10</h6></div>
                        <div class='info'>
                          <h1 class='title'>Blueberry CheeseCake</h1>
                          <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                          <div class="main-text-button">
                              <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class='card card5'>
                        <div class="price"><h6>$8.50</h6></div>
                        <div class='info'>
                          <h1 class='title'>Klassy Cup Cake</h1>
                          <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                          <div class="main-text-button">
                              <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class='card card3'>
                        <div class="price"><h6>$7.25</h6></div>
                        <div class='info'>
                          <h1 class='title'>Klassic Cake</h1>
                          <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                          <div class="main-text-button">
                              <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                          </div>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
</section>
<!-- ***** Menu Area Ends ***** -->