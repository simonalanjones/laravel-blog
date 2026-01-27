@props([
    'post',
    'featured' => false,
    'showDate' => true,
    'showCategory' => false
])

{{-- The first post is given a full column width, others are 2 col layout --}}
@php
    $cardClass = $featured
        ? 'col-span-2'
        : 'col-span-2 md:col-span-1';

    $titleClass = $featured
        ? 'text-2xl md:text-3xl leading-tight'
        : 'text-xl md:text-4xl leading-snug';

    $summaryClass = $featured
    ? 'text-lg leading-8 text-black/70'
    : 'text-lg leading-8 text-black/65';

@endphp

<article class="col-span-2 group flex flex-col w-full {{ $cardClass }}">
    {{-- Metadata (date and category link) --}}
    @if($showDate || $showCategory)
        <div class="flex items-center gap-x-6 text-sm text-black/50">
            @if($showDate)
                <time datetime="{{ $post->created_at->format('Y-m-d') }}">
                    {{ $post->created_at->format('j M Y') }}
                </time>
            @endif

            @if($showCategory)
                <a
                    href="{{ route('post.category', $post->category) }}"
                    {{--                    class="rounded-full bg-black/5 px-3 py-1 text-black/60 hover:bg-black/10"--}}
                >
                    {{ $post->category->title }}
                </a>
            @endif
        </div>
    @endif

    {{-- Card Title --}}
    <h3 class="mt-2 font-semibold tracking-normal text-balance {{ $titleClass }} text-black/80">
        <a
            href="{{ route('post.show', $post) }}"
            class="hover:underline decoration-black/15 underline-offset-4"
        >
            {{ $post->title }}
        </a>
    </h3>

    {{-- Post body preview text --}}
    @if(!empty($post->preview_text))
        <p class="mt-3 text-base text-black/70 leading-7 line-clamp-3">
            {{ $post->preview_text }}
        </p>

    @endif
</article>
