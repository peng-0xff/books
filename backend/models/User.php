<?php
/**
 * Created by PhpStorm.
 * User: xiaozepeng
 * Date: 2017/3/5
 * Time: 20:15
 */
namespace backend\models;

use Yii;
use yii\web\IdentityInterface;
use yii\db\ActiveRecord;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;

class User extends ActiveRecord implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;

    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * @inheritdoc
     */

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }
//    public function rules()
//    {
//        return [
//            [['username', 'password',], 'required'],
//            [['username'], 'string', 'max' => 20],
//            [['password'], 'string', 'max' => 32]
//        ];
//    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Username',
            'password' => 'password',
        ];
    }

    public function setPassword($password)
    {
        $this->password = md5($password);
    }
    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
//    public function setPassword($password)
//    {
//        $this->password = md5($password);
//    }
    /**
     * 通过ID查询身份
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
        //return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
    }

    /**
     * 通过token查询身份
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
        /*foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;*/
    }

    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
/**
 * 可以采用这两种方式来获取登录的用户信息
        $user = User::find()
            ->where(['username' => $username])
            ->asArray()
            ->one();

        if($user){
            return new static($user);
        }

        return null;
*/
        return static::findOne(['username'=>$username]);
        /*foreach (self::$users as $user) {
            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }
        }

        return null;*/
    }

    /**
     * 获取当前用户ID
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 获取当前用户的认证秘钥
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * 判断当前用户的认证秘钥是否合法
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @property string $password_hash
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === md5($password);
    }


    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
        $this->save();
    }


}