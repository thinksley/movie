<?php

Class BlogRelationModel extends RelationModel{

      Protected  $tableName='blog';

      Protected $_link=array(
          //���ԵĶ�Զ��ϵ ����tp�и�bug  so����sql��ѯ
          'attr'=>array(
             'mapping_type'=>MANY_TO_MANY,
             'foreign_key'=>'bid',
             'relation_foreign_key'=>'aid',
             'relation_table'=>'hd_blog_attr',
          ),

          //�������µ�һ�Զ��ϵ
          'cate'=>array(
            'mapping_type'=>BELONGS_TO, //cate->blog ��һ�Զ�Ĺ�ϵ ��������blogд���� �������� ������ BELONGS_TO
            'foreign_key'=>'cid',
            'mapping_fields'=>'name',  //ֻҪname�ֶ�
            'as_fields'=>'name:cate'   //��name��cate������� Ȼ�����ֻ���cate
          )
      );

      /*
      ** $type Ϊ1ʱ���ʾɾ��������վ��
      */
      Public function getBlogs($type=0){

            $field=array('del');  //��������ֶ� field()������true
            $where=array('del'=>$type);
            return $this->field($field,true)->where($where)->relation(true)->select();
      }

}
?>