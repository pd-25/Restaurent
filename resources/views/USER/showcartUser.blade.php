<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>pradipta resturent</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <base href="/public">
    <link rel="stylesheet" type="text/css" href="USER-asset/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="USER-asset/assets/css/font-awesome.css">

    <link rel="stylesheet" href="USER-asset/assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="USER-asset/assets/css/owl-carousel.css">

    <link rel="stylesheet" href="USER-asset/assets/css/lightbox.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    </head>
    
<body>
 

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="USER-asset/assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li> 
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 

                            <li class="scroll-to-section bg-danger">
                                @auth
                                <a href="{{route('showCart', Auth::user()->id)}}">
                                Cart[{{$count}}]
                                @endauth

                                @guest
                                   Cart[0] 
                                @endguest

                            </a></li> 

                            <li>
                                @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                    <li>
                                       <x-app-layout>
    
                                       </x-app-layout>
                                    </li>        
                                        
                                    @else
                                      <li>  <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a></li>
                
                                        @if (Route::has('register'))
                                            <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li>
                                        @endif
                                    @endauth
                                </div>
                            @endif

                            </li>

                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div id="top">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
               
                @if(Session::has('message'))
                  <p class="alert alert-info">{{ Session::get('message') }}</p>
                  @endif
               
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th> food Name </th>
                        <th> price </th>
                        <th> quantity </th>
                       
                        
                      </tr>
                    </thead>
                    <tbody>
                <form action="{{route('orderConfirm')}}" method="POST">
                    @csrf      
                       @foreach ($Cartitems as $item)
                    
                         
                      
                      <tr>
                        <td class="py-1">
                            <input hidden="" name="foodname[]" value="{{$item->title}}">
                          {{$item->title}}
                        </td>
                        <td>
                            <input hidden="" name="price[]" value="{{$item->price}}">
                            {{$item->price}} 
                        </td>

                        <td>
                            <input hidden="" name="quantity[]" value="{{$item->quantity}}">
                             {{$item->quantity}}
                             </td>
                        
                        
                       
                      <td> 
                        <form action="{{route('removecart')}}" method="post">
                        @csrf
                        
                        <input type="hidden" name="removefromcart" value="{{$item->id}}">
                        <button type="submit" class="btn btn-fill btn-primary">Delete</button> 
                      </form>
                     </td>
                      
                        
                       
                        
                      </tr>
                      @endforeach

                      
                      
                    </tbody>
                  </table>

                  <div align="center" style="padding: 10px">
                    <button id="order" class="btn btn-primary" type="button">order now</button>

                  </div>

                  <div id="appear" style="padding: 10px;  display: none;" align="center">
                      <div style="padding: 10px;">
                        <label for="">Name</label>
                        <input type="text" name="name" placeholder="Name">
                       </div>
                      <div style="padding: 10px;">
                        <label for="">phone</label>
                        <input type="number" name="number" placeholder="number">
                      </div>
                      <div style="padding: 10px;">
                          <label for="">Address</label>
                        <input type="text" name="Address" placeholder="Address">
                      </div>

                      <div style="padding: 10px;">
                        
                        <input  type="submit" class="btn btn-success" value="order confirm">
                        <button id="close"  class="btn btn-danger" type="button" >close</button>
                      </div>
                    </div>
                </form>
                </div>
              </div>
            </div>
          </div>
    </div>
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.html"><img src="USER-asset/assets/images/white-logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright Klassy Cafe Co.
                        
                        Design: TemplateMo</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
 
   <script type="text/javascript">
    $('#order').click(
        function () {
            $('#appear').show();
            
        }
    );

    $('#close').click(
        function () {
            $('#appear').hide();
            
        }
    );
   </script>
    <!-- jQuery -->
    <script src="USER-asset/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="USER-asset/assets/js/popper.js"></script>
    <script src="USER-asset/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="USER-asset/assets/js/owl-carousel.js"></script>
    <script src="USER-asset/assets/js/accordions.js"></script>
    <script src="USER-asset/assets/js/datepicker.js"></script>
    <script src="USER-asset/assets/js/scrollreveal.min.js"></script>
    <script src="USER-asset/assets/js/waypoints.min.js"></script>
    <script src="USER-asset/assets/js/jquery.counterup.min.js"></script>
    <script src="USER-asset/assets/js/imgfix.min.js"></script> 
    <script src="USER-asset/assets/js/slick.js"></script> 
    <script src="USER-asset/assets/js/lightbox.js"></script> 
    <script src="USER-asset/assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="USER-asset/assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });



        

    </script>
  </body>
</html>