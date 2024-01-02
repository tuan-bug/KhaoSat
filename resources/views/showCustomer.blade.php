<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Table</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
  <h2 class="text-center mt-5 mb-4">DANH SÁCH NGƯỜI DÙNG</h2>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tên</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>Tỉnh/Thành Phố</th>
          <th>Thao tác</th>
      </tr>
    </thead>
    <tbody>

      @foreach($customers as $item)
          <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->name}}</td>
          <td>{{$item->phone}}</td>
          <td>{{$item->email}}</td>
          <td>{{$item->city}}</td>
          <td><a href="{{ route('show_form', $item->id) }}">Xem</a></td>
          </tr>
      @endforeach
      <tr>
      </tr>
      <!-- Các dòng khác -->
    </tbody>
  </table>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
