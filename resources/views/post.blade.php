<x-layout>

    <article>
        <h2>
            {{ $post->title }}
        </h2>

        <p>
            <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>

        <div>
            <p>
                {!! $post->body !!}
            </p>
        </div>
    </article>

    <a href="/">Go Back</a>

</x-layout>
