<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Duan $duan
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Tháo tác') ?></h4>
            <?= $this->Html->link(__('Danh sách dự án'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="duan form content">
            <?= $this->Form->create($duan) ?>
            <fieldset>
                <legend><?= __('Thêm Dự Án') ?></legend>
                <?php
                    echo $this->Form->control('tenduan');
                    echo $this->Form->control('namthuchien');
                    echo $this->Form->control('linhvuc');
                    echo $this->Form->control('nhiemvu');
                    echo $this->Form->control('coquanthuchien');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Thêm')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
