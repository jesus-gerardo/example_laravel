@extends('template.public')
{{-- https://picsum.photos/200/300 --}}

{{-- cuerpo del contenido --}}
@section('body')

    <div class="flex flex-col space-y-4">
        <section id="inicio" class="space-y-2">
            <h2 class="text-center">Inicio</h2>
            <p class="text-justify">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione ad consectetur modi labore omnis, sed ab deserunt assumenda saepe maxime aliquam tempore voluptatem voluptate iste, ea expedita nesciunt molestiae consequuntur.
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet hic, iste illo eos modi voluptate. Fugit est mollitia nostrum temporibus eum. Accusamus cupiditate molestias id at perspiciatis vero reiciendis voluptatem!
            </p>
            <img class="max-w-full h-auto" src="https://picsum.photos/400/300" alt="">
        </section>

        <section id="informacion" class="space-y-2">
            <h3 class="w-full text-center text-2xl">Imagenes</h3>
            <div class="w-full block justify-center">
                <div class="w-full p2">
                    <img class="img_list" src="https://picsum.photos/400/300" alt="">
                    <p class="text-center p-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ad eveniet illum? Voluptate corporis nesciunt suscipit error iusto asperiores quia, illum laboriosam distinctio pariatur illo officia, repellendus eos, inventore similique?</p>
                </div>

                <div class="w-full p2">
                    <img class="img_list" src="https://picsum.photos/400/300" alt="">
                    <p class="text-center p-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ad eveniet illum? Voluptate corporis nesciunt suscipit error iusto asperiores quia, illum laboriosam distinctio pariatur illo officia, repellendus eos, inventore similique?</p>
                </div>

                <div class="w-full p2">
                    <p class="text-center p-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ad eveniet illum? Voluptate corporis nesciunt suscipit error iusto asperiores quia, illum laboriosam distinctio pariatur illo officia, repellendus eos, inventore similique?</p>
                </div>
            </div>
        </section>

        <section id="contacto" class="space-y-2">
            <h4 class="text-center p-8 text-2xl">Seccion de contactos</h4>
        </section>
    </div>

@endsection

{{-- section script> --}}
@section('script')
    
@endsection