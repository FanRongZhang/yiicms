

<h3>
    慢查询状态：
<?php
    echo $slow_query_log;

    ?>
</h3>

<hr>

<table>
    <tbody>
    <tr>
        <td>event time</td>
        <td>user host</td>
        <td>thread id</td>
        <td>server id</td>
        <td>command type</td>
        <td>sql</td>
    </tr>
<?php
foreach ($ary as $one):
?>

    <tr>
        <td><?= $one['event_time'] ?></td>
        <td><?= $one['user_host'] ?></td>
        <td><?= $one['thread_id'] ?></td>
        <td><?= $one['server_id'] ?></td>
        <td><?= $one['command_type'] ?></td>
        <td><?= $one['argument'] ?></td>
    </tr>

<?php
endforeach;
?>
    </tbody>
</table>

<div  style="position: fixed;bottom: 0px;width:100%;" class="btn"><a href="/log/clearslow">清空</a></div>


