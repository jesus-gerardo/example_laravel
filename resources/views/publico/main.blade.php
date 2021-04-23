@extends('template.base')
{{-- https://picsum.photos/200/300 --}}

@extends('template.header')

{{-- cuerpo del contenido --}}
@section('body')
    <div>

        <div id="inicio" class="grid grid-flow-row auto-rows-max">
            <h2 class="text-5xl">ABOUT</h2>
            <hr>

            <div class="xl:flex py-2">
                <div class="md:flex-shrink-0">
                    <img class="h-50 w-full object-contain md:w-48" src="https://i.pravatar.cc/300" alt="Man looking at item at a store">
                </div>

                <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Developer laravel</div>

                    <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Finding customers for your new business</a>

                    <p class="mt-2 text-gray-500">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi maxime praesentium temporibus veritatis error iste. Tempore mollitia qui corrupti consectetur veniam laborum dolorum rerum necessitatibus minus! Accusantium rerum iure minus!
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint dolorum quisquam nulla sapiente pariatur quaerat, ratione exercitationem, distinctio non molestiae atque architecto sed deserunt. Explicabo distinctio ipsam temporibus suscipit maxime!
                    </p>
                </div>

            </div>
        </div>
    <!--
        <div id="inicio" class="grid grid-flow-row auto-rows-max">
            <button class="bg-blue-500 sm:bg-orange-400 md:bg-red-500 hover:bg-blue-700 text-white py-2 px-2 rounded">boton 1</button>
            <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-2 rounded">boton 2</button>
            <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-2 rounded">boton 3</button>
        </div>
    -->

    <!--
        {{-- las columnas funcionan como filas distribucion horizontal--}}
        <div id="inicio" class="grid grid-cols-3 gap-4 mt-2">

            {{-- esta clase le especifico que tendra 4 filas si introduzco un elemento mas hace un salto al siguiente colum y 
            reapliza un repsonse al contenido con una separacion --}}
            {{-- y las filas funcionan como columnas  distribucion vertical--}}
            <div class="grid grid-rows-1 grid-flow-col gap-4">
                <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-2 rounded">boton 1</button>
                {{-- <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-2 rounded">boton 2</button> --}}
                {{-- <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-2 rounded">boton 3</button> --}}
                {{-- <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-2 rounded">boton 4</button> --}}
                {{-- <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-2 rounded">boton 5</button> --}}
            </div>

            <div class="grid grid-rows-4 grid-flow-col gap-4">
                <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-2 rounded">boton 1</button>
                <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-2 rounded">boton 2</button>
                <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-2 rounded">boton 3</button>
                <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-2 rounded">boton 4</button>
                <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-2 rounded">boton 5</button>
            </div>

            <div class="grid grid-rows-4 grid-flow-col gap-4">
                <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-2 rounded">boton 1</button>
                <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-2 rounded">boton 2</button>
                <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-2 rounded">boton 3</button>
                <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-2 rounded">boton 4</button>
                <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-2 rounded">boton 5</button>
            </div>
        </div>
    -->

    <!--
        <div id="inicio" class="grid grid-rows-3 grid-flow-col gap-4 mt-2">

            {{-- esta clase le especifico que tendra 4 filas si introduzco un elemento mas hace un salto al siguiente colum y 
            reapliza un repsonse al contenido con una separacion --}}
            {{-- y las filas funcionan como columnas  distribucion vertical--}}
            <div class="grid grid-cols-1 gap-4">
                <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-2 rounded">boton 1</button>
                {{-- <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-2 rounded">boton 2</button> --}}
                {{-- <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-2 rounded">boton 3</button> --}}
                {{-- <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-2 rounded">boton 4</button> --}}
                {{-- <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-2 rounded">boton 5</button> --}}
            </div>

            <div class="grid grid-cols-1 gap-4">
                <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-2 rounded">boton a</button>
                {{-- <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-2 rounded">boton b</button> --}}
                {{-- <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-2 rounded">boton c</button> --}}
                {{-- <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-2 rounded">boton d</button> --}}
                {{-- <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-2 rounded">boton e</button> --}}
            </div>

            <div class="grid grid-cols-3 gap-4">
                <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-2 rounded">boton 1</button>
                <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-2 rounded">boton 2</button>
                <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-2 rounded">boton 3</button>
                <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-2 rounded">boton 4</button>
                <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-2 rounded">boton 5</button>
            </div>
        </div>
    -->

        <div id="perfil" class="grid grid-flow-row auto-rows-max">
            <h2 class="text-5xl">SKILL</h2>
            <hr>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, architecto. Laborum, commodi, numquam unde sequi dicta natus officiis quis adipisci praesentium perspiciatis culpa ab minus, amet quia maxime nesciunt optio.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id nulla iste error asperiores distinctio. Voluptatum, facilis magnam. Minus at, nisi obcaecati alias ducimus, optio molestias repellendus nemo perferendis quasi quas!
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis amet hic numquam repellat harum dolorem eius. Cumque dignissimos reiciendis facilis perferendis, quidem magnam voluptate porro doloremque cum magni at nemo?
            </p>

            <div class="grid grid-cols-3 gap-4 py-2">
                <div class="max-w-xl mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
                    <div class="xl:flex">
    
                        <div class="md:flex-shrink-0">
                            <img class="h-50 w-full object-contain md:w-48" src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" alt="Man looking at item at a store">
                        </div>
    
                        <div class="p-8">
                            <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Developer laravel</div>
    
                            <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Finding customers for your new business</a>
    
                            <p class="mt-2 text-gray-500">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                        </div>
    
                    </div>
                </div>
    
                <div class="max-w-xl mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
                    <div class="xl:flex">
    
                        <div class="md:flex-shrink-0">
                            <img class="h-50 w-full object-contain md:w-48" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Vue.js_Logo_2.svg/800px-Vue.js_Logo_2.svg.png" alt="Man looking at item at a store">
                        </div>
    
                        <div class="p-8">
                            <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Developer Vue js</div>
    
                            <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Finding customers for your new business</a>
    
                            <p class="mt-2 text-gray-500">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                        </div>
    
                    </div>
                </div>
    
                <div class="max-w-xl mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
                    <div class="xl:flex">
    
                        <div class="md:flex-shrink-0">
                            <img class="h-50 w-full object-contain md:w-48" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Django_logo.svg/1920px-Django_logo.svg.png" alt="Man looking at item at a store">
                        </div>
    
                        <div class="p-8">
                            <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Developer Django</div>
    
                            <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Finding customers for your new business</a>
    
                            <p class="mt-2 text-gray-500">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
        

        <div id="contactos" class="grid grid-flow-row auto-rows-max">
            <h2 class="text-5xl">CONTACT</h2>
            <hr>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, architecto. Laborum, commodi, numquam unde sequi dicta natus officiis quis adipisci praesentium perspiciatis culpa ab minus, amet quia maxime nesciunt optio.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id nulla iste error asperiores distinctio. Voluptatum, facilis magnam. Minus at, nisi obcaecati alias ducimus, optio molestias repellendus nemo perferendis quasi quas!
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis amet hic numquam repellat harum dolorem eius. Cumque dignissimos reiciendis facilis perferendis, quidem magnam voluptate porro doloremque cum magni at nemo?
            </p>
        </div>
        {{-- <div id="contactos" class="">
            <div>

            </div>
            
            <div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur sapiente at sed nam minus tenetur similique atque laborum dolore, ipsa voluptates quisquam quam explicabo, deserunt error, unde ut facilis quia.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus nostrum quia pariatur voluptas aliquid repellat reiciendis dolor quis aliquam sit, ducimus minus delectus quae voluptatum adipisci incidunt architecto sed maxime!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate natus adipisci iste ducimus error porro quis dolor veniam eveniet quibusdam, quos dolorem voluptatem? Reiciendis molestiae itaque consectetur vero ipsum magni!
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur eius ullam obcaecati ex voluptas! Dignissimos libero ex voluptatum fuga, cumque exercitationem tenetur. Inventore expedita ex blanditiis ratione fugit debitis ipsum!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti voluptates, unde quasi reiciendis sapiente animi doloremque dignissimos aspernatur mollitia fuga laborum iusto nulla enim repudiandae ullam neque minima! Error, soluta.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos hic, molestias quibusdam id maiores, esse commodi eius iure veritatis laborum nesciunt corrupti ab harum, perspiciatis dolore quis. Modi, eos nostrum.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic nulla accusantium earum architecto illum sunt aliquid optio alias? Sit beatae ut architecto! Nesciunt alias libero, quibusdam optio id ex eligendi.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae at sunt nostrum atque ut est assumenda tempore velit minima asperiores amet animi hic, ab quos voluptate libero labore facilis cumque.

            </div>
        </div> --}}
    </div>


@endsection

{{-- section script> --}}
@section('script')
    
@endsection