<?php
// Generated by https://github.com/jaspervdm/protoc-gen-php
namespace POGOProtos\Enums {

  use Protobuf;
  use ProtobufIO;
  use ProtobufEnum;
  use ProtobufMessage;

  // enum POGOProtos.Enums.TeamColor
  abstract class TeamColor extends ProtobufEnum {
    const NEUTRAL = 0;
    const BLUE = 1;
    const RED = 2;
    const YELLOW = 3;

    public static $_values = array(
      0 => "NEUTRAL",
      1 => "BLUE",
      2 => "RED",
      3 => "YELLOW",
    );

    public static function isValid($value) {
      return array_key_exists($value, self::$_values);
    }

    public static function toString($value) {
      checkArgument(is_int($value), 'value must be a integer');
      if (array_key_exists($value, self::$_values))
        return self::$_values[$value];
      return 'UNKNOWN';
    }
  }

}