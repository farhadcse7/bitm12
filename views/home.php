<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Hello world</h1>
<?php foreach ($blogs as $index=> $blog){
    echo $index."=". $blog;
    echo "<br>";
}  ?>

<table border="2px solid black" width="1200px">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Description</th>
        <th>Image</th>
    </tr>


<!--    --><?php //foreach ($blogs as $blog) {
//        if (is_array($blog)) {
//            ?>
<!--            <tr>-->
<!--                <td>--><?php //echo $blog['id']; ?><!--</td>-->
<!--                <td>--><?php //echo $blog['title']; ?><!--</td>-->
<!--                <td>--><?php //echo $blog['description']; ?><!--</td>-->
<!--                <td><img src="--><?php //echo $blog['image']; ?><!--" style="width: 200px"/></td>-->
<!--            </tr>-->
<!--        --><?php //} else {
//            echo $blog;
//        }
//    } ?>

</table>

</body>
</html>
