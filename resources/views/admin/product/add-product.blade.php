<h1>Add product</h1>
@if (isset($msg))
    {{$msg}}
@endif
<form action="" method="post">
    @csrf
    <p>nhap ten</p>
    <input type="text" name="nameproduct">
    <p>nhap mo ta</p>
    <input type="text" name="description">
    <input type="submit" value="submit">
</form>
