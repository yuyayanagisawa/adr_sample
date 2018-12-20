<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;
use Log;

/**
 * Class User
 *
 * @package App\Models
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    protected $fillable = [
        'facebook_id',
        'email',
        'password',
        'last_name',
        'first_name',
        'last_name_kana',
        'first_name_kana',
        'gender_id',
        'birthday',
        'zip_code',
        'master_prefecture_id',
        'address',
        'tel',
        'avator_image_id',
        'is_email_authenticated',
        'is_mailmagazine',
        'stripe_id',
        'card_brand',
        'card_last_four',
        'trial_ends_at',
    ];



}