<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">instansi</th>
        <th scope="col">desc</th>          
        <th>action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $item)
      <tr>           
        <td>{{$item->id}}</td>
        <td>{{$item->instansi}}</td>          
        <td>{{$item->deskripsi}}</td>
        <td>
          <button class="btn btn-danger" onclick="destroy({{$item->id}})">Delete</button>
          <button class="btn btn-info" onclick="show({{$item->id}})">Edit</button>
        </td>          
      </tr>
      @endforeach
    </tbody>
  </table>