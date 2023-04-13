<?php
include 'config.php';
$str=base64_decode($_SESSION['detail']);
$data=explode(".",$str);
echo "<table>
<thead>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>Password</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td> $data[0]</td>
        <td> $data[1]</td>
        <td> $data[2]</td>
    </tr>
</tbody>
</table>";
?>
