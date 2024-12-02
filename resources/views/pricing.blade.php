<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Dog Boarding Pricing
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>

 </head>
 <body class="text-gray-800">
    @include('layout.navbar')
  <div class="container mx-auto py-12">
   <h1 class="text-4xl font-bold text-center text-gray-800">
    <span class="text-orange-500">
        |
       </span>
    <span >
     Dog Boarding 
     <span class="text-orange-500">
        Pricing
       </span>
   </h1>
   <p class="text-center text-gray-600 mt-4">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
   </p>
   <div class="flex flex-wrap justify-center mt-12">
    <!-- Basic Plan -->
    <div class="w-full sm:w-1/2 md:w-1/4 p-4">
     <div class="bg-gray-800 text-white rounded-lg shadow-lg p-6">
      <h2 class="text-xl font-bold text-orange-500">
       Basic Plan
      </h2>
      <div class="my-4">
       <img alt="Dog icon" class="mx-auto" height="50" src="https://storage.googleapis.com/a1aa/image/leHkdOwLqWS6dC99yk8ehu2tae9JSS4ErhGgDWPJTs2IbUtnA.jpg" width="50"/>
      </div>
      <p class="text-2xl font-bold text-orange-500">
       $12
       <span class="text-lg">
        Per Day
       </span>
      </p>
      <ul class="mt-4 space-y-2">
       <li>
        3 Times Full Diet
       </li>
       <li>
        Medical Checkup
       </li>
       <li>
        Daily Cleaning
       </li>
       <li>
        Extra Activities
       </li>
      </ul>
      <button onclick="window.location.href='{{ route('pembayaran') }}'"  class="mt-6 bg-orange-500 text-white py-2 px-4 rounded">
       Order Now
      </button>
     </div>
    </div>
    <!-- Medium Plan -->
    <div class="w-full sm:w-1/2 md:w-1/4 p-4">
     <div class="bg-gray-800 text-white rounded-lg shadow-lg p-6">
      <h2 class="text-xl font-bold text-orange-500">
       Medium Plan
      </h2>
      <div class="my-4">
       <img alt="Two cats icon" class="mx-auto" height="50" src="https://storage.googleapis.com/a1aa/image/AeqrgkvjuFy7U6oVfTfiCrfeXtOrUtU3XWkhI18VS37zsR1eE.jpg" width="50"/>
      </div>
      <p class="text-2xl font-bold text-orange-500">
       $24
       <span class="text-lg">
        Per Day
       </span>
      </p>
      <ul class="mt-4 space-y-2">
       <li>
        3 Times Full Diet
       </li>
       <li>
        Medical Checkup
       </li>
       <li>
        Daily Cleaning
       </li>
       <li>
        Extra Activities
       </li>
      </ul>
      <button class="mt-6 bg-orange-500 text-white py-2 px-4 rounded">
       Order Now
      </button>
     </div>
    </div>
    <!-- Pro Plan -->
    <div class="w-full sm:w-1/2 md:w-1/4 p-4">
     <div class="bg-gray-800 text-white rounded-lg shadow-lg p-6">
      <h2 class="text-xl font-bold text-orange-500">
       Pro Plan
      </h2>
      <div class="my-4">
       <img alt="Two paw prints icon" class="mx-auto" height="50" src="https://storage.googleapis.com/a1aa/image/bfC9YMSQW8VYBKf7s6HOkoxWy3yZIm4A250KPIVW7etObUtnA.jpg" width="50"/>
      </div>
      <p class="text-2xl font-bold text-orange-500">
       $36
       <span class="text-lg">
        Per Day
       </span>
      </p>
      <ul class="mt-4 space-y-2">
       <li>
        3 Times Full Diet
       </li>
       <li>
        Medical Checkup
       </li>
       <li>
        Daily Cleaning
       </li>
       <li>
        Extra Activities
       </li>
      </ul>
      <button class="mt-6 bg-orange-500 text-white py-2 px-4 rounded">
       Order Now
      </button>
     </div>
    </div>
    <!-- VIP Plan -->
    <div class="w-full sm:w-1/2 md:w-1/4 p-4">
     <div class="bg-gray-800 text-white rounded-lg shadow-lg p-6">
      <h2 class="text-xl font-bold text-orange-500">
       VIP Plan
      </h2>
      <div class="my-4">
       <img alt="Cat icon" class="mx-auto" height="50" src="https://storage.googleapis.com/a1aa/image/kr8c2NPBjRbeAi5JbolX1PGkaanDi19swpQLHYKN285yGV7JA.jpg" width="50"/>
      </div>
      <p class="text-2xl font-bold text-orange-500">
       $48
       <span class="text-lg">
        Per Day
       </span>
      </p>
      <ul class="mt-4 space-y-2">
       <li>
        3 Times Full Diet
       </li>
       <li>
        Medical Checkup
       </li>
       <li>
        Daily Cleaning
       </li>
       <li>
        Extra Activities
       </li>
      </ul>
      <button class="mt-6 bg-orange-500 text-white py-2 px-4 rounded">
       Order Now
      </button>
     </div>
    </div>
   </div>
  </div>
  @include('layout.footer')
 </body>
</html>
