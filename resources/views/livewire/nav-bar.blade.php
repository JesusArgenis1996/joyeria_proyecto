<nav class="grid grid-cols-3 bg-white border-t-4 border-beige ">
    <!--Container left-->
    <div class="text-left py-5 pl-2 flex items-center ">
        <!--Button tablets/cellphones-->
        <div class="block lg:hidden">
            <button 
                id="boton"
                class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 px-2">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
            </button>
        </div>
        <button id="buttonSearch">
            <img class="px-2 w-10" src="{{asset('img/navbar/search.svg')}}" />
        </button>
        <a class="px-2 preguntas">Servicio al cliente</a>
    </div>

    <!--logo-->
    <div class="flex justify-center ">
        <img src="{{asset('img/navbar/logo.jpg')}}" class="w-44" />
    </div>

    <!--Container right-->
    <div class="pr-2 py-5 flex flex-row-reverse items-center">
        <img class="px-2 w-10" src="{{asset('img/navbar/cart.svg')}}" />
        <div class="flex px-2">
            <img class="px-2 w-10" src="{{asset('img/navbar/user.svg')}}" />
            <p class="">Tu cuenta</p>
        </div>
    </div>

    

    <!--buscador-->
    <div id="searchModal" class="w-full mt-16 lg:mt-28 h-32 shadow-xl absolute bg-white searchModal">
        <div class="grid grid-cols-12 pt-5">
            <div class="col-start-3 col-span-9 flex h-12">
                <input type="text" class="px-3 w-5/6 border-b border-black" placeholder="Busca alguno de nuestros productos" />
                <img class="bg-white px-2 w-10 border-b border-black" src="{{asset('img/navbar/search.svg')}}" />
            </div>
        </div>
    </div>

    <!--Filter container-->
    <div id="menu" class="col-span-3 shadow-xl lg:shadow-none lg:mx-28 menu">
        <div class="flex flex-col lg:flex-row lg:justify-between py-3">
            <a class="px-4 py-2 lg:px-2 lg:py-0 cursor-pointer">Collares</a>
            <a class="px-4 py-2 lg:px-2 lg:py-0 cursor-pointer">Aretes</a>
            <a class="px-4 py-2 lg:px-2 lg:py-0 cursor-pointer">Anillos</a>
            <a class="px-4 py-2 lg:px-2 lg:py-0 cursor-pointer">Amor y compromiso</a>
            <a class="px-4 py-2 lg:px-2 lg:py-0 cursor-pointer">Relojes</a>
            <a class="px-4 py-2 lg:px-2 lg:py-0 cursor-pointer">Hombres</a>
            <a class="px-4 py-2 lg:px-2 lg:py-0 cursor-pointer">Regalos</a>
            <hr>
            <a class="px-4 py-2 lg:hidden">Preguntas Frecuentes</a>
        </div>
    </div>
    
</nav>
<script>
const boton = document.querySelector('#boton');
const menu = document.querySelector("#menu");

const buttonSearch = document.querySelector("#buttonSearch");
const searchModal = document.querySelector("#searchModal");

var aux = false;
//Para el menu 
boton.addEventListener('click', () => {
    menu.classList.toggle('menu')
})

//para el buscador
buttonSearch.addEventListener('click', () => {
    searchModal.classList.toggle('searchModal')
})
</script>
<style>
@media only screen and (max-width: 1024px) {
    .menu {
        display:none
    }
    .preguntas{
        display:none
    }
}
.searchModal{
    display:none
}
</style>