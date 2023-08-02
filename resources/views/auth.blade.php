@include('layouts.header')
  <body>
    <div class="d-flex">
      <div class="framelogo d-flex justify-content-center align-items-center">
        <img src="../img/logo.png" alt="" class="logo" />
      </div>
      <div class="frameForm d-flex justify-content-center align-items-center">
          <div class="formTitle text-center fw-bolder">
            <p class="text-center">LOGIN</p>
            <div class="formContent">
              <form action="" method="post">
                @csrf
                <input type="text" class="rounded-3 formStyle @error('username') is-invalid @enderror" placeholder="Username" name="username" autofocus />
                @error('username') 
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
                <input type="password" placeholder="Password" name="password" class="rounded-3 formStyle @error('password') is-invalid @enderror" autofocus/>
                @error('password') 
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
                <button type="submit" class="rounded-pill buttonStyle">Submit</button>
              </form>
            </div>
          </div>
      </div>
    </div>
  @include('layouts.footer')
