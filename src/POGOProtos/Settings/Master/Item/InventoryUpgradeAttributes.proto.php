<?php
// Generated by https://github.com/jaspervdm/protoc-gen-php
namespace POGOProtos\Settings\Master\Item {

  use Protobuf;
  use ProtobufIO;
  use ProtobufEnum;
  use ProtobufMessage;

  // message POGOProtos.Settings.Master.Item.InventoryUpgradeAttributes
  final class InventoryUpgradeAttributes extends ProtobufMessage {

    private $_unknown;
    private $additionalStorage = 0; // optional int32 additional_storage = 1
    private $upgradeType = InventoryUpgradeType::UPGRADE_UNSET; // optional .POGOProtos.Inventory.InventoryUpgradeType upgrade_type = 2

    public function __construct($in = null, &$limit = PHP_INT_MAX) {
      parent::__construct($in, $limit);
    }

    public function read($fp, &$limit = PHP_INT_MAX) {
      $fp = ProtobufIO::toStream($fp, $limit);
      while(!feof($fp) && $limit > 0) {
        $tag = Protobuf::read_varint($fp, $limit);
        if ($tag === false) break;
        $wire  = $tag & 0x07;
        $field = $tag >> 3;
        switch($field) {
          case 1: // optional int32 additional_storage = 1
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->additionalStorage = $tmp;

            break;
          case 2: // optional .POGOProtos.Inventory.InventoryUpgradeType upgrade_type = 2
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->upgradeType = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->additionalStorage !== 0) {
        fwrite($fp, "\x08", 1);
        Protobuf::write_varint($fp, $this->additionalStorage);
      }
      if ($this->upgradeType !== InventoryUpgradeType::UPGRADE_UNSET) {
        fwrite($fp, "\x10", 1);
        Protobuf::write_varint($fp, $this->upgradeType);
      }
    }

    public function size() {
      $size = 0;
      if ($this->additionalStorage !== 0) {
        $size += 1 + Protobuf::size_varint($this->additionalStorage);
      }
      if ($this->upgradeType !== InventoryUpgradeType::UPGRADE_UNSET) {
        $size += 1 + Protobuf::size_varint($this->upgradeType);
      }
      return $size;
    }

    public function clearAdditionalStorage() { $this->additionalStorage = 0; }
    public function getAdditionalStorage() { return $this->additionalStorage;}
    public function setAdditionalStorage($value) { $this->additionalStorage = $value; }

    public function clearUpgradeType() { $this->upgradeType = InventoryUpgradeType::UPGRADE_UNSET; }
    public function getUpgradeType() { return $this->upgradeType;}
    public function setUpgradeType($value) { $this->upgradeType = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('additional_storage', $this->additionalStorage, 0)
           . Protobuf::toString('upgrade_type', $this->upgradeType, InventoryUpgradeType::UPGRADE_UNSET);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Settings.Master.Item.InventoryUpgradeAttributes)
  }

}