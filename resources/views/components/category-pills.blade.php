@props([
    'categories',
    'activeSlug' => null,
    'class' => 'mb-10',
])

<div class="mx-auto flex justify-center gap-2 {{ $class }}">
    @foreach ($categories as $category)
        <x-pill
            :href="route('post.category', $category)"
            :active="$activeSlug === $category->slug"
        >
            {{ $category->title }}
        </x-pill>
    @endforeach
</div>
