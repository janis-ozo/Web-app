<a href="/countries/create">Create new country</a>
<ul>
    <?php foreach ($countries as $country): ?>
        <li>
            <a href="/countries/<?php echo $country['id']; ?>">
                <?php echo $country['name']; ?>
                <form method="post" action="/countries/<?php echo $country['id'] ?>/delete">
                    <button type="submit">X</button>
                </form>
            </a>
        </li>
    <?php endforeach; ?>
</ul>