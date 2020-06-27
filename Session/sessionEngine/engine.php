<?php
class Filehandle implements SessionHandlerInterface
{
    // session 的保存目录
    private $path;
    // session 文件的过期时间
    private $maxlifetime;
    public function __construct($path = 'session', $maxlifetime = 1440)
    {
        $this->path = $this->makeDir($path);
        $this->maxlifetime = $maxlifetime;
        // echo $this->path;
    }
    // 第二步
    public function close(): bool
    {
        return true;
    }
    // 第五步
    public function destroy($id): bool
    {
        if (is_file($this->path . '/' . $id)) {
            @unlink($this->path . '/' . $id);
        }
        return true;
    }
    // 第六步
    public function gc($maxlifetime): int
    {
        foreach (glob($this->path . '/*') as $file) {
            if (filemtime($file) + $this->maxlifetime < time() && file_exists($file)) {
                @unlink($file);
            }
        }
        return true;
    }
    //将文件路径转换为相对路径
    protected function makeDir($path)
    {
        is_dir($path) or mkdir($path, 0755, true);
        return realpath($path);
    }
    // 第一步
    public function open($path, $name): bool
    {
        return true;
    }
    // 第三步
    public function read($id): string
    {
        return (string) @file_get_contents($this->path . '/' . $id);
    }
    // 第四步
    public function write($id, $data): bool
    {
        return (bool) @file_put_contents($this->path . '/' . $id, $data);
    }
}
