<?php

namespace Source\models;

use Source\models\Model;

class Notice extends Model
{
    protected string $table = 'notice';

    public function get():array|object
    {
        return (object)[
            (object)[
                'name' => 'Rosa Fortuna',
                'edge' => 24,
                'email' => 'rosa.fortuna@hbo.ao',
            ],
            (object)[
                'name' => 'Albertina Fortuna',
                'edge' => 30,
                'email' => 'albertina.fortuna@hbo.ao',
            ],
            (object)[
                'name' => 'Zany Fortuna',
                'edge' => 22,
                'email' => 'zany.fortuna@hbo.ao',
            ],
            (object)[
                'name' => 'Cecilia Fortuna',
                'edge' => 18,
                'email' => 'cecilia.fortuna@hbo.ao',
            ]
        ];
    }

    public function getByEmail(string $email):array|object 
    {
        $selected = null;

        foreach($this->get() as $notice) {
            if($notice->email==$email){
                $selected = $notice;
                break;
            }
        }

        return $selected;
    }
}