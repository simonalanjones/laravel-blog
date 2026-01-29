@extends('layouts.master')
@section('content')

    <x-page-heading
        title="Professional Bio"
    />

    <div class="prose-article">
        <p>I’m Simon, a web developer from Kent, in the south-east of England. I’ve been building things on the web for
            a long time, working across companies of vastly different sizes but mostly within the insurance industry.</p>

        <p>
            Day to day, I work primarily with <b>PHP (8.x)</b>, alongside <b>Vue, React, and Node</b>,
            maintaining, extending, and refactoring back-end business logic for an e-commerce
            application within a travel company offering villa holidays in Orlando.
        </p>

        <p class="mb-12">I use <b>Docker</b> for developing in a local environment,
            <b>Postman</b> for designing and validating the many APIs, and <b>Git</b> for managing versioned changes
            within the team.</p>
        <ul>
            <li><a href="https://github.com/simonalanjones" target="_blank">My Github projects</a> </li>
            <li><a href="https://www.linkedin.com/in/simon-a-jones/" target="_blank">Connect with me on LinkedIn</a> </li>
        </ul>

        <div class="mt-12 text-center text-black/40 text-2xl leading-none">❦</div>

    </div>
@endsection
