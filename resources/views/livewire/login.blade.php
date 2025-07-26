<div>
   
    <div class="d-flex justify-content-center">

        <div class="login-container">
            <h2>Login no DevBook</h2>
          <form wire:submit="login">
                @csrf
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" name="email" wire:model="email" placeholder="name@example.com">
                    <label for="email">E-mail</label>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control" id="password" name="password" wire:model="password" placeholder="Password" >
                    <label for="password">Senha</label>
                </div>


                <div class="d-flex justify-content-center mt-3">
                    <button class="btn btn-primary btn-lg w-75" type="submit">Acessar</button>
                </div>

                <div class="d-flex justify-content-center mt-2">

                    {{-- Erros de validação --}}
                    @if ($errors->any())
                    <div class="alert alert-dark" style="color: black">
                        <i data-feather="alert-triangle" style="color: rgb(0, 0, 0)"></i>
                        {{ $errors->first() }}

                    </div>
                    @endif

                </div>


                <div class="d-flex justify-content-center">
                    <a href="/recuperar-senha" class="forgot-password">Esqueci minha senha</a>
                </div>

                <div class="d-flex justify-content-center">
                    <a href="{{route('cadastrar')}}" class="forgot-password">Quero me cadastrar</a>
                </div>

            </form>


        </div>
    </div>

    {{-- <div class="col-4 d-flex justify-content-center">

        <div class="cadastros-container">
            <div class="chat-bubble-container">
                <div class="chat-bubble">
                    Ainda não se cadastrou?
                </div>
                <button type="button" class="register-button">Cadastrar</button>
            </div>
        </div>
    </div> --}}

</div>
</div>
