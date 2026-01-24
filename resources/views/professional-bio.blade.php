@extends('layouts.master')
@section('content')

    <x-page-heading
        title="Professional Bio"
    />

    <div class="prose-article">
        <p>I’m Simon, a web developer from Kent, in the south-east of England. I’ve been building things on the web for
            a long time, working across companies of vastly different sizes and solving the problems that come with
            each.</p>

        <p>My primary language is <b>PHP (8.x)</b>, which I use daily. Alongside this, I work with <b>Vue, React, and
                Node</b>, focused on maintaining, extending, and refactoring back-end business logic for an e-commerce
            application within a travel company, offering villa holidays in Orlando.</p>

        <p>Like many languages, PHP tends to be used in conjunction with an MVC framework and I've used a good deal of
            these over the years, but at work I'm using
            <a href="https://www.slimframework.com/">Slim</a> with a <a href="https://php-di.org/">PHP DI</a> container
            to keep projects as
            lightweight and flexible as possible.</p>
        <p class="mb-12">For day-to-day development, I use <b>Docker</b> for working in a local environment,
            <b>Postman</b> for designing and validating the many APIs, and <b>Git</b> for managing versioned changes
            within the team, with
            repositories hosted on <b>Bitbucket</b>.</p>
        <p>My Github:https://github.com/simonalanjones</p>
        <div class="mt-12 text-center text-black/40 text-2xl leading-none">❦</div>

    </div>
@endsection
