<?php

//1.���������ռ�
namespace Admin\Model;
//2.���븸��
use Think\Model;
//3.�����ಢ����չ����
class TestModel extends Model{
	
	//addData
	public function addData($post,$file){
		//���ݷ�Ϊ �ļ�+�ַ�
		//�ж��Ƿ����ļ���Ҫ����
		if($file['error']=='0' ){
			//�����ļ�����
			//��������
	 		$config=array(
	 			      'rootPath'      =>  WORKING_PATH . UPLOAD_ROOT_PATH, //�����·��
	 		);
	 		//�����ϴ�
	 		$upload=new \Think\Upload($config);//ʵ�����ϴ���
	 		//��ʼ�ϴ�
	 		$info=$upload->uploadOne($file);
	 		//�ж��ϴ��Ƿ�ɹ�
	 		if($info){
	 			//�ϴ��ɹ� ��ȫ��Ϣ
	 			$post['filepath'] = UPLOAD_ROOT_PATH.$info['savepath'].$info['savename'];//�ļ���·��
	 			$post['filename']=$info['name'];//�ļ���
	 			$post['hasfile']=1;//�Ƿ����ļ� 
	 		}else{
	 			//�ϴ�ʧ��
	 			$this->error($upload->getErrorMsg());
	 		}
		}
		
	 	//��Ӳ���
	 	return $this->add($post);
		
		
	}
	
	
	
	
}