<ul>
    <li><?php echo $this->Html->link('Home','/');?></li>
    <li><?php echo $this->Html->link('Sobre nós',array('controller'=>'pages','action'=>'sobrenos'));?></li>
    <li><?php echo $this->Html->link('Login',array('controller'=>'cliente','action'=>'login'));?></li>
    <li><?php echo $this->Html->link('Cadastra',array('controller'=>'cliente','action'=>'cadastra'));?></li>
    <li><?php echo $this->Html->link('Suporte',array('controller'=>'pages','action'=>'suporte'));?></li>
    <li><?php echo $this->Html->link('Contato',array('controller'=>'pages','action'=>'contato'));?></li>
</ul>