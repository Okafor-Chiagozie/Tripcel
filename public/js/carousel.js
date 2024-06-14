
let scroll_wrapper = document.getElementById("scroll-wrapper");
let scroll_indicators = document.getElementsByClassName("scroll-indicator");

let default_indicator_num = 0;
var scroll_interval;
let timeoutId;
let isPaused = false;
let carousel_duration = 5000; // Interval time
let startTime; // When the interval or timeout started
let elapsedTime = 0; // Time elapsed before pause


function selectNextCarousel(num = default_indicator_num) {
   default_indicator_num = num;

   scroll_wrapper.style.translate = `calc(100% / 3 * -${num}) 0%`;

   for (let index = 0; index < scroll_indicators.length; index++) {

      for (const indicator of scroll_indicators) {
         indicator.style.backgroundColor = "var(--main-grey)";
      }

      scroll_indicators[num].style.backgroundColor = "var(--second-grey)";
   }
}

function autoCarousel() {
   default_indicator_num++;

   if (default_indicator_num == 3) {
      default_indicator_num = 0;
   }

   selectNextCarousel(default_indicator_num);
}

function startInterval() {
   if (!isPaused) {
      elapsedTime = 0;
      startTime = Date.now();
      scroll_interval = setInterval(autoCarousel, carousel_duration);
   } else {
      isPaused = false;
      timeoutId = setTimeout(() => {
         autoCarousel();
         scroll_interval = setInterval(autoCarousel, carousel_duration);
      }, carousel_duration - elapsedTime);
   }
}

function pauseInterval() {
   clearInterval(scroll_interval);
   clearTimeout(timeoutId);
   isPaused = true;
   elapsedTime = Date.now() - startTime;
}

function resumeInterval() {
   if (isPaused) {
      startInterval();
   }
}

function stopInterval() {
   clearInterval(scroll_interval);
   clearTimeout(timeoutId);
   isPaused = false;
   elapsedTime = 0;
}

startInterval();


scroll_wrapper.addEventListener('mouseover', () => {
   pauseInterval();
})

scroll_wrapper.addEventListener('mouseout', () => {
   resumeInterval();
})