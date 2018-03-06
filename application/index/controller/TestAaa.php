<?php
namespace app\index\controller;
// use app\admin\model\Article as ArticleModel;
use app\index\model\goods as GoodsModel;
use think\Controller;
use think\Request;
class TestAaa extends Controller
{
    public function getTest(){
        $list = GoodsModel::scope('email') ->all();
        print_r($list);
    }

    public function getCarInfo(){
        
    }

    // /**
    //  * 显示资源列表
    //  *
    //  * @return \think\Response
    //  */
    // public function index(Request $request)
    // {
    //     $map = array();
    //     if (!empty($request->get('title'))){
    //         $map['title'] = array('like', '%'.(string)$request->get('title').'%');
    //     }
    //     //传param，使get搜索分页带参数
    //     $list = ArticleModel::where($map)->paginate(10,false,['query' => $request->param()]);
    //     $this->fetch('',compact('list'));
    // }
    // /**
    //  * 显示创建资源表单页.
    //  *
    //  * @return \think\Response
    //  */
    // public function create()
    // {
    //     return $this->fetch();
    // }
    // /**
    //  * 保存新建的资源
    //  *
    //  * @param  \think\Request  $request
    //  * @return \think\Response
    //  */
    // public function save(Request $request)
    // {
    //     $data = $request->post();
    //     $model = new ArticleModel($data);
    //     if (false === $model->validate(true)->allowField(true)->save($data)){
    //         return $this->error($model->getError());
    //     }
    //     return $this->success('新增成功');
    // }
    // *
    //  * 显示指定的资源
    //  *
    //  * @param  int  $id
    //  * @return \think\Response
     
    // public function read($id)
    // {
    //     $data = ArticleModel::get($id);
    //     $this->fetch('',compact('data'));
    // }
    // /**
    //  * 显示编辑资源表单页.
    //  *
    //  * @param  int  $id
    //  * @return \think\Response
    //  */
    // public function edit($id)
    // {
    //     $data = ArticleModel::get($id);
    //     $this->fetch('',compact('data'));
    // }
    // /**
    //  * 保存更新的资源
    //  *
    //  * @param  \think\Request  $request
    //  * @param  int  $id
    //  * @return \think\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     $data = $request->post();
    //     $model = new ArticleModel();
    //     if (false === $model->validate(true)->allowField(true)->save($data,['id' => $id])){
    //         return $this->error($model->getError());
    //     }
    //     return $this->success('修改成功');
    // }
    // /**
    //  * 删除指定资源
    //  *
    //  * @param  int  $id
    //  * @return \think\Response
    //  */
    // public function delete($id)
    // {
    //     $data = ArticleModel::destroy($id);
    //     if ($data){
    //         $this->success('删除成功');
    //     }else{
    //         $this->error('删除失败');
    //     }
    // }
}