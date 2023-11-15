@include('admin.inc.sidebar')
<div class="wrapper">
<div class="container">
  <h2 class="text-center">Новые заявки</h2>
  <table class="table table-striped ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Имя</th>
      <th scope="col">Номер телефона</th>
      <th scope="col">e-mail</th>
      <th scope="col">Товары</th>
      <th scope="col">Количество</th>
      <th scope="col">Сумма</th>
      <th scope="col">Тип оплаты</th>
      <th scope="col">Адрес</th>
      <th scope="col">Дата подачи заявки</th>
    </tr>
  </thead>
  <tbody>
    @forelse($orders as $order)
    <tr>
      <td class="align-middle">{{$order ->id}}</td>
      <td class="align-middle">{{$order ->name}}</td>
      <td class="align-middle">sd</td>
      <td class="align-middle">sd</td>
      <td class="align-middle">sd</td>
      <td class="align-middle">sd</td>
      <td class="align-middle">sd</td>
      <td class="align-middle">sd</td>
      <td class="align-middle">{{$order ->address}}</td>
      <td class="align-middle">{{$order ->created_at}}</td>
      <td class="align-middle"><a href=""><button type="submit" class="btn btn-success">Принять</button></a></td>
      <td class="align-middle"><a href=""><button type="submit" class="btn btn-danger">Отклонить</button></a></td>
    </tr>
    @empty
      <p>Тут нет заявок.</p>
    @endforelse

  </tbody>
  </table>
</div>
</div>
