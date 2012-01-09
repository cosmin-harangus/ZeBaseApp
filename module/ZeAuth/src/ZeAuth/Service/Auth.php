<?php
namespace ZeAuth\Service;

use Zend\Authentication\Storage\Session as AuthenticationSession,
    Zend\Authentication\Result as AuthenticationResult,
    
    ZeAuth\Exception,
    ZeAuth\Module;

class Auth
{
    /**
     * Validate the identity of the user based in username/email or password
     * @param array $data
     * @return mixed
     *
     * - true: If the login was successful and the result was saved in the session
     * - array: An array containing a list of error messages otherwise
     */
    public function login(array $data)
    {
        if ( array_key_exists('identity', $data) && !empty($data['identity']) ){
            $identity = $data['identity'];
        }else{
            return array('identity'=>'This field is required');
        }

        if ( array_key_exists('credential', $data) && !empty($data['credential']) ){
            $credential = $data['credential'];
        }else{
            return array('credential'=>'This field is required');
        }

        if ( $identity && $credential ){
            $model = Module::locator()->get('ze_auth_model_user');
            $identity_type = Module::getOption('identity_type');
            switch($identity_type){
                case 'username':
                    $mapper = $model->getByUsername($identity);
                    break;
                case 'email_address':
                    $mapper = $model->getByEmailAddress($identity);
                    break;
                default:
                    if ( strpos($identity,'@') === false ){
                        $mapper = $model->getByUsername($identity);
                    } else {
                        $mapper = $model->getByEmailAddress($identity);
                    }
                    break;
            }
            if (!$mapper){
                return array('identity'=>'Invalid identity specified');
            }
            $salt = $mapper->getPasswordSalt();
            $password = $mapper->getPassword();

            if (!$this->_isValidCredential($password, $salt, $credential)){
                return array('credential'=>'Invalid credential specified');
            }
            $result = new AuthenticationResult(AuthenticationResult::SUCCESS,$identity);
            $session = new AuthenticationSession();
            $session->write($result);
        }
        return true;
    }

    /**
     * Clear authenticated session
     * @return void
     */
    public function logout()
    {
        $storage = new AuthenticationSession();
        $storage->clear();
    }

    /**
     * Check to see if the user is already logged in
     * @return bool
     */
    public function isLoggedIn()
    {
        $storage = new AuthenticationSession();
        return (!$storage->isEmpty() && $storage->read() instanceof AuthenticationResult);
    }

    /**
     * @todo: Register a new user
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Test if the credential is valid based on the configured algorithm
     * @param string $password
     * @param string $salt
     * @param string $credential
     * @return bool
     */
    protected function _isValidCredential($password, $salt, $credential)
    {
        $crypt = Module::locator()->get('ze_auth_crypt');
        $alg = Module::getOption('password_hash_algorithm');
        if ($password == $crypt->encode($alg, $credential, $salt)){
            return true;
        }
        return false;
    }

}