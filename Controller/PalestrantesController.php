<?php

class PalestrantesController extends AppController {
    public function index() {
        $palestrantes = $this->Palestrante->find('all');
        $this->set('palestrantes', $palestrantes);
    }

    public function view($id = null)  {
                $this->Palestrante->id = $id;
                if (!$this->Palestrante->exists()) {
                        throw new NotFoundException(__('Palestrante invalido')); 
                }
                $this->set('palestrante', $this->Palestrante->read(null, $id)); 
    }   

    public function add() {
    	if ($this->request->isPost()) {
    		$this->Palestrante->create();
            if ($this->Palestrante->save($this->request->data)) {
                $this->Session->setFlash('Palestrante adicionado com sucesso.');
                $this->redirect('/agradecimento');
            } else {
                $this->Session->setFlash('Não foi possível adicionar o palestrante.');
            }
    	}

    }
}