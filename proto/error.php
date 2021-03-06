<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 0.9.4
// Source: error.proto
//   Date: 2014-08-15 17:41:24

namespace  {

  class Error extends \DrSlump\Protobuf\Message {

    /**  @var \ErrorMessage */
    public $message = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, '.Error');

      // REQUIRED MESSAGE message = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "message";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $f->reference = '\ErrorMessage';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <message> has a value
     *
     * @return boolean
     */
    public function hasMessage(){
      return $this->_has(2);
    }
    
    /**
     * Clear <message> value
     *
     * @return \Error
     */
    public function clearMessage(){
      return $this->_clear(2);
    }
    
    /**
     * Get <message> value
     *
     * @return \ErrorMessage
     */
    public function getMessage(){
      return $this->_get(2);
    }
    
    /**
     * Set <message> value
     *
     * @param \ErrorMessage $value
     * @return \Error
     */
    public function setMessage(\ErrorMessage $value){
      return $this->_set(2, $value);
    }
  }
}

namespace  {

  class ErrorMessage extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $message = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, '.ErrorMessage');

      // REQUIRED STRING message = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "message";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <message> has a value
     *
     * @return boolean
     */
    public function hasMessage(){
      return $this->_has(2);
    }
    
    /**
     * Clear <message> value
     *
     * @return \ErrorMessage
     */
    public function clearMessage(){
      return $this->_clear(2);
    }
    
    /**
     * Get <message> value
     *
     * @return string
     */
    public function getMessage(){
      return $this->_get(2);
    }
    
    /**
     * Set <message> value
     *
     * @param string $value
     * @return \ErrorMessage
     */
    public function setMessage( $value){
      return $this->_set(2, $value);
    }
  }
}

