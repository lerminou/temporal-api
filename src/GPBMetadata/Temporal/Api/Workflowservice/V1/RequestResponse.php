<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/workflowservice/v1/request_response.proto

namespace GPBMetadata\Temporal\Api\Workflowservice\V1;

class RequestResponse
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Temporal\Api\Enums\V1\Workflow::initOnce();
        \GPBMetadata\Temporal\Api\Enums\V1\PBNamespace::initOnce();
        \GPBMetadata\Temporal\Api\Enums\V1\FailedCause::initOnce();
        \GPBMetadata\Temporal\Api\Enums\V1\Common::initOnce();
        \GPBMetadata\Temporal\Api\Enums\V1\Query::initOnce();
        \GPBMetadata\Temporal\Api\Enums\V1\Reset::initOnce();
        \GPBMetadata\Temporal\Api\Enums\V1\TaskQueue::initOnce();
        \GPBMetadata\Temporal\Api\Common\V1\Message::initOnce();
        \GPBMetadata\Temporal\Api\History\V1\Message::initOnce();
        \GPBMetadata\Temporal\Api\Workflow\V1\Message::initOnce();
        \GPBMetadata\Temporal\Api\Command\V1\Message::initOnce();
        \GPBMetadata\Temporal\Api\Failure\V1\Message::initOnce();
        \GPBMetadata\Temporal\Api\Filter\V1\Message::initOnce();
        \GPBMetadata\Temporal\Api\PBNamespace\V1\Message::initOnce();
        \GPBMetadata\Temporal\Api\Query\V1\Message::initOnce();
        \GPBMetadata\Temporal\Api\Replication\V1\Message::initOnce();
        \GPBMetadata\Temporal\Api\Taskqueue\V1\Message::initOnce();
        \GPBMetadata\Temporal\Api\Version\V1\Message::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Dependencies\Gogoproto\Gogo::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae87a0a3674656d706f72616c2f6170692f776f726b666c6f77736572766963652f76312f726571756573745f726573706f6e73652e70726f746f121f74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76311a2574656d706f72616c2f6170692f656e756d732f76312f6e616d6573706163652e70726f746f1a2874656d706f72616c2f6170692f656e756d732f76312f6661696c65645f63617573652e70726f746f1a2274656d706f72616c2f6170692f656e756d732f76312f636f6d6d6f6e2e70726f746f1a2174656d706f72616c2f6170692f656e756d732f76312f71756572792e70726f746f1a2174656d706f72616c2f6170692f656e756d732f76312f72657365742e70726f746f1a2674656d706f72616c2f6170692f656e756d732f76312f7461736b5f71756575652e70726f746f1a2474656d706f72616c2f6170692f636f6d6d6f6e2f76312f6d6573736167652e70726f746f1a2574656d706f72616c2f6170692f686973746f72792f76312f6d6573736167652e70726f746f1a2674656d706f72616c2f6170692f776f726b666c6f772f76312f6d6573736167652e70726f746f1a2574656d706f72616c2f6170692f636f6d6d616e642f76312f6d6573736167652e70726f746f1a2574656d706f72616c2f6170692f6661696c7572652f76312f6d6573736167652e70726f746f1a2474656d706f72616c2f6170692f66696c7465722f76312f6d6573736167652e70726f746f1a2774656d706f72616c2f6170692f6e616d6573706163652f76312f6d6573736167652e70726f746f1a2374656d706f72616c2f6170692f71756572792f76312f6d6573736167652e70726f746f1a2974656d706f72616c2f6170692f7265706c69636174696f6e2f76312f6d6573736167652e70726f746f1a2774656d706f72616c2f6170692f7461736b71756575652f76312f6d6573736167652e70726f746f1a2574656d706f72616c2f6170692f76657273696f6e2f76312f6d6573736167652e70726f746f1a1e676f6f676c652f70726f746f6275662f6475726174696f6e2e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f1a21646570656e64656e636965732f676f676f70726f746f2f676f676f2e70726f746f228e050a1852656769737465724e616d6573706163655265717565737412110a096e616d65737061636518012001280912130a0b6465736372697074696f6e18022001280912130a0b6f776e65725f656d61696c180320012809124c0a23776f726b666c6f775f657865637574696f6e5f726574656e74696f6e5f706572696f6418042001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e420498df1f0112470a08636c75737465727318052003280b32352e74656d706f72616c2e6170692e7265706c69636174696f6e2e76312e436c75737465725265706c69636174696f6e436f6e666967121b0a136163746976655f636c75737465725f6e616d6518062001280912510a046461746118072003280b32432e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e52656769737465724e616d657370616365526571756573742e44617461456e74727912160a0e73656375726974795f746f6b656e180820012809121b0a1369735f676c6f62616c5f6e616d65737061636518092001280812440a16686973746f72795f617263686976616c5f7374617465180a2001280e32242e74656d706f72616c2e6170692e656e756d732e76312e417263686976616c5374617465121c0a14686973746f72795f617263686976616c5f757269180b2001280912470a197669736962696c6974795f617263686976616c5f7374617465180c2001280e32242e74656d706f72616c2e6170692e656e756d732e76312e417263686976616c5374617465121f0a177669736962696c6974795f617263686976616c5f757269180d200128091a2b0a0944617461456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a023801221b0a1952656769737465724e616d657370616365526573706f6e736522430a154c6973744e616d657370616365735265717565737412110a09706167655f73697a6518012001280512170a0f6e6578745f706167655f746f6b656e18022001280c2281010a164c6973744e616d65737061636573526573706f6e7365124e0a0a6e616d6573706163657318012003280b323a2e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e44657363726962654e616d657370616365526573706f6e736512170a0f6e6578745f706167655f746f6b656e18022001280c22390a1844657363726962654e616d6573706163655265717565737412110a096e616d657370616365180120012809120a0a02696418022001280922a5020a1944657363726962654e616d657370616365526573706f6e736512400a0e6e616d6573706163655f696e666f18012001280b32282e74656d706f72616c2e6170692e6e616d6573706163652e76312e4e616d657370616365496e666f123a0a06636f6e66696718022001280b322a2e74656d706f72616c2e6170692e6e616d6573706163652e76312e4e616d657370616365436f6e66696712530a127265706c69636174696f6e5f636f6e66696718032001280b32372e74656d706f72616c2e6170692e7265706c69636174696f6e2e76312e4e616d6573706163655265706c69636174696f6e436f6e66696712180a106661696c6f7665725f76657273696f6e180420012803121b0a1369735f676c6f62616c5f6e616d65737061636518052001280822cf020a165570646174654e616d6573706163655265717565737412110a096e616d65737061636518012001280912430a0b7570646174655f696e666f18022001280b322e2e74656d706f72616c2e6170692e6e616d6573706163652e76312e5570646174654e616d657370616365496e666f123a0a06636f6e66696718032001280b322a2e74656d706f72616c2e6170692e6e616d6573706163652e76312e4e616d657370616365436f6e66696712530a127265706c69636174696f6e5f636f6e66696718042001280b32372e74656d706f72616c2e6170692e7265706c69636174696f6e2e76312e4e616d6573706163655265706c69636174696f6e436f6e66696712160a0e73656375726974795f746f6b656e18052001280912190a1164656c6574655f6261645f62696e61727918062001280912190a1170726f6d6f74655f6e616d65737061636518072001280822a3020a175570646174654e616d657370616365526573706f6e736512400a0e6e616d6573706163655f696e666f18012001280b32282e74656d706f72616c2e6170692e6e616d6573706163652e76312e4e616d657370616365496e666f123a0a06636f6e66696718022001280b322a2e74656d706f72616c2e6170692e6e616d6573706163652e76312e4e616d657370616365436f6e66696712530a127265706c69636174696f6e5f636f6e66696718032001280b32372e74656d706f72616c2e6170692e7265706c69636174696f6e2e76312e4e616d6573706163655265706c69636174696f6e436f6e66696712180a106661696c6f7665725f76657273696f6e180420012803121b0a1369735f676c6f62616c5f6e616d65737061636518052001280822460a194465707265636174654e616d6573706163655265717565737412110a096e616d65737061636518012001280912160a0e73656375726974795f746f6b656e180220012809221c0a1a4465707265636174654e616d657370616365526573706f6e7365229c060a1d5374617274576f726b666c6f77457865637574696f6e5265717565737412110a096e616d65737061636518012001280912130a0b776f726b666c6f775f6964180220012809123b0a0d776f726b666c6f775f7479706518032001280b32242e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e576f726b666c6f775479706512380a0a7461736b5f717565756518042001280b32242e74656d706f72616c2e6170692e7461736b71756575652e76312e5461736b5175657565122f0a05696e70757418052001280b32202e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5061796c6f61647312430a1a776f726b666c6f775f657865637574696f6e5f74696d656f757418062001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e420498df1f01123d0a14776f726b666c6f775f72756e5f74696d656f757418072001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e420498df1f01123e0a15776f726b666c6f775f7461736b5f74696d656f757418082001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e420498df1f0112100a086964656e7469747918092001280912120a0a726571756573745f6964180a20012809124e0a18776f726b666c6f775f69645f72657573655f706f6c696379180b2001280e322c2e74656d706f72616c2e6170692e656e756d732e76312e576f726b666c6f7749645265757365506f6c69637912390a0c72657472795f706f6c696379180c2001280b32232e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5265747279506f6c69637912150a0d63726f6e5f7363686564756c65180d20012809122a0a046d656d6f180e2001280b321c2e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e4d656d6f12430a117365617263685f61747472696275746573180f2001280b32282e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e53656172636841747472696275746573122e0a0668656164657218102001280b321e2e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e48656164657222300a1e5374617274576f726b666c6f77457865637574696f6e526573706f6e7365120e0a0672756e5f696418012001280922aa020a22476574576f726b666c6f77457865637574696f6e486973746f72795265717565737412110a096e616d657370616365180120012809123c0a09657865637574696f6e18022001280b32292e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e576f726b666c6f77457865637574696f6e12190a116d6178696d756d5f706167655f73697a6518032001280512170a0f6e6578745f706167655f746f6b656e18042001280c12160a0e776169745f6e65775f6576656e7418052001280812500a19686973746f72795f6576656e745f66696c7465725f7479706518062001280e322d2e74656d706f72616c2e6170692e656e756d732e76312e486973746f72794576656e7446696c7465725479706512150a0d736b69705f617263686976616c18072001280822ba010a23476574576f726b666c6f77457865637574696f6e486973746f7279526573706f6e736512310a07686973746f727918012001280b32202e74656d706f72616c2e6170692e686973746f72792e76312e486973746f727912350a0b7261775f686973746f727918022003280b32202e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e44617461426c6f6212170a0f6e6578745f706167655f746f6b656e18032001280c12100a0861726368697665641804200128082296010a1c506f6c6c576f726b666c6f775461736b51756575655265717565737412110a096e616d65737061636518012001280912380a0a7461736b5f717565756518022001280b32242e74656d706f72616c2e6170692e7461736b71756575652e76312e5461736b517565756512100a086964656e7469747918032001280912170a0f62696e6172795f636865636b73756d1804200128092295060a1d506f6c6c576f726b666c6f775461736b5175657565526573706f6e736512120a0a7461736b5f746f6b656e18012001280c12450a12776f726b666c6f775f657865637574696f6e18022001280b32292e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e576f726b666c6f77457865637574696f6e123b0a0d776f726b666c6f775f7479706518032001280b32242e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e576f726b666c6f775479706512210a1970726576696f75735f737461727465645f6576656e745f696418042001280312180a10737461727465645f6576656e745f6964180520012803120f0a07617474656d7074180620012805121a0a126261636b6c6f675f636f756e745f68696e7418072001280312310a07686973746f727918082001280b32202e74656d706f72616c2e6170692e686973746f72792e76312e486973746f727912170a0f6e6578745f706167655f746f6b656e18092001280c12330a057175657279180a2001280b32242e74656d706f72616c2e6170692e71756572792e76312e576f726b666c6f775175657279124b0a1d776f726b666c6f775f657865637574696f6e5f7461736b5f7175657565180b2001280b32242e74656d706f72616c2e6170692e7461736b71756575652e76312e5461736b517565756512380a0e7363686564756c65645f74696d65180c2001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70420490df1f0112360a0c737461727465645f74696d65180d2001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70420490df1f01125c0a0771756572696573180e2003280b324b2e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e506f6c6c576f726b666c6f775461736b5175657565526573706f6e73652e51756572696573456e7472791a540a0c51756572696573456e747279120b0a036b657918012001280912330a0576616c756518022001280b32242e74656d706f72616c2e6170692e71756572792e76312e576f726b666c6f7751756572793a0238012296040a23526573706f6e64576f726b666c6f775461736b436f6d706c657465645265717565737412120a0a7461736b5f746f6b656e18012001280c12320a08636f6d6d616e647318022003280b32202e74656d706f72616c2e6170692e636f6d6d616e642e76312e436f6d6d616e6412100a086964656e74697479180320012809124f0a11737469636b795f6174747269627574657318042001280b32342e74656d706f72616c2e6170692e7461736b71756575652e76312e537469636b79457865637574696f6e4174747269627574657312200a1872657475726e5f6e65775f776f726b666c6f775f7461736b18052001280812260a1e666f7263655f6372656174655f6e65775f776f726b666c6f775f7461736b18062001280812170a0f62696e6172795f636865636b73756d180720012809126d0a0d71756572795f726573756c747318082003280b32562e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e526573706f6e64576f726b666c6f775461736b436f6d706c65746564526571756573742e5175657279526573756c7473456e74727912110a096e616d6573706163651809200128091a5f0a115175657279526573756c7473456e747279120b0a036b657918012001280912390a0576616c756518022001280b322a2e74656d706f72616c2e6170692e71756572792e76312e576f726b666c6f775175657279526573756c743a023801227d0a24526573706f6e64576f726b666c6f775461736b436f6d706c65746564526573706f6e736512550a0d776f726b666c6f775f7461736b18012001280b323e2e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e506f6c6c576f726b666c6f775461736b5175657565526573706f6e736522e6010a20526573706f6e64576f726b666c6f775461736b4661696c65645265717565737412120a0a7461736b5f746f6b656e18012001280c123d0a05636175736518022001280e322e2e74656d706f72616c2e6170692e656e756d732e76312e576f726b666c6f775461736b4661696c6564436175736512310a076661696c75726518032001280b32202e74656d706f72616c2e6170692e6661696c7572652e76312e4661696c75726512100a086964656e7469747918042001280912170a0f62696e6172795f636865636b73756d18052001280912110a096e616d65737061636518062001280922230a21526573706f6e64576f726b666c6f775461736b4661696c6564526573706f6e736522c8010a1c506f6c6c41637469766974795461736b51756575655265717565737412110a096e616d65737061636518012001280912380a0a7461736b5f717565756518022001280b32242e74656d706f72616c2e6170692e7461736b71756575652e76312e5461736b517565756512100a086964656e7469747918032001280912490a137461736b5f71756575655f6d6574616461746118042001280b322c2e74656d706f72616c2e6170692e7461736b71756575652e76312e5461736b51756575654d65746164617461228c070a1d506f6c6c41637469766974795461736b5175657565526573706f6e736512120a0a7461736b5f746f6b656e18012001280c121a0a12776f726b666c6f775f6e616d657370616365180220012809123b0a0d776f726b666c6f775f7479706518032001280b32242e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e576f726b666c6f775479706512450a12776f726b666c6f775f657865637574696f6e18042001280b32292e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e576f726b666c6f77457865637574696f6e123b0a0d61637469766974795f7479706518052001280b32242e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e41637469766974795479706512130a0b61637469766974795f6964180620012809122e0a0668656164657218072001280b321e2e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e486561646572122f0a05696e70757418082001280b32202e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5061796c6f616473123b0a116865617274626561745f64657461696c7318092001280b32202e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5061796c6f61647312380a0e7363686564756c65645f74696d65180a2001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70420490df1f0112480a1e63757272656e745f617474656d70745f7363686564756c65645f74696d65180b2001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70420490df1f0112360a0c737461727465645f74696d65180c2001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70420490df1f01120f0a07617474656d7074180d2001280512420a197363686564756c655f746f5f636c6f73655f74696d656f7574180e2001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e420498df1f01123f0a1673746172745f746f5f636c6f73655f74696d656f7574180f2001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e420498df1f01123a0a116865617274626561745f74696d656f757418102001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e420498df1f0112390a0c72657472795f706f6c69637918112001280b32232e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5265747279506f6c6963792290010a225265636f726441637469766974795461736b4865617274626561745265717565737412120a0a7461736b5f746f6b656e18012001280c12310a0764657461696c7318022001280b32202e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5061796c6f61647312100a086964656e7469747918032001280912110a096e616d657370616365180420012809223f0a235265636f726441637469766974795461736b486561727462656174526573706f6e736512180a1063616e63656c5f72657175657374656418012001280822ba010a265265636f726441637469766974795461736b486561727462656174427949645265717565737412110a096e616d65737061636518012001280912130a0b776f726b666c6f775f6964180220012809120e0a0672756e5f696418032001280912130a0b61637469766974795f696418042001280912310a0764657461696c7318052001280b32202e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5061796c6f61647312100a086964656e7469747918062001280922430a275265636f726441637469766974795461736b48656172746265617442794964526573706f6e736512180a1063616e63656c5f7265717565737465641801200128082290010a23526573706f6e6441637469766974795461736b436f6d706c657465645265717565737412120a0a7461736b5f746f6b656e18012001280c12300a06726573756c7418022001280b32202e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5061796c6f61647312100a086964656e7469747918032001280912110a096e616d65737061636518042001280922260a24526573706f6e6441637469766974795461736b436f6d706c65746564526573706f6e736522ba010a27526573706f6e6441637469766974795461736b436f6d706c65746564427949645265717565737412110a096e616d65737061636518012001280912130a0b776f726b666c6f775f6964180220012809120e0a0672756e5f696418032001280912130a0b61637469766974795f696418042001280912300a06726573756c7418052001280b32202e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5061796c6f61647312100a086964656e74697479180620012809222a0a28526573706f6e6441637469766974795461736b436f6d706c6574656442794964526573706f6e7365228e010a20526573706f6e6441637469766974795461736b4661696c65645265717565737412120a0a7461736b5f746f6b656e18012001280c12310a076661696c75726518022001280b32202e74656d706f72616c2e6170692e6661696c7572652e76312e4661696c75726512100a086964656e7469747918032001280912110a096e616d65737061636518042001280922230a21526573706f6e6441637469766974795461736b4661696c6564526573706f6e736522b8010a24526573706f6e6441637469766974795461736b4661696c6564427949645265717565737412110a096e616d65737061636518012001280912130a0b776f726b666c6f775f6964180220012809120e0a0672756e5f696418032001280912130a0b61637469766974795f696418042001280912310a076661696c75726518052001280b32202e74656d706f72616c2e6170692e6661696c7572652e76312e4661696c75726512100a086964656e7469747918062001280922270a25526573706f6e6441637469766974795461736b4661696c656442794964526573706f6e73652290010a22526573706f6e6441637469766974795461736b43616e63656c65645265717565737412120a0a7461736b5f746f6b656e18012001280c12310a0764657461696c7318022001280b32202e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5061796c6f61647312100a086964656e7469747918032001280912110a096e616d65737061636518042001280922250a23526573706f6e6441637469766974795461736b43616e63656c6564526573706f6e736522ba010a26526573706f6e6441637469766974795461736b43616e63656c6564427949645265717565737412110a096e616d65737061636518012001280912130a0b776f726b666c6f775f6964180220012809120e0a0672756e5f696418032001280912130a0b61637469766974795f696418042001280912310a0764657461696c7318052001280b32202e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5061796c6f61647312100a086964656e7469747918062001280922290a27526573706f6e6441637469766974795461736b43616e63656c656442794964526573706f6e736522c7010a255265717565737443616e63656c576f726b666c6f77457865637574696f6e5265717565737412110a096e616d65737061636518012001280912450a12776f726b666c6f775f657865637574696f6e18022001280b32292e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e576f726b666c6f77457865637574696f6e12100a086964656e7469747918032001280912120a0a726571756573745f6964180420012809121e0a1666697273745f657865637574696f6e5f72756e5f696418052001280922280a265265717565737443616e63656c576f726b666c6f77457865637574696f6e526573706f6e736522a7020a1e5369676e616c576f726b666c6f77457865637574696f6e5265717565737412110a096e616d65737061636518012001280912450a12776f726b666c6f775f657865637574696f6e18022001280b32292e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e576f726b666c6f77457865637574696f6e12130a0b7369676e616c5f6e616d65180320012809122f0a05696e70757418042001280b32202e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5061796c6f61647312100a086964656e7469747918052001280912120a0a726571756573745f6964180620012809120f0a07636f6e74726f6c180720012809122e0a0668656164657218082001280b321e2e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e48656164657222210a1f5369676e616c576f726b666c6f77457865637574696f6e526573706f6e73652284070a275369676e616c576974685374617274576f726b666c6f77457865637574696f6e5265717565737412110a096e616d65737061636518012001280912130a0b776f726b666c6f775f6964180220012809123b0a0d776f726b666c6f775f7479706518032001280b32242e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e576f726b666c6f775479706512380a0a7461736b5f717565756518042001280b32242e74656d706f72616c2e6170692e7461736b71756575652e76312e5461736b5175657565122f0a05696e70757418052001280b32202e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5061796c6f61647312430a1a776f726b666c6f775f657865637574696f6e5f74696d656f757418062001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e420498df1f01123d0a14776f726b666c6f775f72756e5f74696d656f757418072001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e420498df1f01123e0a15776f726b666c6f775f7461736b5f74696d656f757418082001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e420498df1f0112100a086964656e7469747918092001280912120a0a726571756573745f6964180a20012809124e0a18776f726b666c6f775f69645f72657573655f706f6c696379180b2001280e322c2e74656d706f72616c2e6170692e656e756d732e76312e576f726b666c6f7749645265757365506f6c69637912130a0b7369676e616c5f6e616d65180c2001280912360a0c7369676e616c5f696e707574180d2001280b32202e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5061796c6f616473120f0a07636f6e74726f6c180e2001280912390a0c72657472795f706f6c696379180f2001280b32232e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5265747279506f6c69637912150a0d63726f6e5f7363686564756c65181020012809122a0a046d656d6f18112001280b321c2e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e4d656d6f12430a117365617263685f6174747269627574657318122001280b32282e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e53656172636841747472696275746573122e0a0668656164657218132001280b321e2e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e486561646572223a0a285369676e616c576974685374617274576f726b666c6f77457865637574696f6e526573706f6e7365120e0a0672756e5f69641801200128092289020a1d5265736574576f726b666c6f77457865637574696f6e5265717565737412110a096e616d65737061636518012001280912450a12776f726b666c6f775f657865637574696f6e18022001280b32292e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e576f726b666c6f77457865637574696f6e120e0a06726561736f6e18032001280912250a1d776f726b666c6f775f7461736b5f66696e6973685f6576656e745f696418042001280312120a0a726571756573745f696418052001280912430a1272657365745f72656170706c795f7479706518062001280e32272e74656d706f72616c2e6170692e656e756d732e76312e526573657452656170706c795479706522300a1e5265736574576f726b666c6f77457865637574696f6e526573706f6e7365120e0a0672756e5f696418012001280922f2010a215465726d696e617465576f726b666c6f77457865637574696f6e5265717565737412110a096e616d65737061636518012001280912450a12776f726b666c6f775f657865637574696f6e18022001280b32292e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e576f726b666c6f77457865637574696f6e120e0a06726561736f6e18032001280912310a0764657461696c7318042001280b32202e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5061796c6f61647312100a086964656e74697479180520012809121e0a1666697273745f657865637574696f6e5f72756e5f696418062001280922240a225465726d696e617465576f726b666c6f77457865637574696f6e526573706f6e736522c9020a214c6973744f70656e576f726b666c6f77457865637574696f6e735265717565737412110a096e616d65737061636518012001280912190a116d6178696d756d5f706167655f73697a6518022001280512170a0f6e6578745f706167655f746f6b656e18032001280c12420a1173746172745f74696d655f66696c74657218042001280b32272e74656d706f72616c2e6170692e66696c7465722e76312e537461727454696d6546696c746572124b0a10657865637574696f6e5f66696c74657218052001280b322f2e74656d706f72616c2e6170692e66696c7465722e76312e576f726b666c6f77457865637574696f6e46696c746572480012410a0b747970655f66696c74657218062001280b322a2e74656d706f72616c2e6170692e66696c7465722e76312e576f726b666c6f775479706546696c746572480042090a0766696c746572732282010a224c6973744f70656e576f726b666c6f77457865637574696f6e73526573706f6e736512430a0a657865637574696f6e7318012003280b322f2e74656d706f72616c2e6170692e776f726b666c6f772e76312e576f726b666c6f77457865637574696f6e496e666f12170a0f6e6578745f706167655f746f6b656e18022001280c228a030a234c697374436c6f736564576f726b666c6f77457865637574696f6e735265717565737412110a096e616d65737061636518012001280912190a116d6178696d756d5f706167655f73697a6518022001280512170a0f6e6578745f706167655f746f6b656e18032001280c12420a1173746172745f74696d655f66696c74657218042001280b32272e74656d706f72616c2e6170692e66696c7465722e76312e537461727454696d6546696c746572124b0a10657865637574696f6e5f66696c74657218052001280b322f2e74656d706f72616c2e6170692e66696c7465722e76312e576f726b666c6f77457865637574696f6e46696c746572480012410a0b747970655f66696c74657218062001280b322a2e74656d706f72616c2e6170692e66696c7465722e76312e576f726b666c6f775479706546696c7465724800123d0a0d7374617475735f66696c74657218072001280b32242e74656d706f72616c2e6170692e66696c7465722e76312e53746174757346696c746572480042090a0766696c746572732284010a244c697374436c6f736564576f726b666c6f77457865637574696f6e73526573706f6e736512430a0a657865637574696f6e7318012003280b322f2e74656d706f72616c2e6170692e776f726b666c6f772e76312e576f726b666c6f77457865637574696f6e496e666f12170a0f6e6578745f706167655f746f6b656e18022001280c226d0a1d4c697374576f726b666c6f77457865637574696f6e735265717565737412110a096e616d65737061636518012001280912110a09706167655f73697a6518022001280512170a0f6e6578745f706167655f746f6b656e18032001280c120d0a057175657279180420012809227e0a1e4c697374576f726b666c6f77457865637574696f6e73526573706f6e736512430a0a657865637574696f6e7318012003280b322f2e74656d706f72616c2e6170692e776f726b666c6f772e76312e576f726b666c6f77457865637574696f6e496e666f12170a0f6e6578745f706167655f746f6b656e18022001280c22750a254c6973744172636869766564576f726b666c6f77457865637574696f6e735265717565737412110a096e616d65737061636518012001280912110a09706167655f73697a6518022001280512170a0f6e6578745f706167655f746f6b656e18032001280c120d0a0571756572791804200128092286010a264c6973744172636869766564576f726b666c6f77457865637574696f6e73526573706f6e736512430a0a657865637574696f6e7318012003280b322f2e74656d706f72616c2e6170692e776f726b666c6f772e76312e576f726b666c6f77457865637574696f6e496e666f12170a0f6e6578745f706167655f746f6b656e18022001280c226d0a1d5363616e576f726b666c6f77457865637574696f6e735265717565737412110a096e616d65737061636518012001280912110a09706167655f73697a6518022001280512170a0f6e6578745f706167655f746f6b656e18032001280c120d0a057175657279180420012809227e0a1e5363616e576f726b666c6f77457865637574696f6e73526573706f6e736512430a0a657865637574696f6e7318012003280b322f2e74656d706f72616c2e6170692e776f726b666c6f772e76312e576f726b666c6f77457865637574696f6e496e666f12170a0f6e6578745f706167655f746f6b656e18022001280c22420a1e436f756e74576f726b666c6f77457865637574696f6e735265717565737412110a096e616d657370616365180120012809120d0a05717565727918022001280922300a1f436f756e74576f726b666c6f77457865637574696f6e73526573706f6e7365120d0a05636f756e74180120012803221c0a1a476574536561726368417474726962757465735265717565737422c9010a1b47657453656172636841747472696275746573526573706f6e736512540a046b65797318012003280b32462e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e47657453656172636841747472696275746573526573706f6e73652e4b657973456e7472791a540a094b657973456e747279120b0a036b657918012001280912360a0576616c756518022001280e32272e74656d706f72616c2e6170692e656e756d732e76312e496e646578656456616c7565547970653a02380122de010a20526573706f6e6451756572795461736b436f6d706c657465645265717565737412120a0a7461736b5f746f6b656e18012001280c123e0a0e636f6d706c657465645f7479706518022001280e32262e74656d706f72616c2e6170692e656e756d732e76312e5175657279526573756c745479706512360a0c71756572795f726573756c7418032001280b32202e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5061796c6f61647312150a0d6572726f725f6d65737361676518042001280912110a096e616d6573706163651806200128094a040805100622230a21526573706f6e6451756572795461736b436f6d706c65746564526573706f6e7365226e0a1b5265736574537469636b795461736b51756575655265717565737412110a096e616d657370616365180120012809123c0a09657865637574696f6e18022001280b32292e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e576f726b666c6f77457865637574696f6e221e0a1c5265736574537469636b795461736b5175657565526573706f6e73652299020a145175657279576f726b666c6f775265717565737412110a096e616d657370616365180120012809123c0a09657865637574696f6e18022001280b32292e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e576f726b666c6f77457865637574696f6e12330a05717565727918032001280b32242e74656d706f72616c2e6170692e71756572792e76312e576f726b666c6f775175657279124b0a1671756572795f72656a6563745f636f6e646974696f6e18042001280e322b2e74656d706f72616c2e6170692e656e756d732e76312e517565727952656a656374436f6e646974696f6e122e0a0668656164657218052001280b321e2e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e486561646572228d010a155175657279576f726b666c6f77526573706f6e736512360a0c71756572795f726573756c7418012001280b32202e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5061796c6f616473123c0a0e71756572795f72656a656374656418022001280b32242e74656d706f72616c2e6170692e71756572792e76312e517565727952656a656374656422730a204465736372696265576f726b666c6f77457865637574696f6e5265717565737412110a096e616d657370616365180120012809123c0a09657865637574696f6e18022001280b32292e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e576f726b666c6f77457865637574696f6e22dc020a214465736372696265576f726b666c6f77457865637574696f6e526573706f6e7365124b0a10657865637574696f6e5f636f6e66696718012001280b32312e74656d706f72616c2e6170692e776f726b666c6f772e76312e576f726b666c6f77457865637574696f6e436f6e66696712500a17776f726b666c6f775f657865637574696f6e5f696e666f18022001280b322f2e74656d706f72616c2e6170692e776f726b666c6f772e76312e576f726b666c6f77457865637574696f6e496e666f12490a1270656e64696e675f6163746976697469657318032003280b322d2e74656d706f72616c2e6170692e776f726b666c6f772e76312e50656e64696e674163746976697479496e666f124d0a1070656e64696e675f6368696c6472656e18042003280b32332e74656d706f72616c2e6170692e776f726b666c6f772e76312e50656e64696e674368696c64457865637574696f6e496e666f22c9010a1844657363726962655461736b51756575655265717565737412110a096e616d65737061636518012001280912380a0a7461736b5f717565756518022001280b32242e74656d706f72616c2e6170692e7461736b71756575652e76312e5461736b5175657565123d0a0f7461736b5f71756575655f7479706518032001280e32242e74656d706f72616c2e6170692e656e756d732e76312e5461736b51756575655479706512210a19696e636c7564655f7461736b5f71756575655f737461747573180420012808229a010a1944657363726962655461736b5175657565526573706f6e736512360a07706f6c6c65727318012003280b32252e74656d706f72616c2e6170692e7461736b71756575652e76312e506f6c6c6572496e666f12450a117461736b5f71756575655f73746174757318022001280b322a2e74656d706f72616c2e6170692e7461736b71756575652e76312e5461736b517565756553746174757322170a15476574436c7573746572496e666f52657175657374228b030a16476574436c7573746572496e666f526573706f6e736512680a11737570706f727465645f636c69656e747318012003280b324d2e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e476574436c7573746572496e666f526573706f6e73652e537570706f72746564436c69656e7473456e74727912160a0e7365727665725f76657273696f6e18022001280912120a0a636c75737465725f6964180320012809123a0a0c76657273696f6e5f696e666f18042001280b32242e74656d706f72616c2e6170692e76657273696f6e2e76312e56657273696f6e496e666f12140a0c636c75737465725f6e616d65180520012809121b0a13686973746f72795f73686172645f636f756e7418062001280512190a1170657273697374656e63655f73746f726518072001280912180a107669736962696c6974795f73746f72651808200128091a370a15537570706f72746564436c69656e7473456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a023801226d0a1e4c6973745461736b5175657565506172746974696f6e735265717565737412110a096e616d65737061636518012001280912380a0a7461736b5f717565756518022001280b32242e74656d706f72616c2e6170692e7461736b71756575652e76312e5461736b517565756522df010a1f4c6973745461736b5175657565506172746974696f6e73526573706f6e7365125d0a1e61637469766974795f7461736b5f71756575655f706172746974696f6e7318012003280b32352e74656d706f72616c2e6170692e7461736b71756575652e76312e5461736b5175657565506172746974696f6e4d65746164617461125d0a1e776f726b666c6f775f7461736b5f71756575655f706172746974696f6e7318022003280b32352e74656d706f72616c2e6170692e7461736b71756575652e76312e5461736b5175657565506172746974696f6e4d6574616461746142ba010a22696f2e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e7631421452657175657374526573706f6e736550726f746f50015a35676f2e74656d706f72616c2e696f2f6170692f776f726b666c6f77736572766963652f76313b776f726b666c6f7773657276696365aa021f54656d706f72616c2e4170692e576f726b666c6f77536572766963652e5631ea022254656d706f72616c3a3a4170693a3a576f726b666c6f77536572766963653a3a5631620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

