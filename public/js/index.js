
var observer_1 = new IntersectionObserver(
   (entries) => {
      entries.forEach((entry) => {
         if(entry.isIntersecting){
            entry.target.style.translate = "0px 0px";
         }
      });

      // console.log(entries);
   }, 
   {
      rootMargin: "-10%",
   }
);


var float_ups = document.getElementsByClassName('float-up');

for (const element of float_ups) {
   element.style.transition = "0.8s";
   observer_1.observe(element);
}

var float_downs = document.getElementsByClassName('float-down');

for (const element of float_downs) {
   element.style.transition = "0.8s";
   observer_1.observe(element);
}



var observer_2 = new IntersectionObserver(
   (entries) => {
      entries.forEach((entry) => {
         if(entry.isIntersecting){
            entry.target.style.translate = "0px 0px";
            entry.target.style.borderRadius = "0%";
            
            // entry.target.classList.add('normalize');
         }
      });
   }, 
   {
      rootMargin: "-20%",
   }
);


var descends = document.getElementsByClassName('descend');

for (const element of descends) {
   element.style.transition = "0.8s";
   observer_2.observe(element);
}
