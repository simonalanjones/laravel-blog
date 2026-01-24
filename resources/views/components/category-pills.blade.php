@props([
    'categories',
    'activeSlug' => null,
    'class' => 'mb-10',
])

<div class="mx-auto flex justify-center gap-2 {{ $class }}">
    @foreach ($categories as $category)
        <a
            href="{{ route('post.category', $category) }}"
            class="uppercase text-base tracking-wider inline-flex rounded-full px-3 py-1
                {{ $activeSlug === $category->slug
                    ? 'bg-slate-800 text-white'
                    : 'bg-black/5 text-black/60 hover:bg-black/10'
                }}"
        >
            {{ $category->title }}
        </a>
    @endforeach
</div>

