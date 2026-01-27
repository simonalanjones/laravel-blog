@extends('layouts.master')
@section('content')

    <x-category-pills
        :categories="$categories"
        :active-slug="$activeCategory->slug"
    />

    <x-page-heading
        :title="$activeCategory->title"
    />

    @if ($posts->isNotEmpty())
        <div class="grid grid-cols-2 gap-16 border-0 gap-x-20">
            @foreach ($posts as $post)
                <x-post-card
                    :post="$post"
                    :featured="false"
                    :showCategory="false"
                />
            @endforeach
        </div>
    @else
        <p>No posts found</p>
    @endif

@endsection
