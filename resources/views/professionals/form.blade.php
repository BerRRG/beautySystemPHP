    <div class="form-group">
        {{ Form::label('name', 'Nome') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('birth_date', 'Data de nascimento') }}
        <div class="form-group">
        {{Form::date('birth_date', \Carbon\Carbon::now())}}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('address', 'Endereço') }}
        {{ Form::text('address', null, array('class' => 'form-control')) }}
    </div>

     <div class="form-group">
        {{ Form::label('cep', 'CEP') }}
        {{Form::number('cep', null, ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{ Form::label('neighborhood', 'Bairro') }}
        {{ Form::text('neighborhood', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('city', 'Cidade') }}
        {{ Form::text('city', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('uf', 'Estado') }}
        {{ Form::text('uf', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('phone', 'Telefone') }}
        {{Form::number('phone', null, ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{ Form::label('celphone', 'Celular') }}
        {{Form::number('celphone', null, ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{ Form::label('occupation', 'Trabalho') }}
        {{ Form::text('occupation', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('marital_status', 'Estado civil') }}
        {{ Form::text('marital_status', null, array('class' => 'form-control')) }}
    </div>
