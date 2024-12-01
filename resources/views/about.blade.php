<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   About Us
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
    
   .rotate-text {
            writing-mode: vertical-rl;
            transform: rotate(180deg);
        }
        .bg-pattern {
            background-color: dimgrey;
            background-repeat: repeat;
        }
  </style>
 </head>
 <body class="font-sans">
@include('layout.navbar')
  <section class="bg-white py-12">
   <div class="container mx-auto text-center">
    <h1 class="text-4xl font-bold">
     <span class="text-orange-500">
      |
     </span>
     About
     <span class="text-orange-500">
      Us
     </span>
    </h1>
    <p class="mt-4 text-gray-600">
     Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
    </p>
   </div>
  </section>
  <section class="bg-black py-12 bg-pattern">
   <div class="container mx-auto flex flex-col md:flex-row justify-between items-start md:items-center">
    <div class="md:w-1/2 text-white">
     <h2 class="text-3xl font-bold text-orange-500">
      Who We Are ?
     </h2>
     <p class="mt-4">
      Honec ut molestie turpis, elementum tempor metus. Vestibulum non nibh porttitor, eleifend purus eu, pul vinar orci. Quisque a gravida lorem, eu lobortis magna. Nulla auctor urna quis erat facilisis pretium. Cras facilisis risus sed mauris gravida, ideate vestibulum erat dictum. Nam in ante massa. Integer ultricies libero lorem, egestas dictum augue aliquam. Pellentesque habitant morbi tristique senectus.
     </p>
     <p class="mt-4">
      Elementum tempor metus donec ut molestie turpis. Vestibulum non nibh porttitor, eleifend purus eu, pulvinar orci. Quisque a gravida lorem, eu lobortis magna. Nulla auctor urnade quisate facilisis pretium. Cras facilisis risus sed mauris gravida, idealeta vestibulum erat dictum. Nam in ante massa. Integer ultricies libero lorem.once ut molestie turpis, elementum tempor metus.
     </p>
    </div>
    <div class="md:w-1/2">
     <img alt="A group of diverse people working together in an office setting" height="400" src="https://storage.googleapis.com/a1aa/image/f9XkAWoqGfv72kFiwvehGzMNZiVAF1UA7hqHFmiDmeQb8dZPB.jpg" width="600"/>
    </div>
   </div>
  </section>
  <div class="text-center text-black">
    <h1 class="text-4xl font-bold mb-8">Our <span class="text-orange-500">Skills</span></h1>
    <div class="flex justify-center space-x-8">
        <!-- Emergency Skill -->
        <div class="flex flex-col items-center">
            <div class="relative w-16 h-64 bg-white bg-opacity-20 rounded-lg overflow-hidden border-2 border-gray-300">
                <div class="absolute bottom-0 w-full h-4/5 bg-orange-500 flex items-center justify-center text-white text-lg font-bold">80%</div>
            </div>
            <span class="mt-4 text-lg tracking-widest font-bold text-orange-500">EMERGENCY</span>
        </div>
        <!-- Grooming Skill -->
        <div class="flex flex-col items-center">
            <div class="relative w-16 h-64 bg-white bg-opacity-20 rounded-lg overflow-hidden border-2 border-gray-300">
                <div class="absolute bottom-0 w-full h-3/5 bg-orange-500 flex items-center justify-center text-white text-lg font-bold">60%</div>
            </div>
            <span class="mt-4 text-lg tracking-widest font-bold text-orange-500">GROOMING</span>
        </div>
        <!-- Nutrition Skill -->
        <div class="flex flex-col items-center">
            <div class="relative w-16 h-64 bg-white bg-opacity-20 rounded-lg overflow-hidden border-2 border-gray-300">
                <div class="absolute bottom-0 w-full h-9/10 bg-orange-500 flex items-center justify-center text-white text-lg font-bold">90%</div>
            </div>
            <span class="mt-4 text-lg tracking-widest font-bold text-orange-500">NUTRITION</span>
        </div>
    </div>
</div>
@include('layout.footer')
 </body>
</html>
