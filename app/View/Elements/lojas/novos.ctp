<?php 

$produtos = $this->requestAction('produtos/novos/6');
?>

<div class="container-fluid produtos-container">
    <div class="row">
    <?php $i=1; ?>
    <?php $j=1; ?>
    <?php foreach($produtos as $value): ?>
            <div class="col-lg-4">
                <div class="produto-box" data-id="<?php echo $value['Produto']['valor_desconto'];?>">
                <?php $slug = 'qui'; ?>
                    <?php echo $this->Html->link($this->Html->image('tmp/produto.jpg'),'/'.$slug,array('escape'=>false));?>
                    <h4><?php echo $value['Produto']['titulo'];?></h4>
                    <?php echo $this->Html->link(
                        'R$ '.$value['Produto']['valor_desconto'],
                        '/'.$slug,
                        array(
                            'class'=>'btn-preco'
                        )
                    );
                    ?>
                    <?php echo $this->Html->link(
                        '',
                        '#',
                        array(
                            'class'=>'drag ttip icon-arrasta',
                            'escape'=>false,
                            'title'=>'Arraste até o carrinho',
                            'data-placement'=>'right'
                        )
                    );?>
                </div>
            </div>
            <?php if ($j==count($produtos)): ?>
            </div>
            <?php elseif ($i==3): ?>
                </div>
                <div class="row">
                <?php $i=1; ?>
                <?php $j++; ?>
            <?php else: ?>
                <?php $i++; ?>
                <?php $j++; ?>
            <?php endif; ?>
    <?php endforeach; ?>
        
</div>