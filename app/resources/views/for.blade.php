<html>
    <form method="post" action="{{route('store')}}"> 
        @crsf
        <input type="text" name="nomsalle">
        <input type="text" name="description">
        <button type="submit">envoyer<botton>
    </form>
</html