@extends('layouts.app')

@section('content')
<div class="sec-head">
  <div class="row">
    <div class="col-xl-8 col-sm-8">
      <strong class="admin-subtitle">管理者一覧</strong>
    </div>
    <div class="col-xl-4 col-sm-4 text-center">
      <a href="#" class="btn-add">新規追加</a>
    </div>
  </div>
</div>
<div class="admin-table">
  <table class="table table-bordered bor-tnone">
    <thead>
      <tr>
        <th class="bor-none">ユーザー名</th>
        <th class="bor-none text-center">メールアドレス</th>
        <th class="bor-none">権限</th>
        <th class="bor-none"></th>
        <th class="bor-none"></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="width: 19%;">func管理者</td>
        <td style="width: 34%;">test@marinax.co.jp</td>
        <td style="width: 12%;font-size:14px;">管理者</td>
        <td class="bor-none admin-edit" style="width: 1%;padding-left: 45px;"><a href="#" class="btn-edit">編集</a></td>
        <td class="bor-none admin-delete" style="width: 1%;"><a href="#" class="btn-delete">削除</a></td>
      </tr>
      <tr>
        <td style="width: 19%;">func管理者</td>
        <td style="width: 34%;">test@marinax.co.jp</td>
        <td style="width: 12%;font-size:14px;">管理者</td>
        <td class="bor-none admin-edit" style="width: 1%;padding-left: 45px;"><a href="#" class="btn-edit">編集</a></td>
        <td class="bor-none admin-delete" style="width: 1%;"><a href="#" class="btn-delete">削除</a></td>
      </tr>
    </tbody>
</div>
@endsection
