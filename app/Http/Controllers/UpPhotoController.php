<?php

namespace App\Http\Controllers;
use App\Http\Controllers\BaseController;
use App\Teacher;
use Illuminate\Http\Request;
use App\Student;
use App\Account;

class UpPhotoController extends BaseController
{
    public function store(Request $request)
    {
        return $request;
        if ($request->hasFile('filename')){
            //获取文件
           $file = $request->file('filename');
           $time = date('Ymd',time());
           // 文件是否上传成功
           if ($file->isValid()) {
               // 获取文件相关信息
               $originalName = $file->getClientOriginalName(); // 文件原名
               $ext = $file->getClientOriginalExtension();     // 扩展名
               $realPath = $file->getRealPath();   //临时文件的绝对路径
               $type = $file->getClientMimeType();     // image/jpeg
               // 上传文件
               $filename = uniqid() . '.' . $ext;
               $data['pic_path'] = 'blackvirus/'.$time.'/'.$filename;
               // 使用我们新建的uploads本地存储空间（目录）
               //这里的uploads是配置文件的名称
               $bool = Storage::disk('uploads')->put('/'.$data['pic_path'], file_get_contents($realPath));
                //判断是否创建成功
               if (!$bool)
               {
                   return $this->responseError('添加图片失败', $this->status_blackvirus_insert_img_error);
               }
           }
       }
    }
}