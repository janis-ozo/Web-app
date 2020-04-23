<?php echo $country['name']; ?> -
<a href="/cities/create">
    Create new city
</a>
<ul>
    <?php foreach ($cities as $city): ?>
        <li>
            <?php echo $city['name']; ?>
            <form method="post" action="/countries/<?php echo $country['id'] ?>/cities/<?php echo $city['id'] ?>/delete">
                <button type="submit">X</button>
            </form>
        </li>
    <?php endforeach; ?>
</ul>