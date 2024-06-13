<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Tripcel</title>
      <link rel="stylesheet" href="{{ URL('css/index.css') }}">
      <link rel="stylesheet" href="{{ URL('css/main.css') }}">
   </head>

   <body>
      <div class="div-one">
         <section class="main-section">
            <h1 class="hero-heading">Connect Beyond Borders</h1>

            <p class="hero-paragraph">
               Experience seamless communication in over 200 countries with our Travel eSIM. 
               Simple, secure, and made for the global explorer.
            </p>

            <form action="#" method="get" class="search-form">
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

      <div class="div-two">
         <section class="main-section">
            <section class="scroll-wrapper-1">
               <section class="scroll-wrapper-2">
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
         </section>
      </div>
   </body>
</html>