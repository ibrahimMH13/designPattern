<?php

namespace DesignPattern\factory;

class Config
{
    protected $setting = [
        'upload' => [
            'default' => 'ftp',
            'services' => [
                's3' => [
                    'key' => 'abc',
                    'secret' => '123'
                ],
                'ftp' => [
                    'host' => '1.1.1.1'
                ]
            ]
        ]
    ];

    public function get($keys)
    {
        $data = $this->setting;
        $keys = explode('.', $keys);
        foreach ($keys as $key) {
            if (array_key_exists($key, $data)) {
                $data = $data[$key];
                continue;
            }
        }
        return $data;
    }
}
