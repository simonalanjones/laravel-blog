@extends('layouts.master')
@section('content')

    <x-category-pills
        :categories="$categories"
    />

    <x-page-heading
        title="Blog"
    />

    <div class="grid grid-cols-2 gap-20 border-0 gap-x-20">
        @foreach ($mainPosts as $post)
            <x-post-card
                :post="$post"
                :featured="false"
                :showCategory="true"
            />
        @endforeach
    </div>

    <div class="max-w-50 mt-12 mx-auto">
        {{ $mainPosts->links() }}
    </div>
@endsection
