@extends('layouts.master')
@section('content')

    <div class="flex items-center gap-x-4  pb-4">
        <time datetime="{{ $post->created_at->format('Y-m-d') }}"
              class="text-gray-500">{{ $post->created_at->format('j M Y') }}</time>
        <a href="{{ Route('post.category', $post->category->slug) }}"
           class="uppercase text-base tracking-wider inline-flex rounded-full bg-black/5 px-3 py-1 text-black/60 hover:bg-black/10">
            {{ $post->category->title }}</a>
    </div>

    <h1 class="font-medium tracking-tight
           text-2xl md:text-4xl xl:text-6xl
           border-b border-black/5 pb-5 mb-8
           max-w-prose text-balance leading-16">
        {{ $post->title }}
    </h1>


    <article class="prose-article">
        <x-markdown>
            {!! $post->body !!}
        </x-markdown>
        <div class="my-24 text-center text-black/40 text-2xl leading-none">❦</div>

    </article>

@endsection
