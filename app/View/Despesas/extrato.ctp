<h1>Extrato</h1>

<?php 
echo $this->Form->create(array('controller' => 'Despesas', 'action' => 'extrato', 'type' => 'GET'));
echo $this->Form->input('', array('type' => 'textbox', 'name' => 'ini', 'class' => 'mes'));
echo $this->Form->input('', array('type' => 'textbox', 'name' => 'fim', 'class' => 'mes'));
echo $this->Form->submit('Extrair');
echo $this->Form->end();
?>

<table>
    <tr>
        <th>Mes</th>
        <th>Total</th>        
    </tr>
   
    <?php foreach ($queries as $query): ?>
    <tr>
        <td><?php echo $query['0']['Mes']; ?></td>
        <td><?php echo $query['0']['Total']; ?></td>
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