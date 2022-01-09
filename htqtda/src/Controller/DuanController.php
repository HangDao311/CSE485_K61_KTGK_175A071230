<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Duan Controller
 *
 * @method \App\Model\Entity\Duan[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DuanController extends AppController
{
    public function initialize():void{
        parent::initialize();
        // nếu muốn sử dụng bộ phân trang trong các phương thức bổ sung
        // thì đặt hàm thành phần ở đây thay vì trong index
        $this->loadComponent('Paginator'); //bộ phân trang
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    
    public function index()
    {
        $duan = $this->Paginator->paginate($this->Duan->find());

        $this->set('duan',$duan); //truyeedn dữ liệu từ bộ điều khiển
    }

    /**
     * View method
     *
     * @param string|null $id Duan id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $duan = $this->Duan->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('duan'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $duan = $this->Duan->newEmptyEntity(); //thêm thực thể mới
        if ($this->request->is('post')) {
            $duan = $this->Duan->patchEntity($duan, $this->request->getData());
            if ($this->Duan->save($duan)) {
                $this->Flash->success(__('thêm dữ liệu thành công'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Có lỗi xảy ra'));
        }
        $this->set('duan', $duan);
    }

    /**
     * Edit method
     *
     * @param string|null $id Duan id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $duan = $this->Duan->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $duan = $this->Duan->patchEntity($duan, $this->request->getData());
            if ($this->Duan->save($duan)) {
                $this->Flash->success(__('Sửa dữ liệu thành công'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Sửa không thành công. Hãy thử lại'));
        }
        $this->set('duan', $duan);
    }

    /**
     * Delete method
     *
     * @param string|null $id Duan id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $duan = $this->Duan->get($id);
        if ($this->Duan->delete($duan)) {
            $this->Flash->success(__('Đã xóa'));
        } else {
            $this->Flash->error(__('Không thể xóa'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
