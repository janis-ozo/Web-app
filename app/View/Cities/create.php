<form method="post" action="/cities">
    <label for="country">Country</label>
    <select id="country" name="countryId">
        <?php foreach($countries as $country): ?>
            <option value="<?php echo $country['id']; ?>">
                <?php echo $country['name']; ?>
            </option>
        <?php endforeach; ?>
    </select>
    <label for="name">Name</label>
    <input type="text" id="name" name="name">
    <button type="submit">Submit</button>
</form>