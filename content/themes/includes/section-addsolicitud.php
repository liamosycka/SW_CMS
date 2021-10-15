<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Destino</h3>
  </div>
  <div class="panel-body">
    <div class="col-md-8">
      <label>Nombre del destinatario</label>
      <input type="text" class="form-control" />
    </div>
    <div class="col-md-4 form-inline">
      <label style="margin-top:32px">Yo soy el destinatario</label>
      <input type="checkbox" class="checkbox-lg">
    </div>
    <div class="col-md-6 form-group" style="marging-top:20px">
      <label>Seleccione la localidad</label>
      <select class="form-control" name="data[Solicitud][origen]">
        <option>Allen</option>
        <option>Cipolletti</option>
        <option>Neuquen</option>
        <option>Plotier</option>
      </select>
    </div>
    <div class="col-md-6" style="marging-top:20px">
      <label>Dirección</label>
      <input type="text" class="form-control" />
    </div>
  </div>
</div>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Origen</h3>
  </div>
  <div class="panel-body">
    <div class="col-md-8">
      <label>Nombre del remitente</label>
      <input type="text" class="form-control" />
    </div>
    <div class="col-md-4 form-inline">
      <label style="margin-top:32px">Yo soy el remitente</label>
      <input type="checkbox" class="checkbox-lg">
    </div>
    <div class="col-md-6 form-group" style="margin-top:20px">
      <label>Seleccione la localidad</label>
      <select class="form-control" name="data[Solicitud][origen]">
        <option>Allen</option>
        <option>Cipolletti</option>
        <option>Neuquen</option>
        <option>Plotier</option>
      </select>
    </div>
    <div class="col-md-6" style="margin-top:20px">
      <label>Dirección</label>
      <input type="text" class="form-control" />
    </div>
  </div>
</div>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Paquetes</h3>
  </div>
  <div class="panel-body">
    <div class="col-md-9">
      <label>Tipo de bulto</label>
      <select class="form-control">
        <option>Pequeño: de 0kg a 5kg</option>
        <option>Mediano: de 5kg a 15kg</option>
        <option>Grande: de 15kg a 45kg</option>
      </select>
    </div>
    <div class="col-md-3">
      <label>&nbsp; </label>
      <button class="btn btn-info btn-block"><span class="glyphicon glyphicon-plus"></span> Agregar bulto</button>
    </div>
    <div class="col-md-12" style="margin-top:20px">
      <table class="table table-bordered table-condensed">
        <thead>
          <tr>
            <th>Bulto</th>
            <th>Tamaño</th>
            <th>&nbsp;</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Bulto 1</td>
            <td>Pequeño</td>
            <td><a><span class="glyphicon glyphicon-remove" style="cursor: pointer"></span></a></td>
          </tr>
          <tr>
            <td>Bulto 2</td>
            <td>Grande</td>
            <td><a><span class="glyphicon glyphicon-remove" style="cursor: pointer"></span></a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="col-md-10 col-md-offset-1" style="margin-top:15px">
  <div class="col-md-12">
    <button class="btn btn-success" type="submit" value="submit">Realizar solicitud</button>
  </div>
</div>