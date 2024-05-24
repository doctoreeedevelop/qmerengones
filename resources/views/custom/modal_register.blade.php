{{-- <div id="apiheadplanppal">
<div id="crear">
<div id="funciones">
<div id="formregister">
  <div class="modal fade" id="modal_register" tabindex="-1" aria-labelledby="modal_registerLabel" aria-hidden="true">
    <div class="modal-dialog modalregext">
      <div class="modal-content modalregext">
        <div class="modal-header">
          <h4 class="modal-title text-center" id="modal_registerLabel">Registrate</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body modalregister">
            <form method="POST" action="{{ route('front.guardauser') }}">
                @csrf 
                @include('includes.form-error')
                @include('includes.mensaje')
                <div class="form-group row">
                    <label for="email" class="col-lg-4 col-form-label requerido text-center">E-Mail</label>
                    <div class="col-lg-8">
                        <input type="email" name="email" id="email" class="form-control" value="{{old('email', $data->email ?? '')}}" required/>
                    </div>
                </div>
    
                <div class="form-group row">
                    <label for="name" class="col-lg-4 col-form-label requerido text-center">Nombre</label>
                    <div class="col-lg-8">
                        <input type="text" name="name" id="name" class="form-control" value="{{old('name', $data->name ?? '')}}" required/>
                    </div>
                </div>
               
    
                <div class="form-group row">
                    <label for="movil" class="col-lg-4 col-form-label text-center">Movil</label>
                    <div class="col-lg-8">
                        <input type="text" name="movil" id="movil" class="form-control" value="{{old('movil', $data->movil ?? '')}}" />
                    </div>
                </div>
    
                <div class="form-group row">
                    <label for="direccion" class="col-lg-4 col-form-label text-center">Direccion</label>
                    <div class="col-lg-8">
                        <input type="text" name="direccion" id="direccion" class="form-control" value="{{old('direccion', $data->direccion ?? '')}}" />
                    </div>
                </div>
    
                <div class="form-group row">
                    <label for="barrio" class="col-lg-4 col-form-label requerido">Barrio -Unidad residencial- Ciudad si esta por fuera</label>
                    <div class="col-lg-8">
                        <input type="text" name="barrio" id="barrio" class="form-control" value="{{old('barrio', $data->barrio ?? '')}}" />
                    </div>
                </div>            
            
                <div class="form-group row">
                    <label for="comentario" class="col-lg-4 col-form-label requerido">Comentario: Apartamento o Agregar nota</label>
                    <div class="col-lg-8">
                        <textarea type="text" name="comentario" id="comentario" class="form-control">{{old('comentario', $data->comentario ?? '')}}</textarea>
                    </div>
                </div>
    
               
                <div class="form-group row">
                    <label for="password" class="col-lg-4 col-form-label {{!isset($data) ? 'requerido' : ''}}">Contraseña</label>
                    <div class="col-lg-8">
                        <input type="password" name="password" id="password" class="form-control" value="" {{!isset($data) ? 'required' : ''}} minlength="5"/>
                    </div>
                </div>
    
                <div class="form-group row">
                    <label for="re_password" class="col-lg-4 col-form-label {{!isset($data) ? 'requerido' : ''}}">Repita Contraseña</label>
                    <div class="col-lg-8">
                        <input type="password" name="re_password" id="re_password" class="form-control" value="" {{!isset($data) ? 'required' : ''}} minlength="5"/>
                    </div>
                </div>
    
    
                <button class="btn btn-danger" type="submit"
                    v-on:click.prevent = "validateusreg()"
                >
                    Registrateeeeeeeeeeeeeee
                </button>


                
            </form>
        </div>
       {{--  <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Send message</button>
        </div> --}}
    {{--   </div>
    </div>
  </div>

</div>
</div>
</div> --}}
{{-- </div> --}}