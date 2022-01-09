<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Duan $duan
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Thao tác') ?></h4>
            <?= $this->Form->postLink(
                __('Xóa'),
                ['action' => 'delete', $duan->maduan],
                ['confirm' => __('Bạn chắc chưa?', $duan->maduan), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Danh sách dự án'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="duan form content">
            <?= $this->Form->create($duan) ?>
            <fieldset>
                <legend><?= __('Sửa thông tin dự án') ?></legend>
                <?php
                    echo $this->Form->control('tenduan');
                    echo $this->Form->control('namthuchien');
                    echo $this->Form->control('linhvuc');
                    echo $this->Form->control('nhiemvu');
                    echo $this->Form->control('coquanthuchien');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Sửa')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
