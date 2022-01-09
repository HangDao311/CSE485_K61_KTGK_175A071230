<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Duan[]|\Cake\Collection\CollectionInterface $duan
 */
?>
<div class="duan index content">
    <?= $this->Html->link(__('Thêm mới'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Danh sách dự án') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Mã dự án') ?></th>
                    <th><?= $this->Paginator->sort('Tên dự án') ?></th>
                    <th><?= $this->Paginator->sort('Năm thực hiện') ?></th>
                    <th><?= $this->Paginator->sort('Lĩnh vực') ?></th>
                    <th class="actions"><?= __('Thao tác') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($duan as $duan): ?>
                <tr>
                    <td><?= $this->Number->format($duan->maduan) ?></td>
                    <td><?= h($duan->tenduan) ?></td>
                    <td><?= $this->Number->format($duan->namthuchien) ?></td>
                    <td><?= h($duan->linhvuc) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Xem'), ['action' => 'view', $duan->maduan]) ?>
                        <?= $this->Html->link(__('Sửa'), ['action' => 'edit', $duan->maduan]) ?>
                        <?= $this->Form->postLink(__('Xóa'), ['action' => 'delete', $duan->maduan], ['confirm' => __('Bạn chắc chứ?', $duan->maduan)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('về trang đầu')) ?>
            <?= $this->Paginator->prev('< ' . __('trang trước')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('trang tiếp theo') . ' >') ?>
            <?= $this->Paginator->last(__('đến trang cuối') . ' >>') ?>
        </ul>
    </div>
</div>
