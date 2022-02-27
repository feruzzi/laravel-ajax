<div class="container">
    <div class="form-group">
        <input type="text" name="instansi" id="instansi" class="form-control" value="{{$data->instansi}}" placeholder="Instansi">
        <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="{{$data->deskripsi}}" placeholder="deskripsi">
        <button class="btn btn-danger" onclick="update({{$data->id}})">Upadte</button>
    </div>
</div>