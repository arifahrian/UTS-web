
<section class="page-section" id="login">
    <div class="container">
        <div class="card w-50 bg-light">
            <div class="card-body text-center ">
                <h2 class="section-heading text-dark">Masuk</h2>
                <p class="section-subheading ">Silahkan masuk bila anda sudah memiliki akun.</p>

                <div class="text-left">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>

                <form action="{{ route("pendaftar_kuy") }}" method="POST">
                    @csrf
                    <div class="col-md-12">
                        <div class="form-group">
                            <input name="email" class="form-control" id="email" type="text" placeholder="Email *" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input name="password" class="form-control" id="pasword" type="password" placeholder="Password *" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary text-uppercase" type="submit">Sign In</button>
                    </div>
                </form>
            </div>
            <p class="text-center">Daftar disni<a href="/pendaftar/baru">Sign Up</a></p>
        </div>
    </div>
</section>