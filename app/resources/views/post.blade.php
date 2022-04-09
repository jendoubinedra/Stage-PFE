
<h1>action<h1>
    @foreach($post->comments as $comment)
<div> {{ $comment->content}}<div>
    @endforeach