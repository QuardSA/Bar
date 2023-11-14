@include('admin.inc.sidebar')
<div class="wrapper">
<div class="container">
  <form action="../functions/addservice.php" method="POST" enctype="multipart/form-data" class="addservice">
    <h2 class="text-center">Добавить товар</h2>
    <div class="mb-3"><input type="text" name="title" class="form-control" placeholder="Название товара" required></div>
    <div class="mb-3">
      <label for="formFile" class="form-label">Фотография товара</label>
      <input class="form-control" name="photo" type="file" id="formFile" required>
    </div>
    <div class="mb-3"><textarea class="form-control" name="description" rows="8" placeholder="Описание" required></textarea></div>
    <div class="mb-3"><input type="text" name="cost" class="form-control" placeholder="Цена" required></div>
    <button type="submit" class="btn btn-primary">Добавить товар</button>
  </form>
  <hr>
  <h2 class="text-center">Товар</h2>
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Название</th>
      <th scope="col">Фото</th>
      <th scope="col">Описание</th>
      <th scope="col">Цена</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="align-middle"></td>
      <td class="align-middle"></td>
      <td class="align-middle"></td>
      <td class="align-middle"></td>
      <td class="align-middle"></td>
      <td class="align-middle"><a href=""><button type="submit" class="btn btn-primary">Редактировать</button></a></td>
      <td class="align-middle"><a href=""><button type="submit" class="btn btn-danger">Удалить</button></a></td>
    </tr>
  </tbody>
  </table>
  <hr>
  <form action="../functions/editservice.php" method="POST" enctype="multipart/form-data" class="addservice">
    <h2 class="text-center">Редактировать товар</h2>
    <div class="input-addproduct"><input type="hidden" value="" name="id" required></div>
    <div class="mb-3"><input type="title" class="form-control" name="title" value="" placeholder="Название товара" required></div>
    <div class="mb-3">
      <label for="formFile" class="form-label">Фотография товара</label>
      <input class="form-control" name="photo" value="" type="file" id="formFile" required>
    </div>
    <div class="mb-3"><textarea class="form-control" name="description" value="" rows="8" placeholder="Описание" required></textarea></div>
    <div class="mb-3"><input type="text" class="form-control" name="cost" value="" placeholder="Цена" required></div>
    <button type="submit" class="btn btn-primary">Редактировать</button>
  </form>
  <hr>
</div>
</div>
