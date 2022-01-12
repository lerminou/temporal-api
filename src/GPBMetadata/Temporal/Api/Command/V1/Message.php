<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/command/v1/message.proto

namespace GPBMetadata\Temporal\Api\Command\V1;

class Message
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Dependencies\Gogoproto\Gogo::initOnce();
        \GPBMetadata\Temporal\Api\Enums\V1\Workflow::initOnce();
        \GPBMetadata\Temporal\Api\Enums\V1\CommandType::initOnce();
        \GPBMetadata\Temporal\Api\Common\V1\Message::initOnce();
        \GPBMetadata\Temporal\Api\Failure\V1\Message::initOnce();
        \GPBMetadata\Temporal\Api\Taskqueue\V1\Message::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad22d0a2574656d706f72616c2f6170692f636f6d6d616e642f76312f6d6573736167652e70726f746f121774656d706f72616c2e6170692e636f6d6d616e642e76311a21646570656e64656e636965732f676f676f70726f746f2f676f676f2e70726f746f1a2474656d706f72616c2f6170692f656e756d732f76312f776f726b666c6f772e70726f746f1a2874656d706f72616c2f6170692f656e756d732f76312f636f6d6d616e645f747970652e70726f746f1a2474656d706f72616c2f6170692f636f6d6d6f6e2f76312f6d6573736167652e70726f746f1a2574656d706f72616c2f6170692f6661696c7572652f76312f6d6573736167652e70726f746f1a2774656d706f72616c2f6170692f7461736b71756575652f76312f6d6573736167652e70726f746f22e7040a255363686564756c6541637469766974795461736b436f6d6d616e644174747269627574657312130a0b61637469766974795f6964180120012809123b0a0d61637469766974795f7479706518022001280b32242e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e41637469766974795479706512110a096e616d65737061636518032001280912380a0a7461736b5f717565756518042001280b32242e74656d706f72616c2e6170692e7461736b71756575652e76312e5461736b5175657565122e0a0668656164657218052001280b321e2e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e486561646572122f0a05696e70757418062001280b32202e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5061796c6f61647312420a197363686564756c655f746f5f636c6f73655f74696d656f757418072001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e420498df1f0112420a197363686564756c655f746f5f73746172745f74696d656f757418082001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e420498df1f01123f0a1673746172745f746f5f636c6f73655f74696d656f757418092001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e420498df1f01123a0a116865617274626561745f74696d656f7574180a2001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e420498df1f0112390a0c72657472795f706f6c696379180b2001280b32232e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5265747279506f6c69637922480a2a5265717565737443616e63656c41637469766974795461736b436f6d6d616e6441747472696275746573121a0a127363686564756c65645f6576656e745f6964180120012803226f0a1b537461727454696d6572436f6d6d616e644174747269627574657312100a0874696d65725f6964180120012809123e0a1573746172745f746f5f666972655f74696d656f757418022001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e420498df1f01225e0a2a436f6d706c657465576f726b666c6f77457865637574696f6e436f6d6d616e644174747269627574657312300a06726573756c7418012001280b32202e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5061796c6f616473225b0a264661696c576f726b666c6f77457865637574696f6e436f6d6d616e644174747269627574657312310a076661696c75726518012001280b32202e74656d706f72616c2e6170692e6661696c7572652e76312e4661696c75726522300a1c43616e63656c54696d6572436f6d6d616e644174747269627574657312100a0874696d65725f6964180120012809225d0a2843616e63656c576f726b666c6f77457865637574696f6e436f6d6d616e644174747269627574657312310a0764657461696c7318012001280b32202e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5061796c6f616473229f010a375265717565737443616e63656c45787465726e616c576f726b666c6f77457865637574696f6e436f6d6d616e644174747269627574657312110a096e616d65737061636518012001280912130a0b776f726b666c6f775f6964180220012809120e0a0672756e5f6964180320012809120f0a07636f6e74726f6c180420012809121b0a136368696c645f776f726b666c6f775f6f6e6c7918052001280822f7010a305369676e616c45787465726e616c576f726b666c6f77457865637574696f6e436f6d6d616e644174747269627574657312110a096e616d657370616365180120012809123c0a09657865637574696f6e18022001280b32292e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e576f726b666c6f77457865637574696f6e12130a0b7369676e616c5f6e616d65180320012809122f0a05696e70757418042001280b32202e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5061796c6f616473120f0a07636f6e74726f6c180520012809121b0a136368696c645f776f726b666c6f775f6f6e6c7918062001280822760a2f557073657274576f726b666c6f7753656172636841747472696275746573436f6d6d616e644174747269627574657312430a117365617263685f6174747269627574657318012001280b32282e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5365617263684174747269627574657322bf020a1d5265636f72644d61726b6572436f6d6d616e644174747269627574657312130a0b6d61726b65725f6e616d6518012001280912540a0764657461696c7318022003280b32432e74656d706f72616c2e6170692e636f6d6d616e642e76312e5265636f72644d61726b6572436f6d6d616e64417474726962757465732e44657461696c73456e747279122e0a0668656164657218032001280b321e2e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e48656164657212310a076661696c75726518042001280b32202e74656d706f72616c2e6170692e6661696c7572652e76312e4661696c7572651a500a0c44657461696c73456e747279120b0a036b6579180120012809122f0a0576616c756518022001280b32202e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5061796c6f6164733a02380122c3060a2f436f6e74696e756541734e6577576f726b666c6f77457865637574696f6e436f6d6d616e6441747472696275746573123b0a0d776f726b666c6f775f7479706518012001280b32242e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e576f726b666c6f775479706512380a0a7461736b5f717565756518022001280b32242e74656d706f72616c2e6170692e7461736b71756575652e76312e5461736b5175657565122f0a05696e70757418032001280b32202e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5061796c6f616473123d0a14776f726b666c6f775f72756e5f74696d656f757418042001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e420498df1f01123e0a15776f726b666c6f775f7461736b5f74696d656f757418052001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e420498df1f01123f0a166261636b6f66665f73746172745f696e74657276616c18062001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e420498df1f0112390a0c72657472795f706f6c69637918072001280b32232e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5265747279506f6c69637912400a09696e69746961746f7218082001280e322d2e74656d706f72616c2e6170692e656e756d732e76312e436f6e74696e756541734e6577496e69746961746f7212310a076661696c75726518092001280b32202e74656d706f72616c2e6170692e6661696c7572652e76312e4661696c75726512400a166c6173745f636f6d706c6574696f6e5f726573756c74180a2001280b32202e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5061796c6f61647312150a0d63726f6e5f7363686564756c65180b20012809122e0a06686561646572180c2001280b321e2e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e486561646572122a0a046d656d6f180d2001280b321c2e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e4d656d6f12430a117365617263685f61747472696275746573180e2001280b32282e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5365617263684174747269627574657322dd060a2c53746172744368696c64576f726b666c6f77457865637574696f6e436f6d6d616e644174747269627574657312110a096e616d65737061636518012001280912130a0b776f726b666c6f775f6964180220012809123b0a0d776f726b666c6f775f7479706518032001280b32242e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e576f726b666c6f775479706512380a0a7461736b5f717565756518042001280b32242e74656d706f72616c2e6170692e7461736b71756575652e76312e5461736b5175657565122f0a05696e70757418052001280b32202e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5061796c6f61647312430a1a776f726b666c6f775f657865637574696f6e5f74696d656f757418062001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e420498df1f01123d0a14776f726b666c6f775f72756e5f74696d656f757418072001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e420498df1f01123e0a15776f726b666c6f775f7461736b5f74696d656f757418082001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e420498df1f0112450a13706172656e745f636c6f73655f706f6c69637918092001280e32282e74656d706f72616c2e6170692e656e756d732e76312e506172656e74436c6f7365506f6c696379120f0a07636f6e74726f6c180a20012809124e0a18776f726b666c6f775f69645f72657573655f706f6c696379180b2001280e322c2e74656d706f72616c2e6170692e656e756d732e76312e576f726b666c6f7749645265757365506f6c69637912390a0c72657472795f706f6c696379180c2001280b32232e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5265747279506f6c69637912150a0d63726f6e5f7363686564756c65180d20012809122e0a06686561646572180e2001280b321e2e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e486561646572122a0a046d656d6f180f2001280b321c2e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e4d656d6f12430a117365617263685f6174747269627574657318102001280b32282e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5365617263684174747269627574657322a20d0a07436f6d6d616e6412380a0c636f6d6d616e645f7479706518012001280e32222e74656d706f72616c2e6170692e656e756d732e76312e436f6d6d616e645479706512730a297363686564756c655f61637469766974795f7461736b5f636f6d6d616e645f6174747269627574657318022001280b323e2e74656d706f72616c2e6170692e636f6d6d616e642e76312e5363686564756c6541637469766974795461736b436f6d6d616e64417474726962757465734800125e0a1e73746172745f74696d65725f636f6d6d616e645f6174747269627574657318032001280b32342e74656d706f72616c2e6170692e636f6d6d616e642e76312e537461727454696d6572436f6d6d616e64417474726962757465734800127d0a2e636f6d706c6574655f776f726b666c6f775f657865637574696f6e5f636f6d6d616e645f6174747269627574657318042001280b32432e74656d706f72616c2e6170692e636f6d6d616e642e76312e436f6d706c657465576f726b666c6f77457865637574696f6e436f6d6d616e6441747472696275746573480012750a2a6661696c5f776f726b666c6f775f657865637574696f6e5f636f6d6d616e645f6174747269627574657318052001280b323f2e74656d706f72616c2e6170692e636f6d6d616e642e76312e4661696c576f726b666c6f77457865637574696f6e436f6d6d616e64417474726962757465734800127e0a2f726571756573745f63616e63656c5f61637469766974795f7461736b5f636f6d6d616e645f6174747269627574657318062001280b32432e74656d706f72616c2e6170692e636f6d6d616e642e76312e5265717565737443616e63656c41637469766974795461736b436f6d6d616e6441747472696275746573480012600a1f63616e63656c5f74696d65725f636f6d6d616e645f6174747269627574657318072001280b32352e74656d706f72616c2e6170692e636f6d6d616e642e76312e43616e63656c54696d6572436f6d6d616e6441747472696275746573480012790a2c63616e63656c5f776f726b666c6f775f657865637574696f6e5f636f6d6d616e645f6174747269627574657318082001280b32412e74656d706f72616c2e6170692e636f6d6d616e642e76312e43616e63656c576f726b666c6f77457865637574696f6e436f6d6d616e644174747269627574657348001299010a3d726571756573745f63616e63656c5f65787465726e616c5f776f726b666c6f775f657865637574696f6e5f636f6d6d616e645f6174747269627574657318092001280b32502e74656d706f72616c2e6170692e636f6d6d616e642e76312e5265717565737443616e63656c45787465726e616c576f726b666c6f77457865637574696f6e436f6d6d616e6441747472696275746573480012620a207265636f72645f6d61726b65725f636f6d6d616e645f61747472696275746573180a2001280b32362e74656d706f72616c2e6170692e636f6d6d616e642e76312e5265636f72644d61726b6572436f6d6d616e644174747269627574657348001289010a35636f6e74696e75655f61735f6e65775f776f726b666c6f775f657865637574696f6e5f636f6d6d616e645f61747472696275746573180b2001280b32482e74656d706f72616c2e6170692e636f6d6d616e642e76312e436f6e74696e756541734e6577576f726b666c6f77457865637574696f6e436f6d6d616e644174747269627574657348001282010a3173746172745f6368696c645f776f726b666c6f775f657865637574696f6e5f636f6d6d616e645f61747472696275746573180c2001280b32452e74656d706f72616c2e6170692e636f6d6d616e642e76312e53746172744368696c64576f726b666c6f77457865637574696f6e436f6d6d616e64417474726962757465734800128a010a357369676e616c5f65787465726e616c5f776f726b666c6f775f657865637574696f6e5f636f6d6d616e645f61747472696275746573180d2001280b32492e74656d706f72616c2e6170692e636f6d6d616e642e76312e5369676e616c45787465726e616c576f726b666c6f77457865637574696f6e436f6d6d616e644174747269627574657348001288010a347570736572745f776f726b666c6f775f7365617263685f617474726962757465735f636f6d6d616e645f61747472696275746573180e2001280b32482e74656d706f72616c2e6170692e636f6d6d616e642e76312e557073657274576f726b666c6f7753656172636841747472696275746573436f6d6d616e64417474726962757465734800420c0a0a61747472696275746573428a010a1a696f2e74656d706f72616c2e6170692e636f6d6d616e642e7631420c4d65737361676550726f746f50015a25676f2e74656d706f72616c2e696f2f6170692f636f6d6d616e642f76313b636f6d6d616e64aa021754656d706f72616c2e4170692e436f6d6d616e642e5631ea021a54656d706f72616c3a3a4170693a3a436f6d6d616e643a3a5631620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

