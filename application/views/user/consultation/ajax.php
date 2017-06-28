<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<tr>
            <td><?php echo $info_item["login"]; ?></td>
            <td><?php echo $info_item["cmp_nom"]; ?></td>
            <td><?php echo $info_item["cmp_prenom"]; ?></td>
            <td><?php echo $info_item["cmp_service"]; ?></td>
            <td><?php echo $info_item["cmp_telephone"]; ?></td>
            <td><?php echo Date("d/m/y",$info_item["cmp_date_enreg"]); ?></td>
            
</tr>
