<?php
/**
 * Created by PhpStorm.
 * User: Ritesh Singh
 * Date: 6/26/2016
 * Time: 9:29 AM
 */?>

<div style="margin-left:20%;"><h3><?=NAME;?></h3></div>
<?php foreach($data as $row){ ?>
Student Name:<?php echo ucfirst($row['name']); ?><br/>
Admission Number:<?php echo $row['adm_no']; ?><br/>
Class  :<?php echo $row['class_id']->name; ?><br/>
Session : <?php echo $row['session']->sortname; ?>
<table border="1" style="width: 100%">
 <tr><th>Name</th><th>Amount</th></tr>
<?php// print_r($row['fee_breakup']) ?>
<?php foreach($row['fee_breakup'] as $rows){ ?>
<tr><td><?php echo $rows->name; ?></td><td><?php $amt[]=$rows->amt; echo $rows->amt; ?></td></tr>
<?php }?>
<tr><td>Total : </td><td><?php echo array_sum($amt); ?></td></tr>
</table>
 <?php } ?>
<?php // print_r($data); ?>