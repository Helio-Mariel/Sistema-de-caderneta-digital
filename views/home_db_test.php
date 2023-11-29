<title><?php echo $title; ?> </title>

<ul> <?php foreach ($aluno as $item) { ?>
        <li> <?php echo $item['username']  ?> </li>
        <li> <?php echo $item['password']  ?> </li>

    <?php } ?>
</ul>