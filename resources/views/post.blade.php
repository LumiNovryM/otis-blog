@extends('layouts.main')

@section('container')

    <article>
        <h1>{{ $post->title }}</h1>

        {!! $post->body !!}
        
    </article>

    <a href="/blog" class="btn btn-primary btn-sm">Back To Posts</a>
@endsection
{{-- 
Post::create([
    "title" => "Judul Ke Tiga",
    "slug" => "judul-ke-tiga",
    "excerpt" => "Lorem ipsum ke tiga",
    "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum in id saepe rerum minus. Ipsa explicabo excepturi harum eaque, odio facilis a tempore, voluptatum praesentium quas itaque sint sequi autem soluta aliquam deserunt quibusdam odit corrupti necessitatibus amet voluptates provident reiciendis voluptatibus laboriosam! Dicta,</p> <p>placeat soluta quos enim libero cupiditate iure ipsum natus nulla ab voluptatem nobis minus molestias odit amet? Maiores inventore nesciunt adipisci hic, esse veritatis? Esse accusamus quo voluptate praesentium aliquid perferendis nesciunt velit eum ipsam.</p> <p>Nobis impedit blanditiis vero, quo aperiam reprehenderit atque fuga ex dolorum quia. Dicta iste quam ipsum accusantium similique at laborum reprehenderit tenetur molestiae architecto sit, atque in officia eos eveniet quaerat unde nam voluptatibus sapiente minima obcaecati! Libero, excepturi non. Voluptatem iure deserunt, labore quidem iusto perspiciatis magni vero eligendi eos, deleniti quos voluptas dolorum doloremque rem suscipit incidunt hic libero veritatis non? Accusamus autem maiores ex harum eligendi. Est, libero.</p>"
]) --}}