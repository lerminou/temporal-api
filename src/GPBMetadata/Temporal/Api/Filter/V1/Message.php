<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/filter/v1/message.proto

namespace GPBMetadata\Temporal\Api\Filter\V1;

class Message
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Dependencies\Gogoproto\Gogo::initOnce();
        \GPBMetadata\Temporal\Api\Enums\V1\Workflow::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0acf040a2474656d706f72616c2f6170692f66696c7465722f76312f6d6573736167652e70726f746f121674656d706f72616c2e6170692e66696c7465722e76311a21646570656e64656e636965732f676f676f70726f746f2f676f676f2e70726f746f1a2474656d706f72616c2f6170692f656e756d732f76312f776f726b666c6f772e70726f746f223e0a17576f726b666c6f77457865637574696f6e46696c74657212130a0b776f726b666c6f775f6964180120012809120e0a0672756e5f696418022001280922220a12576f726b666c6f775479706546696c746572120c0a046e616d651801200128092281010a0f537461727454696d6546696c74657212370a0d6561726c696573745f74696d6518012001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70420490df1f0112350a0b6c61746573745f74696d6518022001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70420490df1f01224e0a0c53746174757346696c746572123e0a0673746174757318012001280e322e2e74656d706f72616c2e6170692e656e756d732e76312e576f726b666c6f77457865637574696f6e5374617475734285010a19696f2e74656d706f72616c2e6170692e66696c7465722e7631420c4d65737361676550726f746f50015a23676f2e74656d706f72616c2e696f2f6170692f66696c7465722f76313b66696c746572aa021654656d706f72616c2e4170692e46696c7465722e5631ea021954656d706f72616c3a3a4170693a3a46696c7465723a3a5631620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

