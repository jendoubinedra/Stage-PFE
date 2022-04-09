<!Doctype html>
<head></head>
<body>
    <form action="{{route('posts')}}" method="post">
        @csrf
        <input type="text" name="nom">
        <input type="text" name="prix">
        <button type="submit">envoyer</button>
    </form>
    </form>
</body>
</html>
