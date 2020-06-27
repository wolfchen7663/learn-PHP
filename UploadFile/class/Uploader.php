<?php
class Uploader
{
    protected $dir;
    public function make(): array
    {
        $files = $this->format();
        //保存数据的数组
        $savedFiles = [];
        $this->makeDir();
        foreach ($files as $file) {
            if ($file['error'] == 0) {
                if (is_uploaded_file($file['tmp_name'])) {
                    $to = $this->dir . '/' . time() . mt_rand(1, 999) . '.' . pathinfo($file['name'])['extension'];
                    if (move_uploaded_file($file['tmp_name'], $to)) {
                        $savedFiles[] = [
                            'path' => $to,
                            'size' => $file['size'],
                            'name' => $file['name']
                        ];
                    }
                }
            }
        }
        return $savedFiles;
    }
    // 生成目录
    private function makeDir()
    {
        $path = 'uploads/' . date('Y/m');
        $this->dir = $path;
        return is_dir($path) or mkdir($path, 0755, true);
    }
    //格式化数据
    private function format(): array
    {
        $files = [];
        foreach ($_FILES as $field) {
            if (is_array($field['name'])) {
                foreach ($field['name'] as $id => $file) {
                    $files[] = [
                        'name' => $field['name'][$id],
                        'type' => $field['type'][$id],
                        'tmp_name' => $field['tmp_name'][$id],
                        'error' => $field['error'][$id],
                        'size' => $field['size'][$id],
                    ];
                }
            } else {
                $files[] = $field;
            }
        }
        return $files;
    }
}
