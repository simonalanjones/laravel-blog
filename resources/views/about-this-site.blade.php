@extends('layouts.master')
@section('content')

    <x-page-heading
        title="About this site"
    />

    <div class="prose-article">
        <p>This site is a way for me to get back into using modern <b><a href="https://laravel.com/">Laravel</a></b>
            &mdash;
            an MVC
            framework for <a href="https://www.php.net/">PHP</a> &mdash; by building something real and documenting what
            I find interesting along the way. The site itself is very much part of that learning process.</p>


        <p>For the administration side of things, such as creating blog posts and managing categories, I'm using the
            popular <a
                href="https://filamentphp.com/">Filament</a> package.</p>

        <p>Alongside the application work, I’m also designing and building the site’s template theme with <a
                href="https://tailwindcss.com/">Tailwind</a>, hopefully releasing the theme once it’s in a state I’m
            happy with.</p>

        <p>More broadly, this site is about publishing what I'm learning both at work and home, something I’ve
            been deliberately putting off for a <em>very</em> long time.</p>

        <p class="mb-12">Writing things down is a way of reinforcing what you're learning and there’s truth in the idea
            that you don’t really understand something unless you're able to explain it clearly.</p>
        <div class="mt-12 text-center text-black/40 text-2xl leading-none">❦</div>

@endsection
