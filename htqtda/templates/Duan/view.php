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
            <?= $this->Html->link(__('Sửa dự án'), ['action' => 'edit', $duan->maduan], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Xóa dự án'), ['action' => 'delete', $duan->maduan], ['confirm' => __('Bạn chắc chưa?', $duan->maduan), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Danh sách dự án'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Thêm dự án mới'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="duan view content">
            <h3>Thông tin về dự án <?= h($duan->maduan) ?></h3>
            <table>
                <tr>
                    <th><?= __('Tên dự án') ?></th>
                    <td><?= h($duan->tenduan) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lĩnh vực') ?></th>
                    <td><?= h($duan->linhvuc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mã dự án') ?></th>
                    <td><?= $this->Number->format($duan->maduan) ?></td>
                </tr>
                <tr>
                    <th><?= __('Năm dự án') ?></th>
                    <td><?= $this->Number->format($duan->namthuchien) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Nhiệm vụ') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($duan->nhiemvu)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Cơ quan thực hiện') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($duan->coquanthuchien)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
