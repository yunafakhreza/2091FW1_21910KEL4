<div class="form-group">
    <label class="col-sm-2 control-label">barang_id</label>
        <div class="col-sm-10">
            {!! Form::select('barang_id',$jual->lists('nama','id'),null,['class'=>'form-control','placeholder'=>"barang_id"]) !!}
        </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label">konsumen_id</label>
        <div class="col-sm-10">
            {!! Form::select('konsumen_id',$jual->lists('nama','id'),null,['class'=>'form-control','placeholder'=>"konsumen_id"]) !!}
        </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label">tgl_beli</label>
        <div class="col-sm-10">
            {!! Form::select('tgl_beli',$jual->lists('nama','id'),null,['class'=>'form-control','placeholder'=>"tgl_beli"]) !!}
        </div>
</div>
