@extends('template.base')
{{-- https://picsum.photos/200/300 --}}

@extends('template.header')

{{-- cuerpo del contenido --}}
@section('body')
    <div>

        <div id="inicio" class="grid grid-cols-3 gap-4">

        </div>

        <div id="perfil" class="grid grid-cols-3 gap-4">
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
        
        <div id="contactos" class="">
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
        </div>
    </div>


@endsection

{{-- section script> --}}
@section('script')
    
@endsection