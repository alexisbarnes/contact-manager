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


<h1>Contacts</h1>
<h4 class="total-contacts">Total: <?= count($contacts); ?></h4>
  <!-- Table -->
  <div class="table-responsive">
    <table class="table table-hover table-bordered">
      <thead class="thead-inverse">
        <th class="table-header">First Name</th>
        <th class="table-header">Last Name</th>
        <th class="table-header visible-sm visible-md visible-lg visible-lg">Title</th>
        <th class="table-header visible-md visible-lg visible-lg">Address</th>
        <th class="table-header visible-md visible-lg visible-lg">City</th>
        <th class="table-header visible-md visible-lg visible-lg">State</th>
        <th class="table-header visible-md visible-lg visible-lg">Zip Code</th>
        <th class="table-header">Phone Number</th>
        <th class="table-header visible-md visible-lg visible-lg">Notes</th>
        <th class="table-header">Actions</th>
      </thead>
      <tbody>
        <?php foreach($contacts as $contact) : ?>
        <tr>
          <td><?= $contact['first']; ?></td>
          <td><?= $contact['last']; ?></td>
          <td class="visible-sm visible-md visible-lg visible-lg"><?= $contact['title']; ?></td>
          <td class="visible-md visible-lg visible-lg"><?= $contact['address']; ?></td>
          <td class="visible-md visible-lg visible-lg"><?= $contact['city']; ?></td>
          <td class="visible-md visible-lg visible-lg"><?= $contact['state']; ?></td>
          <td class="visible-md visible-lg visible-lg"><?= $contact['zip']; ?></td>
          <td><?= $contact['phone']; ?></td>
          <td class="visible-md visible-lg visible-lg"><?= $contact['notes']; ?></td>
          <td>
            <a href="/edit.php?id=<?= $contact['id']; ?>"><img src="/imgs/pencil.png" alt="edit" class="edit-icon" /></a>
            <a href="/delete.php?id=<?= $contact['id']; ?>"><img src="/imgs/x.png" alt="delete" class="delete-icon" /></a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

<!--Add New button for mobile-->
<!--Source: https://codepen.io/simoberny/pen/pJZJQY-->
  <div class="visible-xs visible-sm">
    <div id="floating-button">
      <a href="/new.php"><p class="plus">+</p></a>
    </div>
  </div>




<?php include 'footer.php'; ?>
