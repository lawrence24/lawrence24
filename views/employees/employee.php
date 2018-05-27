<h1>Book Review List</h1>

<table class="table table-striped">
  <tr>
    <th>Book Title</th>
    <th>Author</th>
    <th>Action</th>
  </tr>
  <?php
  foreach ($booksList as $book) {
    $id = $book['id'];
  ?>
  <tr>
    <td><?= $book['book_title']?></td>
    <td><?= $book['author']?></td>
    <td><a href="/yii2/basic/web/index.php?r=employees%2Fviewid?id=<?= $id?>">
      View</a></td>
  </tr>
  <?php
  }
  ?>
</table>
