<div class="form form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Ingrese Nombre de la Etiqueta']) !!}

    @error('name')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>
<div class="form form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class'=>'form-control', 'placeholder'=>'Ingrese Slug de la Etiqueta', 'readonly']) !!}

    @error('slug')
    <span class="text-danger">{{$message}}</span>
@enderror
</div>

<div class="form-group">
    {{-- <label for="">Selecciona Color:</label>
    <select name="color" id="color" class="form-control">
        <option value="">Rojo</option>
        <option value="">Verde</option>
        <option value="">Azul</option>
    </select> --}}
    {!! Form::label('color', 'Color', ) !!}
    {!! Form::select('color', $colors, null, ['class'=>'form-control']) !!}

    @error('color')
    <span class="text-danger">{{$message}}</span>
@enderror
</div>
