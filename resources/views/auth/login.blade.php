@extends('layouts.login')
<div class="container">
  <div class="login-page">
      @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('message') }}</p>
      @endif
      <div class="form">
        <div class="func text-left">
          <img src="{{ asset('img/logo.png') }}" alt="">
        </div>
        <div class="main-login">
          <div class="cms">
            CMS
          </div>
          <form class="login-form" method="POST" action="{{ route('admin.register.doLogin') }}">
            {{ csrf_field() }}
            <div class="form-group text-left{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email">メールアドレス</label>
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
              @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif
            </div>
            <div class="form-group text-left{{ $errors->has('password') ? ' has-error' : '' }}" style="margin-bottom: 40px;">
              <label for="password">パスワード</label>
              <input id="password" type="password" class="form-control" name="password" required>
              @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
              @endif
            </div>
            <button type="submit">管理者ログイン</button>
          </form>
        </div>
      </div>
  </div>
</div>
