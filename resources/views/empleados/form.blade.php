<h2 class="text-center mb-5">Ingrese datos</h2>

<div class="form-row my-3">
    <div class="form-group col-2">
        <label>DNI</label>
    </div>
    <div class="form-group col-10">
        <input type="text" name="dni_empleado" id="" class="form-control"
            value="{{isset($empleados->dni_empleado)?$empleados->dni_empleado:''}}"
        >
    </div>   
</div>

<div class="form-row my-3">
    <div class="form-group col-2">
        <label>Nombres</label>
    </div>
    <div class="form-group col-10">
        <input type="text" name="nom_empleado" id="" class="form-control"
            value="{{isset($empleados->nom_empleado)?$empleados->nom_empleado:''}}"
        >
    </div>   
</div>

<div class="form-row my-3">
    <div class="form-group col-2">
        <label>Apellidos</label>
    </div>
    <div class="form-group col-10">
        <input type="text" name="ape_empleado" id="" class="form-control"
            value="{{isset($empleados->ape_empleado)?$empleados->ape_empleado:''}}"
        >
    </div>   
</div>

<div class="form-row my-3">
    <div class="form-group col-2">
        <label>Sexo</label>
    </div>
    <div class="form-group col-4 d-flex" id="radio">
        @if(isset($empleados->fnac_empleado))
            @if($empleados->fnac_empleado == 'M')
                <label class="form-check-label" for="M">Masculino</label>
                <input type="radio" name="sex_empleado" id="M" class="form-control" value="M" checked>
                <label class="form-check-label" for="F">Femenino</label>
                <input type="radio" name="sex_empleado" id="F" class="form-control" value="F">
            @else
                <label class="form-check-label" for="M">Masculino</label>
                <input type="radio" name="sex_empleado" id="M" class="form-control" value="M">
                <label class="form-check-label" for="F">Femenino</label>
                <input type="radio" name="sex_empleado" id="F" class="form-control" value="F" checked>
            @endif  
        @else
                <label class="form-check-label" for="M">Masculino</label>
                <input type="radio" name="sex_empleado" id="M" class="form-control" value="M">
                <label class="form-check-label" for="F">Femenino</label>
                <input type="radio" name="sex_empleado" id="F" class="form-control" value="F">
        @endif
    </div>   
</div>

<div class="form-row my-3">
    <div class="form-group col-2">
        <label>Fecha</label>
    </div>
    <div class="form-group col-10">
        <input type="date" name="fnac_empleado" id="" class="form-control"
            value="{{isset($empleados->fnac_empleado)?$empleados->fnac_empleado:''}}"
        >
    </div>   
</div>

<div class="form-row my-3">
    <div class="form-group col-2">
        <label>Direccion</label>
    </div>
    <div class="form-group col-10">
        <input type="text" name="dir_empleado" id="" class="form-control"
            value="{{isset($empleados->dir_empleado)?$empleados->dir_empleado:''}}"
        >
    </div>   
</div>

<div class="form-row my-3">
    <div class="form-group col-2">
        <label>Distrito</label>
    </div>
    <div class="form-group col-10">
        <input type="text" name="dist_empleado" id="" class="form-control"
            value="{{isset($empleados->dist_empleado)?$empleados->dist_empleado:''}}"
        >
    </div>   
</div>

<div class="form-row my-3">
    <div class="form-group col-2">
        <label>Provincia</label>
    </div>
    <div class="form-group col-10">
        <input type="text" name="prov_empleado" id="" class="form-control"
            value="{{isset($empleados->prov_empleado)?$empleados->prov_empleado:''}}"
        >
    </div>   
</div>

<div class="form-row my-3">
    <div class="form-group col-2">
        <label>Departamento</label>
    </div>
    <div class="form-group col-10">
        <input type="text" name="dep_empleado" id="" class="form-control"
            value="{{isset($empleados->dep_empleado)?$empleados->dep_empleado:''}}"
        >
    </div>   
</div>

<div class="form-row my-3">
    <div class="form-group col-2">
        <label>Estado Civil</label>
    </div>
    <div class="form-group col-10">
        <select class="form-control" name="estciv_empleado">
            <option value="Casado/a">Casado/a</option>
            <option value="Soltero/a">Soltero/a</option>
            <option value="Viudo/a">Viudo/a</option>
            <option value="Divorciado/a">Divorciado/a</option>
        </select>
    </div>   
</div>
<div class="form-row d-flex justify-content-center">
    <input type="submit" class="btn btn-success m-3" value="{{ $modo == 'crear' ? 'Agregar':'Modificar'}}">
    <a href="{{url('empleados')}}" class="btn btn-danger m-3">Cancelar</a>
</div>