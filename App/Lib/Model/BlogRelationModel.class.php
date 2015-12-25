<?php

Class BlogRelationModel extends RelationModel{

      Protected  $tableName='blog';

      Protected $_link=array(
          //属性的多对多关系 但是tp有个bug  so用了sql查询
          'attr'=>array(
             'mapping_type'=>MANY_TO_MANY,
             'foreign_key'=>'bid',
             'relation_foreign_key'=>'aid',
             'relation_table'=>'hd_blog_attr',
          ),

          //类别和文章的一对多关系
          'cate'=>array(
            'mapping_type'=>BELONGS_TO, //cate->blog 是一对多的关系 但是现在blog写上面 反过来了 所以用 BELONGS_TO
            'foreign_key'=>'cid',
            'mapping_fields'=>'name',  //只要name字段
            'as_fields'=>'name:cate'   //把name从cate里读出来 然后名字换成cate
          )
      );

      /*
      ** $type 为1时候表示删除到回收站的
      */
      Public function getBlogs($type=0){

            $field=array('del');  //不想读的字段 field()参数加true
            $where=array('del'=>$type);
            return $this->field($field,true)->where($where)->relation(true)->select();
      }

}
?>