<?php

  include 'header.php';
  $id = $_GET['id'];

  $stmt = $db->prepare('SELECT * from contacts WHERE id = :id LIMIT 1');
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  $contact = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<?php if (array_key_exists('updated', $_GET)) : ?>
<div class="alert alert-success">
  <p><strong>Update successful!</strong>. Your task was updated.</p>
</div>
<?php endif; ?>

<a href="/delete.php?id<? $task['id']; ?>" class="btn btn-danger btn-xs pull-right btn-delete">Delete Contact</a>

<h1>Edit Task</h1>

<form method="POST" action="/update.php">
  <input type="hidden" name="id" id="task_id" value="<?= $contact['id']; ?>" />

  <div class="form-group">
    <label for="contact_first">First Name</label>
    <input class="form-control" type="text" name="first" id="contact_first" value="<?= $contact['first']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_last">Last Name</label>
    <input class="form-control" type="text" name="last" id="contact_last" value="<?= $contact['last']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_title">Title</label>
    <input class="form-control" type="text" name="title" id="contact_title" value="<?= $contact['title']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_address">Address</label>
    <input class="form-control" type="text" name="address" id="contact_address" value="<?= $contact['address']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_city">City</label>
    <input class="form-control" type="text" name="city" id="contact_city" value="<?= $contact['city']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_state">State</label>
    <select name="state" id="contact_state" value="<?= $contact['state']; ?>" class="form-control">
      <option value="AL"<?= ($contact['state'] == 'AL') ? ' selected' : '' ?>>AL</option>
      <option value="AK"<?= ($contact['state'] == 'AK') ? ' selected' : '' ?>>AK</option>
      <option value="AZ"<?= ($contact['state'] == 'AZ') ? ' selected' : '' ?>>AZ</option>
      <option value="AR"<?= ($contact['state'] == 'AR') ? ' selected' : '' ?>>AR</option>
      <option value="CA"<?= ($contact['state'] == 'CA') ? ' selected' : '' ?>>CA</option>
      <option value="CO"<?= ($contact['state'] == 'CO') ? ' selected' : '' ?>>CO</option>
      <option value="CT"<?= ($contact['state'] == 'CT') ? ' selected' : '' ?>>CT</option>
      <option value="DE"<?= ($contact['state'] == 'DE') ? ' selected' : '' ?>>DE</option>
      <option value="FL"<?= ($contact['state'] == 'FL') ? ' selected' : '' ?>>FL</option>
      <option value="GA"<?= ($contact['state'] == 'GA') ? ' selected' : '' ?>>GA</option>
      <option value="HI"<?= ($contact['state'] == 'HI') ? ' selected' : '' ?>>HI</option>
      <option value="ID"<?= ($contact['state'] == 'ID') ? ' selected' : '' ?>>ID</option>
      <option value="IL"<?= ($contact['state'] == 'IL') ? ' selected' : '' ?>>IL</option>
      <option value="IN"<?= ($contact['state'] == 'IN') ? ' selected' : '' ?>>IN</option>
      <option value="IA"<?= ($contact['state'] == 'IA') ? ' selected' : '' ?>>IA</option>
      <option value="KS"<?= ($contact['state'] == 'KS') ? ' selected' : '' ?>>KS</option>
      <option value="KY"<?= ($contact['state'] == 'KY') ? ' selected' : '' ?>>KY</option>
      <option value="LA"<?= ($contact['state'] == 'LA') ? ' selected' : '' ?>>LA</option>
      <option value="ME"<?= ($contact['state'] == 'ME') ? ' selected' : '' ?>>ME</option>
      <option value="MD"<?= ($contact['state'] == 'MD') ? ' selected' : '' ?>>MD</option>
      <option value="MA"<?= ($contact['state'] == 'MA') ? ' selected' : '' ?>>MA</option>
      <option value="MI"<?= ($contact['state'] == 'MI') ? ' selected' : '' ?>>MI</option>
      <option value="MN"<?= ($contact['state'] == 'MN') ? ' selected' : '' ?>>MN</option>
      <option value="MS"<?= ($contact['state'] == 'MS') ? ' selected' : '' ?>>MS</option>
      <option value="MO"<?= ($contact['state'] == 'MO') ? ' selected' : '' ?>>MO</option>
      <option value="MT"<?= ($contact['state'] == 'MT') ? ' selected' : '' ?>>MT</option>
      <option value="NE"<?= ($contact['state'] == 'NE') ? ' selected' : '' ?>>NE</option>
      <option value="NV"<?= ($contact['state'] == 'NV') ? ' selected' : '' ?>>NV</option>
      <option value="NH"<?= ($contact['state'] == 'NH') ? ' selected' : '' ?>>NH</option>
      <option value="NJ"<?= ($contact['state'] == 'NJ') ? ' selected' : '' ?>>NJ</option>
      <option value="NM"<?= ($contact['state'] == 'NM') ? ' selected' : '' ?>>NM</option>
      <option value="NY"<?= ($contact['state'] == 'NY') ? ' selected' : '' ?>>NY</option>
      <option value="NC"<?= ($contact['state'] == 'NC') ? ' selected' : '' ?>>NC</option>
      <option value="ND"<?= ($contact['state'] == 'ND') ? ' selected' : '' ?>>ND</option>
      <option value="OH"<?= ($contact['state'] == 'OH') ? ' selected' : '' ?>>OH</option>
      <option value="OK"<?= ($contact['state'] == 'OK') ? ' selected' : '' ?>>OK</option>
      <option value="OR"<?= ($contact['state'] == 'OR') ? ' selected' : '' ?>>OR</option>
      <option value="PA"<?= ($contact['state'] == 'PA') ? ' selected' : '' ?>>PA</option>
      <option value="RI"<?= ($contact['state'] == 'RI') ? ' selected' : '' ?>>RI</option>
      <option value="SC"<?= ($contact['state'] == 'SC') ? ' selected' : '' ?>>SC</option>
      <option value="SD"<?= ($contact['state'] == 'SD') ? ' selected' : '' ?>>SD</option>
      <option value="TN"<?= ($contact['state'] == 'TN') ? ' selected' : '' ?>>TN</option>
      <option value="TX"<?= ($contact['state'] == 'TX') ? ' selected' : '' ?>>TX</option>
      <option value="UT"<?= ($contact['state'] == 'UT') ? ' selected' : '' ?>>UT</option>
      <option value="VT"<?= ($contact['state'] == 'VT') ? ' selected' : '' ?>>VT</option>
      <option value="VA"<?= ($contact['state'] == 'VA') ? ' selected' : '' ?>>VA</option>
      <option value="WA"<?= ($contact['state'] == 'WA') ? ' selected' : '' ?>>WA</option>
      <option value="WV"<?= ($contact['state'] == 'WV') ? ' selected' : '' ?>>WV</option>
      <option value="WI"<?= ($contact['state'] == 'WI') ? ' selected' : '' ?>>WI</option>
      <option value="WY"<?= ($contact['state'] == 'WY') ? ' selected' : '' ?>>WY</option>
    </select>
  </div>

  <div class="form-group">
    <label for="contact_zip">Zip Code</label>
    <input class="form-control" type="text" name="zip" id="contact_zip" value="<?= $contact['zip']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_phone">Phone Number</label>
    <input class="form-control" type="text" name="phone" id="contact_phone" value="<?= $contact['phone']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_notes">Notes</label>
    <textarea class="form-control" name="notes" id="contact_notes"><?= $contact['notes']; ?></textarea>
  </div>


  <button class="btn btn-primary">Save Task</button>
</form>

<?php include 'footer.php'; ?>
