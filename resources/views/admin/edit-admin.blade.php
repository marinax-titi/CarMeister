@extends('layouts.app')

@section('content')

<div class="sec-head">
  <strong class="admin-subtitle">管理者新規登録</strong>
</div>
<div class="admin-table">
  <form class="" action="{{ route('admin.register.update', $id) }}" method="post">
    {{ csrf_field() }}
    <table class="table table-bordered bor-tnone">
        <tbody>
          <tr>
            <th class="bg-grn">ユーザー名 <span class="text-danger">*</span></td>
            <td><input class="form-control bor-none" type="text" name="name" value="{{ $users->name }}" /></td>
          </tr>
          <tr>
            <th class="bg-grn">メールアドレス <span class="text-danger">*</span></td>
            <td><input class="form-control bor-none" type="text" name="email" value="{{ $users->email }}" /></td>
          </tr>
          <tr>
            <th class="bg-grn">パスワード <span class="text-danger">*</span></td>
            <td><input class="form-control bor-none" type="password" name="password" value="{{ $users->password }}" /></td>
          </tr>
          <tr>
            <th class="bg-grn">権限 <span class="text-danger">*</span></td>
            <td>
              <select class="bor-none" name="user_type">
                <option value="{{ $users->user_type }}">{{ $users->user_type == 0 ? "管理者" : '' }}</option>
              </select>
            </td>
          </tr>
        </tbody>
    </table>
    <div class="admin-register-btn">
      <button class="btn-register" type="submit" name="submit_admin_register">登録する</button>
      <a class="btn-return" href="#">戻る</a>
    </div>
  </form>
</div>
@endsection
