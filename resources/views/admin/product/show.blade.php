<h1>Edit product</h1>
@if (isset($msg))
    {{$msg}}
@endif
<form action="" method="post">
    @csrf
    <input type="text" name="nameproduct" value="{{$product->nameproduct}}">
    <input type="text" name="description" value="{{$product->description}}">
    <input type="submit" value="submit">
</form>
