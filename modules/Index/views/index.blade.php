@extends('site-layout')

@section('meta-title', 'Devinsto - Apprenez, Créez, Collaborez sans limites.')

@section('meta-description', 'La plateforme polyvalente qui réunit cours, communauté et outils pour les développeurs, designers et créateurs du web.')

@section('bodyEndScripts')
    @vite('resources-site/js/index-app.js')
@endsection

@section('content')
    <section class="py-10 md:py-12">



            <div class="text-center">
                <div class="mb-16 flex justify-center">
                    <img src="{{ Vite::asset('resources-site/images/home-oimg.png') }}" alt="Image">
                </div>


                <index-example-component></index-example-component>
                 <!-- Le deuxième composant : IndexBlogComponent -->
            <index-blog-component ></index-blog-component>
               
            </div>

        </div>

    </section>
@endsection
