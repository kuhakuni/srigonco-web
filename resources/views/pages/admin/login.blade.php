@extends('layouts.admin.template')

@section('main')
<main class="h-100">
    <div class="container">
      <section class="section d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center">
                <div class="logo d-flex align-items-center w-auto">
                  <p>Designed by KKN FILKOM UB 2022</p>
                </div>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2 text-center">
                    @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ Session::get('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if(Session::has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ Session::get('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <img src="{{ asset('img/Logo_kab_malang.png') }}" alt="Missing Logo" class="img-fluid w-25">
                    <h5 class="card-title text-center pb-0 fs-4">Admin Srigonco</h5>
                  </div>

                  <form class="row g-3 needs-validation" method="POST" action="/login" novalidate>
                    @csrf
                    <div class="col-12">
                        <input type="text" name="username" placeholder="Username" class="form-control @error('username') is-invalid @enderror" id="yourUsername" value="{{ old('username') }}" autofocus required>
                        @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                      <input type="password" name="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" id="yourPassword" required>
                      @error('password')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Ingat Saya</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Masuk</button>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
               <i class="bi bi-arrow-left"></i><a href="/">  Kembali ke beranda</a>
              </div>

            </div>
          </div>
        </div>
        {{-- <p class="copyright">@Copyright 2022 Desa Srigonco</p> --}}
      </section>
    </div>
  </main>
 
@endsection