<h1>product list</h1>

<style>
    table, th, td {
      border:1px solid black;
    }
    </style>
    <table style="width:100%">
      <tr>
        <th>Id</th>
        <th>Name product</th>
        <th>Description</th>
        <th>Created at</th>
        <th></th>
      </tr>
      @foreach ($product as $products)
      <tr>
        <td>{{$products->id}}
        <td>{{$products->nameproduct}}</td>
        <td>{{$products->description}}</td>
        <td>{{$products->created_at}}</td>
        <td><a href="{{route('show-product', ['id'=>$products->id])}}">Edit</a></td>
        <td><a onclick="return confirm('Ban co chac muon xoa?')" href="{{route('delete-product', ['id'=>$products->id])}}">Delete</a></td>
      </tr>
      @endforeach
    </table>
