@include('front/header')
<div class="extregistro">
   
    <div class="extregistrouno">
        @include('includes.form-error')
        @include('includes.mensaje')
        <form method="POST" action="{{ route('front.guardauser') }}">
            @csrf


            <div class="form-group letras">
                <label for="email" requerido>E-Mail</label>
                <div>
                    <input type="email" name="email" id="email" class="form-control"
                        value="{{ old('email', $data->email ?? '') }}" required />
                </div>
            </div>

            <div class="form-group letras">
                <label for="name" requerido>Nombre</label>
                <div>
                    <input type="text" name="name" id="name" class="form-control"
                        value="{{ old('name', $data->name ?? '') }}" required />
                </div>
            </div>


            <div class="form-group letras">
                <label for="movil">Movil</label>
                <div>
                    <input type="text" name="movil" id="movil" class="form-control"
                        value="{{ old('movil', $data->movil ?? '') }}" />
                </div>
            </div>

            <div class="form-group letras">
                <label for="direccion">Direccion</label>
                <div>
                    <input type="text" name="direccion" id="direccion" class="form-control"
                        value="{{ old('direccion', $data->direccion ?? '') }}" />
                </div>
            </div>

            <div class="form-group letras">
                <label for="barrio">Barrio - Unidad residencial - Ciudad si esta por fuera</label>
                <div>
                    <input type="text" name="barrio" id="barrio" class="form-control"
                        value="{{ old('barrio', $data->barrio ?? '') }}" />
                </div>
            </div>

            <div class="form-group letras">
                <label for="comentario">Comentario: Apartamento u otra nota que quieras dejar </label>
                <div>
                    <textarea type="text" name="comentario" id="comentario" class="form-control">{{ old('comentario', $data->comentario ?? '') }}</textarea>
                </div>
            </div>


            <div class="form-group letras">
                <label for="password" {{ !isset($data) ? 'requerido' : '' }}>Contraseña</label>
                <div>
                    <input type="password" name="password" id="password" class="form-control" value=""
                        {{ !isset($data) ? 'required' : '' }} minlength="5" />
                </div>
            </div>

            <div class="form-group letras">
                <label for="re_password" {{ !isset($data) ? 'requerido' : '' }}>Repita Contraseña</label>
                <div>
                    <input type="password" name="re_password" id="re_password" class="form-control" value=""
                        {{ !isset($data) ? 'required' : '' }} minlength="5" />
                </div>
            </div>
            <div class="justify-content-center text-center">
                <button class="btn btn-danger text-center" type="submit">Registrate</button>
            </div>
        </form>
    </div>

</div>

@include('front/footer')
