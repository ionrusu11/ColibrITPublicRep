<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Files\File;

class Upload extends BaseController
{
    protected $helpers = ['form'];
    public function index()
    {
        return view('users/index', ['errors' => []]);
    }

    public function upload()
    {
        $validationRule = [
            'imageFile' => [
                'label' => 'Image File',
                'rules' => [
                    'uploaded[imageFile]',
                    'is_image[imageFile]',
                    'mime_in[imageFile,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
//                    'max_size[imageFile,100]',
//                    'max_dims[imageFile,1024,768]',
                ],
            ],
        ];
        if (! $this->validate($validationRule)) {
            $data = ['errors' => $this->validator->getErrors()];
//            return view('users/index', $data);
//            print_r($data);
        }

        $img = $this->request->getFile('imageFile');

        if (! $img->hasMoved()) {
            $filepath = WRITEPATH . 'uploads/' . $img->store();

            $data = [
                'uploaded_fileinfo' => new File($filepath),
                'pathName' => $filepath
            ];

            return view('users/index', $data);
//            print_r($data);

        }

        $data = ['errors' => 'The file has already been moved.'];

//        return view('users/index', $data);
//        print_r($data);

    }
}
