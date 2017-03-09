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

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 main-page-h1">
  <h1><?= count($contacts); ?> Contacts</h1>
</div>

<?php foreach($contacts as $contact) : ?>
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">
    <div class="contact-name">
      <h5><?= $contact['first']; ?> <?=$contact['last']; ?>, <span class="text-muted"><?= $contact['title']; ?></span>

      <span class="icons"><a href="/edit.php?id=<?= $contact['id']; ?>"><img src="/imgs/pencil.png" alt="edit" class="edit-icon" /></a>
      <a href="/delete.php?id=<?= $contact['id']; ?>"><img src="/imgs/x.png" alt="delete" class="delete-icon" /></a></span></h5>

    </div>




  </div>

  <!-- List group -->
  <ul class="list-group">
    <li class="list-group-item">

        <span>
          <span class="panel-txt">Address:</span>
          <span class="contact-info"><?= $contact['address']; ?></span>
        </span><br>

        <span>
          <span class="panel-txt">City:</span>
          <span class="contact-info"><?= $contact['city']; ?></span>
        </span><br>


        <span>
          <span class="panel-txt">State:</span>
          <span class="contact-info"><?= $contact['state']; ?></span>
        </span><br>

        <span>
          <span class="panel-txt">Zip Code:</span>
          <span class="contact-info"><?= $contact['zip']; ?></span>
        </span><br>

        <span>
          <span class="panel-txt">Notes:</span>
          <span class="contact-info"><?= $contact['notes']; ?></span>
        </span>


    </li>
  </ul>
</div>
</div>
<?php endforeach; ?>


<!-- <h1>Contacts</h1>
<h4 class="total-contacts"></h4>
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
        <tr>
          <td></td>
          <td></td>
          <td class="visible-sm visible-md visible-lg visible-lg"></td>
          <td class="visible-md visible-lg visible-lg"></td>
          <td class="visible-md visible-lg visible-lg"></td>
          <td class="visible-md visible-lg visible-lg"></td>
          <td class="visible-md visible-lg visible-lg"></td>
          <td></td>
          <td class="visible-md visible-lg visible-lg"></td>
          <td>
            <a href="/edit.php?id="><img src="/imgs/pencil.png" alt="edit" class="edit-icon" /></a>
            <a href="/delete.php?id="><img src="/imgs/x.png" alt="delete" class="delete-icon" /></a>
          </td>
        </tr>
      </tbody>
    </table>
  </div> -->

<!--Add New button for mobile-->
<!--Source: https://codepen.io/simoberny/pen/pJZJQY-->
  <div class="visible-xs visible-sm">
    <div id="floating-button">
      <a href="/new.php"><p class="plus">+</p></a>
    </div>
  </div>




<?php include 'footer.php'; ?>
