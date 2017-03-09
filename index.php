<?php

  include 'header.php';
  $sort = array_key_exists('sort', $_GET) ? $_GET['sort'] : null;

  if ($sort !== null) {
    $contacts = $db->query('SELECT * FROM contacts ORDER BY last' . $sort)->fetchAll(PDO::FETCH_ASSOC);
  } else {
    $contacts = $db->query('SELECT * FROM contacts')->fetchALL(PDO::FETCH_ASSOC);
  }
  $contacts = $db->query('SELECT * FROM contacts')->fetchAll(PDO::FETCH_ASSOC);

?>

<!--CREATED MESSAGE-->
<?php if (array_key_exists('created', $_GET)) : ?>
<div class="alert alert-info">
  <p><strong>Contact created!</strong> Your contact was successfully created.</p>
</div>
<?php endif; ?>

<!--DELETED MESSAGE-->
<?php if (array_key_exists('deleted', $_GET)) : ?>
<div class="alert alert-danger">
  <p><strong>Contact Deleted!</strong> The contact was removed.</p>
</div>
<?php endif; ?>


<h1>Contacts <span class="text-muted">(<?= count($contacts); ?>)</span></h1>
  <!-- Table -->
  <table class="table table-hover table-bordered">
    <thead class="thead-inverse">
      <th>First Name</th>
      <th>Last Name</th>
      <th>Title</th>
      <th>Address</th>
      <th>City</th>
      <th>State</th>
      <th>Zip Code</th>
      <th>Phone Number</th>
      <th>Notes</th>
      <th>Actions</th>
    </thead>
    <tbody>
      <?php foreach($contacts as $contact) : ?>
      <tr>
        <td><?= $contact['first']; ?></td>
        <td><?= $contact['last']; ?></td>
        <td><?= $contact['title']; ?></td>
        <td><?= $contact['address']; ?></td>
        <td><?= $contact['city']; ?></td>
        <td><?= $contact['state']; ?></td>
        <td><?= $contact['zip']; ?></td>
        <td><?= $contact['phone']; ?></td>
        <td><?= $contact['notes']; ?></td>
        <td>
          <a href="/edit.php?id=<?= $contact['id']; ?>"><img src="/imgs/pencil.png" alt="edit" class="edit-icon" /></a>
          <a href="/delete.php?id=<?= $contact['id']; ?>"><img src="/imgs/x.png" alt="delete" class="delete-icon" /></a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>




<?php include 'footer.php'; ?>
