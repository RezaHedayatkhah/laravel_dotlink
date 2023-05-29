<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Vazirmatn&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}" />
    <title>ورود یا ثبت نام دات لینک</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="{{ route('login') }}" method="POST" class="sign-in-form">
              @csrf
              @if(Session::has('status'))
                  <div class="alert" role="alert">
                      {{ Session::get('status') }}
                  </div>
              @endif
            <h2 class="title">ورود</h2>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="ایمیل" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="رمز عبور" />
            </div>
            <input type="submit" value="ورود" class="btn solid" />
            <p class="social-text">یا از پلتفرم های زیر استفاده کنید</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="{{ route('register') }}" method="POST" class="sign-up-form">
              @csrf
            <h2 class="title">ثبت نام</h2>
              @error('email')
              <span class="alert">{{ $message }}</span>
              @enderror
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="ایمیل" />
            </div>
              @error('password')
              <span class="alert">{{ $message }}</span>
              @enderror
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="رمز عبور" />
            </div>
              <div class="input-field">
                  <i class="fas fa-lock"></i>
                  <input type="password" name="password_confirmation" placeholder="تکرار رمز عبور" />
              </div>
            <input type="submit" class="btn" value="ثبت نام" />
            <p class="social-text">یا از پلتفرم های زیر استفاده کنید</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>حساب کاربری ندارید؟</h3>
            <p>
              !روی دکمه زیر کلیک کنید و همین حالا حساب دات لینک خود را بسازید
            </p>
            <button class="btn transparent" id="sign-up-btn">
              ثبت نام
            </button>
          </div>
          <img src="{{ asset('images/log.svg') }}" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>قبلا ثبت نام کردید؟</h3>
            <p>
                !روی دکمه زیر کلیک کنید و همین حالا وارد حساب دات لینک خود شوید
            </p>
            <button class="btn transparent" id="sign-in-btn">
              ورود
            </button>
          </div>
          <img src="{{ asset('images/register.svg') }}" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="{{ asset('js/auth.js') }}"></script>
  </body>
</html>
