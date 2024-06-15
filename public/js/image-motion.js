

var div_one = document.getElementById('div-one');
var div_two = document.getElementById('div-two');
var div_three = document.getElementById('div-three');
var div_four = document.getElementById('div-four');

var pre_height = div_one.getBoundingClientRect().height + div_two.getBoundingClientRect().height +
div_three.getBoundingClientRect().height + div_four.getBoundingClientRect().height - 
20 + "px";


var point_1 = document.getElementById('point-1');
var point_2 = document.getElementById('point-2');
var point_3 = document.getElementById('point-3');
var point_4 = document.getElementById('point-4');
var motion_image = document.getElementById('motion-image');


motion_image.style.top = pre_height;  
motion_image.style.left = point_1.getBoundingClientRect().x + "px";


var observer_point_1 = new IntersectionObserver(
   (entries) => {
      entries.forEach((entry) => {
         if(entry.isIntersecting){

            // // entry.target.style.translate = "0px 0px";
            window.addEventListener('scroll', () => {
               // if(window.screenTop )
               // console.log(document.documentElement.scrollHeight)
               // console.log(point_1.getBoundingClientRect().top + point_1.getBoundingClientRect().height);

               // motion_image.style.top = point_1.getBoundingClientRect().top + "px";
               // motion_image.style.left = point_1.getBoundingClientRect().x + "px";

               // console.log(point_1.scrollHeight);
               // console.log(point_1.scrollTop);

               motion_image.style.top = parseInt(motion_image.style.top.slice(0, -2)) +
               1 + "px";
               console.log(point_1.scrollHeight)
               // console.log(motion_image.style.top.slice(0, -2) + 1)
            })

            // motion_image.scrollHeight = point_1.scrollHeight;
            // console.log(point_1.getBoundingClientRect().top);
            // motion_image.style.top = point_1.getBoundingClientRect().top + "px";
            // motion_image.style.left = point_1.getBoundingClientRect().x + "px";
         }
      });

   }, 
   {
      rootMargin: "-10%",
      threshold: 0.8,
   }
);



observer_point_1.observe(point_1);
// observer_point_1.observe(motion_image);