<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use QCod\ImageUp\HasImageUploads;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes, HasImageUploads;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'sobrenome',
        'email',
        'password',
        'avatar',
        'endereco',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'uf',
        'empresa',
        'cargo',
        'tipo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    protected static $imageFields = [
        'avatar' => [
            // width to resize image after upload
            'width' => 200,

            // height to resize image after upload
            'height' => 200,

            // set true to crop image with the given width/height and you can also pass arr [x,y] coordinate for crop.
            'crop' => true,

            // what disk you want to upload, default config('imageup.upload_disk')
            'disk' => 'public',

            // a folder path on the above disk, default config('imageup.upload_directory')
            'path' => 'avatars',

            // placeholder image if image field is empty
            'placeholder' => '/images/avatar-placeholder.svg',

            // validation rules when uploading image
            'rules' => 'image|max:2000',

            // override global auto upload setting coming from config('imageup.auto_upload_images')
            'auto_upload' => false,

            // if request file is don't have same name, default will be the field name
            'file_input' => 'avatar'
        ],
        'cover' => [
            //...
        ]
    ];


}
