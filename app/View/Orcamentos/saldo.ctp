<h1>Saldo</h1>

<?php 
echo $this->Form->create(array('controller' => 'Orcamentos', 'action' => 'saldo', 'type' => 'GET'));
echo $this->Form->input('', array('type' => 'textbox', 'name' => 'mes', 'class' => 'mes'));
echo $this->Form->submit('Procurar');
echo $this->Form->end();
?>

<table>
    <tr>        
        <th>Orcamento</th>          
        <th>Despesa</th>   
        <th>Saldo</th>
    </tr>
   
    <?php foreach ($orcamentos as $query): ?>
    <tr>        
        <td><?php echo $query['0']['Total']; $v1 = $query['0']['Total']; ?></td>   
    <?php endforeach; ?>
    
    <?php foreach ($despesas as $query): ?>          
        <td><?php echo $query['0']['Total']; $v2 = $query['0']['Total']; ?></td>
        <td><?php echo $v1 - $v2; ?></td>
    </tr>
    <?php endforeach; ?>
    
</table>

<?php
  echo $this->Html->script('jquery-2.1.3');
  echo $this->Html->script('jquery.mask');
?>

<script>
    $('.mes').mask("00-00-0000");
</script>