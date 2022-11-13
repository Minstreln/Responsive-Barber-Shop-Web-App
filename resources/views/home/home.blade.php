<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

    {{-- header starts --}}
    <div class="main-container">

        <div class="container">

            <div class="header-logo">
                <h1>BARBER</h1>
            </div>
    
            <div class="navbar" id="menuBox">
                <nav>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">Gallery</a></li>
                        <li><a href="">Contact</a></li>
    
                        <li><button type="button" class="header-button">Book Now</button></li>
                    </ul>
    
                </nav>
            </div>
    
            <img src="{{asset('images/menu.png')}}" id="menuIcon" alt="">
    
        </div>
    
         {{-- header ends --}}
    
    
         {{-- Hero secton starts --}}
    
        <div class="hero-container">
    
            <div class="hero-img">
                <img id="animate-pop-in" src="{{asset('images/barber-logo-removebg-preview.png')}}" alt="">
            </div>
    
            <div class="hero-writing">
                
                <h3 id="animate-pop-in">Barbing Salon</h3>
    
                <h1 id="animate-pop-in">THE WORLD OF STYLING</h1>
    
                <p id="animate-pop-in">If you want to look better than the rest and are all set to burn the floors <br>
                    with your complete new look then we are here for you</p>
    
                <button type="button" class="hero-button"><a href="">Our Services</a></button>
            </div>
    
        </div>
    
         {{-- Hero secton ends --}}
    </div>


     {{-- after hero --}}

    <div class="afterherocontainer">
       <div class="afterherocontainer-img">
            <img src="{{asset('images/emma4.jpg')}}" alt="">
       </div>

       <div class="afterherocontainer-writeup">
            <h1>Hair Styling</h1>

            <p>Combining technological supremacy with an artistic <br>
                edge, our hair styling is a precursor that <br>
                continously plugs backstage trends into salons.</p>

            <button type="button" class="afterherocontainer-button"><a href="">Read More</a></button>
       </div>
    </div>

     {{-- after hero ends --}}

     {{-- services starts --}}

     <div class="services">
        <div class="service-header">
            <h1>OUR OFFERED SERVICES</h1>

            <p>We are a multi-award winning hairdressing brand with exhausive experience, <br>
            <span>Exceptiponal client service and amazing results.</span> </p>
        </div>

        <div class="service-groups">

            <div class="groups">
                <img src="{{asset('images/barber-logo-removebg-preview.png')}}" alt="">
                <h1>hair Styling</h1>

                <p>We have adopted the science <br>
                  of understanding and styling <br>
                  hair and not merely cutting or <br>
                  using styling products and all <br>
                  our stylist are meticulously trained.</p>

                  <button type="button" class="Service-button"><a href="">Read More</a></button>
            </div>

            <div class="groups">
                <img src="{{asset('images/barber-logo-removebg-preview.png')}}" alt="">
                <h1 class="hair-care">hair Care</h1>
                
                <p>Hair care can be tiring and <br>
                   boring as well. Most <br>
                   importantly being consistent <br>
                   at hair care is'nt really possible so,  <br>
                    we do that
                   for you all the time.</p>

                  <button type="button" class="Service-button"><a href="">Read More</a></button>
            </div>


            <div class="groups">
                <img src="{{asset('images/barber-logo-removebg-preview.png')}}" alt="">
                <h1>hair Products</h1>
                
                <p>We Offer an extensive range of <br>
                    shampoos, conditoners, <br>
                    brushes, combs, scissors, <br>
                    elsctrical items and <br>
                    accesories, all with fast <br>
                    Delivery.
                </p>

                <button type="button" class="Service-button"><a href="">Read More</a></button>
            </div>
        </div>
     </div>
     {{-- services ends --}}


     {{-- barbing Service --}}

     <div class="barbing-service">

        <div class="barbing-service-header">
            <h1>BARBING SERVICE PRICING</h1>

            <p>It is a ong established fact that a reader will be distracted by a readeable content of a page when <br>
                <span>looking at it's layout. The point of using lorem ipsum</span>
            </p>
        </div>

        <div class="barber-service-img">

            <div class="barber-img">
                <img src="{{asset('images/emma5.jpg')}}" alt="">
            </div>

            <div class="barber-prices">

                <div class="price">
                  <small> HairCut_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ <span> $40 </span></small>
                    <p>A good haircut is indeed the best treatment</p>
                </div>

                <div class="price">
                  <small>Hair Spa_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ <span> $70</span></small> 
                    <p>Get a spa treatment for a healthier hair</p>
                </div>

                <div class="price">
                  <small> Hair Coloring_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ <span> $75</span></small>
                    <p>Because life is too short to have boring hair</p>
                </div>

                <div class="price">
                  <small> Hair Styling_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ <span>$65</span> </small>
                    <p>Good hair doesn't happen by chance</p>
                </div>

                <div class="price">
                  <small> Hair Education_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ <span>$25</span> </small>
                    <p>Don't just know about hair, understand it</p>
                </div>

                <div class="price">
                  <small> Beauty & Grooming_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _   <span>$40</span> </small>
                    <p>Grooming is the real sense of elegance</p>
                </div>

            </div>
        </div>
     </div>

     {{-- barbing Service --}}


     {{-- Bookings starts --}}

     <div class="bookings-container">
        
        <div class="bookings-header">

            <h1>BOOK YOUR BARBER</h1>

            <p>Great hair doesn't happen by chance. It happens by appointment. <br>
            <span>So, don't wait...book your appointment now!</span></p>

        </div>

        <div class="bookings-img-container">

            <div class="bookings-img">
                <img src="{{asset('images/emma1.jpg')}}" alt="">
            </div>

            <div class="bookings-form">

                <form action="" method="POST">
                    @csrf

                    <h1>BOOK YOUR APPOINTMENT</h1>

                <div class="form-group">
                        
                    <div class="form-groups">

                        <input type="text" name="name" placeholder="Name" required>

                        <input class="emailbox" type="email" name="email" placeholder="Email" required> 
  
                    </div>
                
                   <div class="form-groups">
                       <input type="number" name="number" placeholder="Contact Number" required>

                        <select name="service" id="select-service" required>

                            <option value="" selected="" style="display: none">Select Service</option>

                            <option value="HairCut">HairCut</option>

                            <option value="HairSpa">Hair Spa</option>

                            <option value="Haircoloring">Hair Coloring</option>

                            <option value="HairStyling">Hair Styling</option>

                            <option value="HairEdu">Hair Education</option>

                            <option value="Hairbeauty">Beauty and Grooming</option>

                        </select> 

                   </div>

                   <div class="form-groups">

                        <input class="datetime" type="date" name="date"  placeholder="Select Date" required>

                            
                        <select name="service" id="select-time" required>

                            <option value="" selected="" style="display: none">Select Time</option>

                            <option value="">8:00am</option>

                            <option value="">10:00am</option>

                            <option value="">12:00pm</option>

                            <option value="">2:00pm</option>

                            <option value="">4:00pm</option>

                            <option value="">6:00pm</option>

                        </select> 

                   </div>

                   <div class="form-groups">
                      <input class="selecttab" type="text" name="price" placeholder="Select Price" required>
                   </div>

                </div>



                    <div class="form-button">
                        <button type="submit">BOOK APPOINTMENT</button>
                    </div>

                </form>

            </div>

        </div>

     </div>

     {{-- Bookings ends --}}


     {{-- Our Workers --}}

     <div class="workers-container">

        <div class="worker-header">
            <h1>OUR HAIR STYLISTS</h1>

            <p>We have artists who have continued to set standards in hair dominating <br>
                <span>The hairdressing industry and creating the hair for every season</span>
            </p>
        </div>

        <div class="workers-img">

            <div class="work">
                <img src="{{asset('images/ourwrkr1.jpeg')}}" alt="">
                <h1>JACOB WILLIAM</h1>
                <p>Hair Master</p>
            </div>

            <div class="work">
                <img src="{{asset('images/ourwrkr2.jpeg')}}" alt="">
                <h1>SERENA JAMES</h1>
                <p>Hair Master</p>
            </div>

            <div class="work">
                <img src="{{asset('images/ourwrkr3.jpeg')}}" alt="">
                <h1>JAMES THOMAS</h1>
                <p>Hair Master</p>
            </div>

        </div>
     </div>

     {{-- Our Workers ends --}}


     {{-- Gallery --}}

     <div class="gallery-container">

        <div class="gallery-header">
            <h1>OUR GALLERY</h1>

            <P>Don't believe our words, because words may decieve <br>
            <span>So, see this gallery and trust the visuals.</span></P>
        </div>
        
        <div class="gallery-img">

            <div class="gallery-main">
                <img style="height: 500px; width: 260px;" src="{{asset('images/emma2.jpeg')}}" alt="">
            </div>

            <div class="groups">

                <div class="gallery-groups">
                    <img style="height: 240px; width: 260px;" src="{{asset('images/emma3.jpg')}}" alt="">
    
                    <img style="height: 240px; width: 260px;" src="{{asset('images/emma4.jpg')}}" alt="">
                </div>
    
                <div class="gallery-groups">
                    <img style="height: 240px; width: 260px;" src="{{asset('images/emma5.jpg')}}" alt="">
    
                    <img style="height: 240px; width: 260px;" src="{{asset('images/emma1.jpg')}}" alt="">
                </div>

            </div>
            

        </div>
     </div>

     {{-- Gallery ends --}}








    <script>
        let menuBox = document.getElementById('menuBox');

        let menuIcon = document.getElementById('menuIcon');

        menuIcon.onclick = function(){
            menuBox.classList.toggle("open-menu");

            if(menuBox.classList.contains("open-menu")){
                menuIcon.src = "{{asset('images/close.png')}}";
            }
            else {
                menuIcon.src = "{{asset('images/menu.png')}}";
            }
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
</body>
</html>