<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <title>Tripcel</title>

      <link rel="stylesheet" href="{{ URL('css/main.css') }}">
      <link rel="stylesheet" href="{{ URL('css/index.css') }}">
      <link rel="stylesheet" href="{{ URL('css/index-responsive.css') }}">
   </head>

   <body>
      <div class="div-one" id="div-one">
         <section class="main-section">
            <h1 class="hero-heading float-up" id="hero-heading">Connect Beyond Borders</h1>

            <p class="hero-paragraph float-up">
               Experience seamless communication in over 200 countries with our Travel eSIM. 
               Simple, secure, and made for the global explorer.
            </p>

            <form action="#" method="get" class="search-form float-up">
               <section class="input-section">
                  <section class="search-icon">
                     <img src="{{ url('images/search-icon.svg') }}" alt="Search icon">
                  </section>

                  <input type="search" placeholder="Search e-sim for your destination in 200+ countries and regions">
               </section>

               <span class="demacator"></span>

               <section class="submit-section">
                  <button type="submit" name="submit">Get your eSim</button>
               </section>
            </form>
         </section>
      </div>

      <div class="div-two" id="div-two">
         <section class="main-section">
            <section class="scroll-wrapper">
               {{-- First set --}}
               <section class="feature-box">
                  <img src="{{ url('images/feature-frame.svg') }}" alt="Feature frame image">

                  <section class="feature-content">
                     <section class="heading">
                        <span class="dot"></span>
                        <h3>Travel Smarter with e-Sim</h3>
                     </section>

                     <p>
                        Experience Speed Beyond Borders, Enjoy lightning-fast 4G/LTE and 
                        5G mobile data on top-tier networks. accessible in each corner 
                        of the globe
                     </p>
                  </section>
               </section>

               <section class="feature-box">
                  <img src="{{ url('images/feature-frame.svg') }}" alt="Feature frame image">

                  <section class="feature-content">
                     <section class="heading">
                        <span class="dot"></span>
                        <h3>Dual Sim Functionality</h3>
                     </section>

                     <p>
                        Maintain your existing SIM for incoming calls,
                        while leveraging our eSlM data plans for internet
                        and app usage. Keep your number. enhance
                        your connectivity
                     </p>
                  </section>
               </section>

               <section class="feature-box">
                  <img src="{{ url('images/feature-frame.svg') }}" alt="Feature frame image">

                  <section class="feature-content">
                     <section class="heading">
                        <span class="dot"></span>
                        <h3>Activation in seconds</h3>
                     </section>

                     <p>
                        Activate on any compatible device in less
                        than 5 minutes, no physical SIM card required.
                        Instant connectivity at your fingertips
                     </p>
                  </section>
               </section>

               <section class="feature-box">
                  <img src="{{ url('images/feature-frame.svg') }}" alt="Feature frame image">

                  <section class="feature-content">
                     <section class="heading">
                        <span class="dot"></span>
                        <h3>Affordable Price</h3>
                     </section>

                     <p>
                        Up to 85% cheaper than roaming with your own
                        carrier. No hidden fees and unexpected bills
                     </p>
                  </section>
               </section>

               <section class="feature-box">
                  <img src="{{ url('images/feature-frame.svg') }}" alt="Feature frame image">

                  <section class="feature-content">
                     <section class="heading">
                        <span class="dot"></span>
                        <h3>Flexible plans in 200+ countries</h3>
                     </section>

                     <p>
                        Stay connected to high-speed data anywhere in the
                        world, without expensive roaming fees
                     </p>
                  </section>
               </section>
               
               <section class="feature-box">
                  <img src="{{ url('images/feature-frame.svg') }}" alt="Feature frame image">

                  <section class="feature-content">
                     <section class="heading">
                        <span class="dot"></span>
                        <h3>No hidden fees</h3>
                     </section>

                     <p>
                        Enjoy high-speed internet with one prepaid plan
                        without fear of being overcharged
                     </p>
                  </section>
               </section>
               
               {{-- Second set --}}
               <section class="feature-box">
                  <img src="{{ url('images/feature-frame.svg') }}" alt="Feature frame image">

                  <section class="feature-content">
                     <section class="heading">
                        <span class="dot"></span>
                        <h3>Travel Smarter with e-Sim</h3>
                     </section>

                     <p>
                        Experience Speed Beyond Borders, Enjoy lightning-fast 4G/LTE and 
                        5G mobile data on top-tier networks. accessible in each corner 
                        of the globe
                     </p>
                  </section>
               </section>

               <section class="feature-box">
                  <img src="{{ url('images/feature-frame.svg') }}" alt="Feature frame image">

                  <section class="feature-content">
                     <section class="heading">
                        <span class="dot"></span>
                        <h3>Dual Sim Functionality</h3>
                     </section>

                     <p>
                        Maintain your existing SIM for incoming calls,
                        while leveraging our eSlM data plans for internet
                        and app usage. Keep your number. enhance
                        your connectivity
                     </p>
                  </section>
               </section>

               <section class="feature-box">
                  <img src="{{ url('images/feature-frame.svg') }}" alt="Feature frame image">

                  <section class="feature-content">
                     <section class="heading">
                        <span class="dot"></span>
                        <h3>Activation in seconds</h3>
                     </section>

                     <p>
                        Activate on any compatible device in less
                        than 5 minutes, no physical SIM card required.
                        Instant connectivity at your fingertips
                     </p>
                  </section>
               </section>

               <section class="feature-box">
                  <img src="{{ url('images/feature-frame.svg') }}" alt="Feature frame image">

                  <section class="feature-content">
                     <section class="heading">
                        <span class="dot"></span>
                        <h3>Affordable Price</h3>
                     </section>

                     <p>
                        Up to 85% cheaper than roaming with your own
                        carrier. No hidden fees and unexpected bills
                     </p>
                  </section>
               </section>

               <section class="feature-box">
                  <img src="{{ url('images/feature-frame.svg') }}" alt="Feature frame image">

                  <section class="feature-content">
                     <section class="heading">
                        <span class="dot"></span>
                        <h3>Flexible plans in 200+ countries</h3>
                     </section>

                     <p>
                        Stay connected to high-speed data anywhere in the
                        world, without expensive roaming fees
                     </p>
                  </section>
               </section>
               
               <section class="feature-box">
                  <img src="{{ url('images/feature-frame.svg') }}" alt="Feature frame image">

                  <section class="feature-content">
                     <section class="heading">
                        <span class="dot"></span>
                        <h3>No hidden fees</h3>
                     </section>

                     <p>
                        Enjoy high-speed internet with one prepaid plan
                        without fear of being overcharged
                     </p>
                  </section>
               </section>
            </section>
         </section>

         <section class="globe-section descend">
            <img src="{{ url('images/hero-globe.svg') }}" alt="Globe image">
         </section>

         <section class="partners-section">
            <img src="{{ url('images/partners.svg') }}" alt="Company partners image">
         </section>
      </div>

      <div class="div-three" id="div-three">
         <section class="first-section float-up">
            <h2 class="heading">Stay Connected</h2>

            <section class="sub-heading">
               <h3>No matter where your journey takes you</h3>

               <p>
                  Experience seamless internet connectivity on all your
                  adventures with Tripcel eSlM, and say goodbye to costly
                  roaming bills when you return.
               </p>
            </section>
         </section>

         <section class="second-section float-down">
            <section class="box-one">
               <section class="map-line">
                  <img src="{{ url('images/map-line.svg') }}" alt="Map line image">
               </section>

               <section class="map-text">
                  <h3>Over 200</h3>

                  <span>Countries</span>

                  <span>Travel eSim Available</span>
               </section>
            </section>

            <section class="box-two">
               <img src="{{ url('images/map.svg') }}" alt="Tripcel network image">
            </section>
         </section>
      </div>

      <div class="div-four" id="div-four">
         <section class="main-section">
            <h4>BENEFITS</h4>

            <section class="scroll-wrapper-1">
               <section class="scroll-wrapper-2" id="scroll-wrapper">
                  <section class="main-content">
                     <h2>Unlimited <br> Access</h2>

                     <h3>No matter where you are</h3>

                     <p>
                        Enjoy the freedom of unlimited data, navigate, share, stay
                        connected without worrying about data limitations.
                        Stream. browse. and exolore Turkev at vour own oace.
                     </p>
                  </section>
                  
                  <section class="main-content">
                     <h2>Fast & Reliable <br> Connection</h2>

                     <h3>No matter where you are</h3>

                     <p>
                        Tripcel eSlM provides a fast and reliable internet
                        connection, ensuring you have a seamless online
                        experience wherever your journey takes you in Turkey.
                     </p>
                  </section>
                  
                  <section class="main-content">
                     <h2>Easy <br> Activation</h2>

                     <h3>No matter where you are</h3>

                     <p>
                        No need to visit a local store or wait in long queues.
                        Activate your eSlM with just a few clicks, allowing you to
                        start using data right away
                     </p>
                  </section>                  
               </section>
            </section>

            <a href="#">Get Your eSim</a>

            <section class="scroll-indicator-section">
               <span class="scroll-indicator" onclick="selectNextCarousel(0)"></span>
               <span class="scroll-indicator" onclick="selectNextCarousel(1)"></span>
               <span class="scroll-indicator" onclick="selectNextCarousel(2)"></span>
            </section>
         </section>

         <section class="country-box" style="--left: 45%; --top: 2%; --rotate: -10deg; --duration: 3s">
            <section class="image-section">
               <img src="{{ url('images/countries/finland.svg') }}" alt="Country image">
            </section>

            <span class="country-text">Finland</span>
         </section>
         <section class="country-box" style="--left: 15%; --top: 0%; --rotate: 15deg; --duration: 3s">
            <section class="image-section">
               <img src="{{ url('images/countries/india.svg') }}" alt="Country image">
            </section>

            <span class="country-text">India</span>
         </section>
         <section class="country-box" style="--left: 0%; --top: 15%; --rotate: 10deg; --duration: 3s">
            <section class="image-section">
               <img src="{{ url('images/countries/cyprus.svg') }}" alt="Country image">
            </section>

            <span class="country-text">Cyprus</span>
         </section>
         <section class="country-box" style="--left: 15%; --top: 20%; --rotate: -20deg; --duration: 3s">
            <section class="image-section">
               <img src="{{ url('images/countries/uk.svg') }}" alt="Country image">
            </section>

            <span class="country-text">United Kingdom</span>
         </section>
         <section class="country-box" style="--left: 0%; --top: 40%; --rotate: -20deg; --duration: 3s">
            <section class="image-section">
               <img src="{{ url('images/countries/china.svg') }}" alt="Country image">
            </section>

            <span class="country-text">China</span>
         </section>
         <section class="country-box" style="--left: 15%; --top: 45%; --rotate: 25deg; --duration: 5s">
            <section class="image-section">
               <img src="{{ url('images/countries/isreal.svg') }}" alt="Country image">
            </section>

            <span class="country-text">Isreal</span>
         </section>
         <section class="country-box" style="--left: 0%; --top: 80%; --rotate: 15deg; --duration: 3s">
            <section class="image-section">
               <img src="{{ url('images/countries/us.svg') }}" alt="Country image">
            </section>

            <span class="country-text">United States</span>
         </section>
         <section class="country-box" style="--left: 15%; --top: 70%; --rotate: -25deg; --duration: 5s">
            <section class="image-section">
               <img src="{{ url('images/countries/maldives.svg') }}" alt="Country image">
            </section>

            <span class="country-text">Maldives</span>
         </section>
         <section class="country-box" style="--left: 25%; --top: 90%; --rotate: -25deg; --duration: 5s">
            <section class="image-section">
               <img src="{{ url('images/countries/switzerland.svg') }}" alt="Country image">
            </section>

            <span class="country-text">Switzerland</span>
         </section>



         <section class="country-box" style="--left: 55%; --top: 90%; --rotate: -25deg; --duration: 5s">
            <section class="image-section">
               <img src="{{ url('images/countries/poland.svg') }}" alt="Country image">
            </section>

            <span class="country-text">Poland</span>
         </section>
         <section class="country-box" style="--left: 75%; --top: 80%; --rotate: 20deg; --duration: 3s">
            <section class="image-section">
               <img src="{{ url('images/countries/canada.svg') }}" alt="Country image">
            </section>

            <span class="country-text">Canada</span>
         </section>
         <section class="country-box" style="--left: 90%; --top: 85%; --rotate: -20deg; --duration: 3s">
            <section class="image-section">
               <img src="{{ url('images/countries/germany.svg') }}" alt="Country image">
            </section>

            <span class="country-text">Germany</span>
         </section>
         <section class="country-box" style="--left: 83%; --top: 60%; --rotate: -25deg; --duration: 5s">
            <section class="image-section">
               <img src="{{ url('images/countries/albania.svg') }}" alt="Country image">
            </section>

            <span class="country-text">Albania</span>
         </section>
         <section class="country-box" style="--left: 95%; --top: 55%; --rotate: 15deg; --duration: 3s">
            <section class="image-section">
               <img src="{{ url('images/countries/isreal.svg') }}" alt="Country image">
            </section>

            <span class="country-text">Isreal</span>
         </section>
         <section class="country-box" style="--left: 78%; --top: 35%; --rotate: -10deg; --duration: 3s">
            <section class="image-section">
               <img src="{{ url('images/countries/nigeria.svg') }}" alt="Country image">
            </section>

            <span class="country-text">Nigeria</span>
         </section>
         <section class="country-box" style="--left: 92%; --top: 30%; --rotate: -25deg; --duration: 5s">
            <section class="image-section">
               <img src="{{ url('images/countries/netherland.svg') }}" alt="Country image">
            </section>

            <span class="country-text">Netherland</span>
         </section>
         <section class="country-box" style="--left: 70%; --top: 15%; --rotate: 25deg; --duration: 5s">
            <section class="image-section">
               <img src="{{ url('images/countries/south-africa.svg') }}" alt="Country image">
            </section>

            <span class="country-text">South_Africa</span>
         </section>
         <section class="country-box" style="--left: 90%; --top: 5%; --rotate: -15deg; --duration: 3s">
            <section class="image-section">
               <img src="{{ url('images/countries/russia.svg') }}" alt="Country image">
            </section>

            <span class="country-text">Russia</span>
         </section>
      </div>

      <div class="div-five">
         <section class="work-1">
            <section class="text-section float-up">
               <h2>How it Works</h2>

               <h3>Check Compatibility and Purchase</h3>

               <p>
                  Make sure your device works with eSlM before you buy a
                  data plan. Activating our plans is instant on unlocked
                  iPhones and Androids with built-in eSlM chips. For
                  confirmation, look at the eSlM Device List.
               </p>

               <a href="#">Check your Phone Compatibility</a>
            </section>

            <section class="image-section float-up" id="point-1">
               <video loop muted autoplay autobuffer>
                  <source src="{{ url('videos/clay-animation.mp4') }}" type="video/mp4">
               </video>

               <section class="image-box">
                  <img src="{{ url('images/empty-phone-frame.svg') }}" alt="How it works">
                  <img class="screen" src="{{ url('images/phone-screen-1.svg') }}" alt="How it works">
               </section>
            </section>
         </section>
         
         <section class="work-1 work-2">
            <section class="text-section float-up">
               <h3>Choose a Plan</h3>

               <p>
                  Choose either a monthly or a prepaid data plan that will
                  work for you in the area you are going to. See our eSlM
                  Plans & Pricing page for more options.
               </p>
            </section>

            <section class="image-section float-up" id="point-2">
               <video loop muted autoplay autobuffer>
                  <source src="{{ url('videos/clay-animation.mp4') }}" type="video/mp4">
               </video>

               <section class="image-box">
                  <img src="{{ url('images/empty-phone-frame.svg') }}" alt="How it works">
                  <img class="screen" src="{{ url('images/phone-screen-1.svg') }}" alt="How it works">
               </section>
            </section>
         </section>
         
         <section class="work-1 work-3">
            <section class="text-section float-up">
               <h3>Scan QR Code</h3>

               <p>
                  Use your smartphone or another eSlM-compatible
                  device to scan the QR code sent via email.
               </p>
            </section>

            <section class="image-section float-up" id="point-3">
               <video loop muted autoplay autobuffer>
                  <source src="{{ url('videos/clay-animation.mp4') }}" type="video/mp4">
               </video>

               <section class="image-box">
                  <img src="{{ url('images/empty-phone-frame.svg') }}" alt="How it works">
                  <img class="screen" src="{{ url('images/phone-screen-3.svg') }}" alt="How it works">
               </section>
            </section>
         </section>
         
         <section class="work-1 work-4">
            <section class="text-section float-up">
               <h3>Connect to 4G or 5G/LTE</h3>

               <p>
                  Simply follow the on-screen instructions to add your new
                  international data plan. It is really that easy! As soon as
                  you land, go online because your phone will connect to
                  the internet network automatically. Experience how easy
                  and quick Tricep•s eSlM connectivity is.
               </p>
            </section>

            <section class="image-section float-up" id="point-4">
               <video loop muted autoplay autobuffer>
                  <source src="{{ url('videos/clay-animation.mp4') }}" type="video/mp4">
               </video>

               <section class="image-box">
                  <img src="{{ url('images/empty-phone-frame.svg') }}" alt="How it works">
                  <img class="screen" src="{{ url('images/phone-screen-4.svg') }}" alt="How it works">
               </section>
            </section>
         </section>


         <section class="motion-image" id="motion-image">
            <video loop muted autoplay autobuffer>
               <source src="{{ url('videos/clay-animation.mp4') }}" type="video/mp4">
            </video>

            <section class="image-box">
               <img src="{{ url('images/empty-phone-frame.svg') }}" alt="How it works">
               <img class="screen" src="{{ url('images/phone-screen-4.svg') }}" alt="How it works">
            </section>
         </section>
      </div>


      <div class="div-six">
         <h2>Words From Our Customers</h2>

         <section class="main-section">

         </section>
      </div>


      {{-- <script defer src="{{ url('js/image-motion.js') }}"></script> --}}
      <script src="{{ url('js/index.js') }}"></script>
      <script src="{{ url('js/carousel.js') }}"></script>
   </body>
</html>