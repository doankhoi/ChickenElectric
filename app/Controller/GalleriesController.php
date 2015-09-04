<?php 

/**
* 
*/
class GalleriesController extends AppController
{
	var $name = "Galleries";
	var $layout = "dashboard";
	var $helpers = ['Session', 'Paginator'];
	var $paginate = array();
	var $components = ['Upload'];


	public function admin_index($type = null){
		$this->paginate = [
			'conditions'=>[
				'active'=>1,
				'type'=>$type],
			'limit'=>10,
			'order'=>['created'=>'asc'], 
			'recursive'=>-1
		];

		$data = $this->paginate('Gallery');
		$this->set('galleries', $data);
	}


	public function admin_add(){
		if($this->request->is('post')){
			$arrParam = $this->data;
            $file = $arrParam['Gallery']['images'];                                
            $destination = WWW_ROOT . 'img' . DS . 'gallery' . DS;
            if(empty($file['name'])){
                $arrParam['Gallery']['images'] = '';
           	}else{
                $this->Upload->upload($file, $destination, null, null, null);
                if($this->Upload->errors){
                    $this->Session->setFlash( implode('<br />',$this->Upload->errors) );
                    $this->redirect(['controller'=>'galleries', 'action'=>'add']);                        
                }else{
                    $arrParam['Gallery']['images'] = $this->Upload->result;
                }
            }

            $now = date('Y:m:d h:i:s');
            $arrParam['Gallery']['active'] = 1;
            $arrParam['Gallery']['created'] = $now;
            $arrParam['Gallery']['updated'] = $now;
            $this->Gallery->save($arrParam['Gallery']);
            $this->redirect(['controller'=>'galleries', 'action'=>'index', 0]);
		}
	}

	public function admin_edit($id = null){
		$gallery = $this->Gallery->find('first', [
			'conditions'=>[
				'id'=>$id
			]
		]);

		if($gallery['Gallery']['id'] == ''){
			$this->redirect(['action'=>'index', 0]);
		}

		$this->set('gallery', $gallery);
		if($this->request->is('post')){
			$now = date('Y:m:d h:i:s');
			$this->Gallery->set('id', $id);
			$this->Gallery->set('modified', $now);

			$file = $this->request->data['Gallery']['images'];                                
            $destination = WWW_ROOT . 'img' . DS . 'gallery' . DS;
            if(empty($file['name'])){
                $this->request->data['Gallery']['images'] = $gallery['Gallery']['images'];
           	}else{
                $this->Upload->upload($file, $destination, null, null, null);
                if($this->Upload->errors){
                    $this->Session->setFlash( implode('<br />',$this->Upload->errors) );
                    $this->redirect(['controller'=>'galleries', 'action'=>'add']);                        
                }else{
                    $this->request->data['Gallery']['images'] = $this->Upload->result;
                }
            }

			if($this->Gallery->save($this->request->data)){
				$this->redirect(['action'=>'index', 0]);
			}
		}
	}

	public function admin_delete($id = null){
		$gallery = $this->Gallery->find('first', [
			'conditions'=>['id'=>$id]
		]);

		if($gallery['Gallery']['id'] == ''){
			$this->redirect(['controller'=>'galleries','action'=>'index', 0]);
		}

		if($this->Gallery->delete($id)){
			$this->redirect(['controller'=>'galleries','actions'=>'index', 0]);
		}
	}
}