<div class="grid md:grid-cols-3 py-4">
    <!--Section 1-->
    <div class="text-center pt-10 md:pt-28 seccionUno">
        <p class="py-1 font-bold text-3xl">Joyeria</p>
        <p class="py-1">Coleccion primavera-verano  <br> By Something</p>
        <button class="border border-black p-2">Conozca los modelos</button>
    </div>
    <div class="flex justify-center ">
        <img src="{{asset('img/home/home1.jpg')}}" class="w-full" />
    </div>
    <div class="flex justify-center">
        <img src="{{asset('img/home/home2.jpg')}}" class="w-full p-10"/>
    </div>
    <div class="text-center pt-5 md:hidden">
        <p class="py-1 font-bold text-3xl">Joyeria</p>
        <p class="py-1">Coleccion primavera-verano <br> By Somthing</p>
        <button class="border border-black p-2">Conozca los modelos</button>
    </div>
</div>
<!--End section 1 -->

<!--Start section 2 "Favorites"-->
<div class="carousel relative border-b-2 border-beige mb-16 pb-10 pt-20 mx-10">
    <p class="text-center text-3xl py-3">Mas vendidos</p>
    <div class="carousel-inner relative overflow-hidden w-full">
      <!--Slide 1-->
      <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
      <div class="carousel-item absolute opacity-0">
        <div class="grid grid-cols-3 px-3">
            <img src="{{asset('img/home/producto1.jpg')}}" class="p-2"/>
            <img src="{{asset('img/home/producto1.jpg')}}" class="p-2"/>
            <img src="{{asset('img/home/producto1.jpg')}}" class="p-2"/>
        </div>
      </div>
      <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-yellow-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
      <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-yellow-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

      <!--Slide 2-->
      <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
      <div class="carousel-item absolute opacity-0">
        <div class="grid grid-cols-3 px-3">
            <img src="{{asset('img/home/producto1.jpg')}}" class="p-2"/>
            <img src="{{asset('img/home/producto1.jpg')}}" class="p-2"/>
            <img src="{{asset('img/home/producto1.jpg')}}" class="p-2"/>
        </div>
      </div>
      <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-yellow-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
      <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-yellow-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

      <!--Slide 3-->
      <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
      <div class="carousel-item absolute opacity-0">
        <div class="grid grid-cols-3 px-3">
            <img src="{{asset('img/home/producto1.jpg')}}" class="p-2"/>
            <img src="{{asset('img/home/producto1.jpg')}}" class="p-2"/>
            <img src="{{asset('img/home/producto1.jpg')}}" class="p-2"/>
        </div>
      </div>
      <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-yellow-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
      <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-yellow-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

    </div>
</div>
<!--end section 2-->

<!--section 3-->
<div class="grid grid-cols-3 mx-10 my-10 pb-6 border-b-2 border-beige">
    
    <p class="col-span-3 text-center text-3xl font-semibold mb-4 text-gray-800">Novedades</p>

    <div class="col-span-3 lg:col-span-1 bg-gray-100 text-center mx-2 my-2 pb-4">
      <img src="{{asset('img/home/blog1.jpg')}}"/>
      <p class="py-5 font-semibold text-gray-700">Titulo de un articulo</p>
      <p class="pb-2 px-6 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit. asdfasdfasdf</p>
      <a class="pb-4 px-6 text-gray-700 cursor-pointer">Mirar mas</a>
    </div>
    <div class="col-span-3 lg:col-span-1 bg-gray-100 text-center mx-2 my-2">
      <img src="{{asset('img/home/blog1.jpg')}}"/>
      <p class="py-5 font-semibold text-gray-700">Titulo de un articulo</p>
      <p class="pb-2 px-6 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit. asdfasdfasdf</p>
      <a class="pb-4 px-6 text-gray-700 cursor-pointer">Mirar mas</a>
    </div>
    <div class="col-span-3 lg:col-span-1 bg-gray-100 text-center mx-2 my-2">
      <img src="{{asset('img/home/blog1.jpg')}}"/>
      <p class="py-5 font-semibold text-gray-700">Titulo de un articulo</p>
      <p class="pb-2 px-6 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit. asdfasdfasdf</p>
      <a class="pb-4 px-6 text-gray-700 cursor-pointer">Mirar mas</a>
    </div>
    
</div>

<!--section 4-->
<div class="grid grid-cols-11">
  <div class="my-2 col-span-11 lg:col-span-4 lg:col-start-2 bg-white text-center">
    <img src="{{asset('img/home/new1.jpg')}}"/>
    <p class="text-3xl py-4 font-serif text-gray-800">Something title</p>
    <p class="font-serif text-gray-800">Click to see</p>
  </div>
  <div class="my-2 col-span-11 lg:col-span-4 lg:col-start-7 bg-white text-center">
    <img src="{{asset('img/home/new1.jpg')}}"/>
    <p class="text-3xl py-4 font-serif text-gray-800">Something title</p>
    <p class="font-serif text-gray-800">Click to see</p>
  </div>
</div>

<!--section 5-->
<div class="grid grid-cols-2 lg:grid-cols-6 mx-20 my-5">
  <p class="col-span-2 lg:col-span-6 text-3xl text-center py-5 text-gray-800">Conozca por categoria</p>
  <p class="col-span-2 lg:col-span-6 text-center pb-5 text-gray-800">Disenos increibles y nose que</p>
  <div class="m-2">
    <img class="border border-gray-400" src="{{asset('img/home/category1.jpg')}}"/>
    <p class="text-center text-gray-800 pt-2 font-medium">Anillos</p>
  </div>
  <div class="m-2">
    <img class="border border-gray-400" src="{{asset('img/home/category1.jpg')}}"/>
    <p class="text-center text-gray-800 pt-2 font-medium">Anillos</p>
  </div>
  <div class="m-2">
    <img class="border border-gray-400" src="{{asset('img/home/category1.jpg')}}"/>
    <p class="text-center text-gray-800 pt-2 font-medium">Anillos</p>
  </div>
  <div class="m-2">
    <img class="border border-gray-400" src="{{asset('img/home/category1.jpg')}}"/>
    <p class="text-center text-gray-800 pt-2 font-medium">Anillos</p>
  </div>
  <div class="m-2">
    <img class="border border-gray-400" src="{{asset('img/home/category1.jpg')}}"/>
    <p class="text-center text-gray-800 pt-2 font-medium">Anillos</p>
  </div>
  <div class="m-2">
    <img class="border border-gray-400" src="{{asset('img/home/category1.jpg')}}"/>
    <p class="text-center text-gray-800 pt-2 font-medium">Anillos</p>
  </div>
</div>

<!--Section 6-->
<div class="mt-20">
  <img src="{{asset('img/home/slider1.jpg')}}" />
  <p style="margin-top: -20%">asdfasdf</p>
</div>

<style>
@media only screen and (max-width: 768px) {
    .seccionUno{
        display:none
    }
}
.carousel-open:checked + .carousel-item {
  position: static;
  opacity: 100;
}
.carousel-item {
  -webkit-transition: opacity 0.6s ease-out;
  transition: opacity 0.6s ease-out;
}
#carousel-1:checked ~ .control-1,
#carousel-2:checked ~ .control-2,
#carousel-3:checked ~ .control-3 {
  display: block;
}


</style>


