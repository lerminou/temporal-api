<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/workflowservice/v1/service.proto

namespace GPBMetadata\Temporal\Api\Workflowservice\V1;

class Service
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa73f0a2d74656d706f72616c2f6170692f776f726b666c6f77736572766963652f76312f736572766963652e70726f746f121f74656d706f72616c2e6170692e776f726b666c6f77736572766963652e763132973d0a0f576f726b666c6f7753657276696365128c010a1152656769737465724e616d65737061636512392e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e52656769737465724e616d657370616365526571756573741a3a2e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e52656769737465724e616d657370616365526573706f6e73652200128c010a1144657363726962654e616d65737061636512392e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e44657363726962654e616d657370616365526571756573741a3a2e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e44657363726962654e616d657370616365526573706f6e736522001283010a0e4c6973744e616d6573706163657312362e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e4c6973744e616d65737061636573526571756573741a372e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e4c6973744e616d65737061636573526573706f6e736522001286010a0f5570646174654e616d65737061636512372e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e5570646174654e616d657370616365526571756573741a382e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e5570646174654e616d657370616365526573706f6e73652200128f010a124465707265636174654e616d657370616365123a2e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e4465707265636174654e616d657370616365526571756573741a3b2e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e4465707265636174654e616d657370616365526573706f6e73652200129b010a165374617274576f726b666c6f77457865637574696f6e123e2e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e5374617274576f726b666c6f77457865637574696f6e526571756573741a3f2e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e5374617274576f726b666c6f77457865637574696f6e526573706f6e7365220012aa010a1b476574576f726b666c6f77457865637574696f6e486973746f727912432e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e476574576f726b666c6f77457865637574696f6e486973746f7279526571756573741a442e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e476574576f726b666c6f77457865637574696f6e486973746f7279526573706f6e7365220012bf010a22476574576f726b666c6f77457865637574696f6e486973746f727952657665727365124a2e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e476574576f726b666c6f77457865637574696f6e486973746f727952657665727365526571756573741a4b2e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e476574576f726b666c6f77457865637574696f6e486973746f727952657665727365526573706f6e736522001298010a15506f6c6c576f726b666c6f775461736b5175657565123d2e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e506f6c6c576f726b666c6f775461736b5175657565526571756573741a3e2e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e506f6c6c576f726b666c6f775461736b5175657565526573706f6e7365220012ad010a1c526573706f6e64576f726b666c6f775461736b436f6d706c6574656412442e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e526573706f6e64576f726b666c6f775461736b436f6d706c65746564526571756573741a452e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e526573706f6e64576f726b666c6f775461736b436f6d706c65746564526573706f6e7365220012a4010a19526573706f6e64576f726b666c6f775461736b4661696c656412412e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e526573706f6e64576f726b666c6f775461736b4661696c6564526571756573741a422e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e526573706f6e64576f726b666c6f775461736b4661696c6564526573706f6e736522001298010a15506f6c6c41637469766974795461736b5175657565123d2e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e506f6c6c41637469766974795461736b5175657565526571756573741a3e2e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e506f6c6c41637469766974795461736b5175657565526573706f6e7365220012aa010a1b5265636f726441637469766974795461736b48656172746265617412432e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e5265636f726441637469766974795461736b486561727462656174526571756573741a442e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e5265636f726441637469766974795461736b486561727462656174526573706f6e7365220012b6010a1f5265636f726441637469766974795461736b4865617274626561744279496412472e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e5265636f726441637469766974795461736b48656172746265617442794964526571756573741a482e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e5265636f726441637469766974795461736b48656172746265617442794964526573706f6e7365220012ad010a1c526573706f6e6441637469766974795461736b436f6d706c6574656412442e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e526573706f6e6441637469766974795461736b436f6d706c65746564526571756573741a452e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e526573706f6e6441637469766974795461736b436f6d706c65746564526573706f6e7365220012b9010a20526573706f6e6441637469766974795461736b436f6d706c657465644279496412482e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e526573706f6e6441637469766974795461736b436f6d706c6574656442794964526571756573741a492e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e526573706f6e6441637469766974795461736b436f6d706c6574656442794964526573706f6e7365220012a4010a19526573706f6e6441637469766974795461736b4661696c656412412e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e526573706f6e6441637469766974795461736b4661696c6564526571756573741a422e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e526573706f6e6441637469766974795461736b4661696c6564526573706f6e7365220012b0010a1d526573706f6e6441637469766974795461736b4661696c65644279496412452e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e526573706f6e6441637469766974795461736b4661696c656442794964526571756573741a462e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e526573706f6e6441637469766974795461736b4661696c656442794964526573706f6e7365220012aa010a1b526573706f6e6441637469766974795461736b43616e63656c656412432e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e526573706f6e6441637469766974795461736b43616e63656c6564526571756573741a442e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e526573706f6e6441637469766974795461736b43616e63656c6564526573706f6e7365220012b6010a1f526573706f6e6441637469766974795461736b43616e63656c65644279496412472e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e526573706f6e6441637469766974795461736b43616e63656c656442794964526571756573741a482e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e526573706f6e6441637469766974795461736b43616e63656c656442794964526573706f6e7365220012b3010a1e5265717565737443616e63656c576f726b666c6f77457865637574696f6e12462e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e5265717565737443616e63656c576f726b666c6f77457865637574696f6e526571756573741a472e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e5265717565737443616e63656c576f726b666c6f77457865637574696f6e526573706f6e73652200129e010a175369676e616c576f726b666c6f77457865637574696f6e123f2e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e5369676e616c576f726b666c6f77457865637574696f6e526571756573741a402e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e5369676e616c576f726b666c6f77457865637574696f6e526573706f6e7365220012b9010a205369676e616c576974685374617274576f726b666c6f77457865637574696f6e12482e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e5369676e616c576974685374617274576f726b666c6f77457865637574696f6e526571756573741a492e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e5369676e616c576974685374617274576f726b666c6f77457865637574696f6e526573706f6e73652200129b010a165265736574576f726b666c6f77457865637574696f6e123e2e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e5265736574576f726b666c6f77457865637574696f6e526571756573741a3f2e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e5265736574576f726b666c6f77457865637574696f6e526573706f6e7365220012a7010a1a5465726d696e617465576f726b666c6f77457865637574696f6e12422e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e5465726d696e617465576f726b666c6f77457865637574696f6e526571756573741a432e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e5465726d696e617465576f726b666c6f77457865637574696f6e526573706f6e7365220012a7010a1a4c6973744f70656e576f726b666c6f77457865637574696f6e7312422e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e4c6973744f70656e576f726b666c6f77457865637574696f6e73526571756573741a432e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e4c6973744f70656e576f726b666c6f77457865637574696f6e73526573706f6e7365220012ad010a1c4c697374436c6f736564576f726b666c6f77457865637574696f6e7312442e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e4c697374436c6f736564576f726b666c6f77457865637574696f6e73526571756573741a452e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e4c697374436c6f736564576f726b666c6f77457865637574696f6e73526573706f6e73652200129b010a164c697374576f726b666c6f77457865637574696f6e73123e2e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e4c697374576f726b666c6f77457865637574696f6e73526571756573741a3f2e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e4c697374576f726b666c6f77457865637574696f6e73526573706f6e7365220012b3010a1e4c6973744172636869766564576f726b666c6f77457865637574696f6e7312462e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e4c6973744172636869766564576f726b666c6f77457865637574696f6e73526571756573741a472e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e4c6973744172636869766564576f726b666c6f77457865637574696f6e73526573706f6e73652200129b010a165363616e576f726b666c6f77457865637574696f6e73123e2e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e5363616e576f726b666c6f77457865637574696f6e73526571756573741a3f2e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e5363616e576f726b666c6f77457865637574696f6e73526573706f6e73652200129e010a17436f756e74576f726b666c6f77457865637574696f6e73123f2e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e436f756e74576f726b666c6f77457865637574696f6e73526571756573741a402e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e436f756e74576f726b666c6f77457865637574696f6e73526573706f6e736522001292010a1347657453656172636841747472696275746573123b2e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e47657453656172636841747472696275746573526571756573741a3c2e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e47657453656172636841747472696275746573526573706f6e7365220012a4010a19526573706f6e6451756572795461736b436f6d706c6574656412412e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e526573706f6e6451756572795461736b436f6d706c65746564526571756573741a422e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e526573706f6e6451756572795461736b436f6d706c65746564526573706f6e736522001295010a145265736574537469636b795461736b5175657565123c2e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e5265736574537469636b795461736b5175657565526571756573741a3d2e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e5265736574537469636b795461736b5175657565526573706f6e736522001280010a0d5175657279576f726b666c6f7712352e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e5175657279576f726b666c6f77526571756573741a362e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e5175657279576f726b666c6f77526573706f6e7365220012a4010a194465736372696265576f726b666c6f77457865637574696f6e12412e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e4465736372696265576f726b666c6f77457865637574696f6e526571756573741a422e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e4465736372696265576f726b666c6f77457865637574696f6e526573706f6e73652200128c010a1144657363726962655461736b517565756512392e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e44657363726962655461736b5175657565526571756573741a3a2e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e44657363726962655461736b5175657565526573706f6e736522001283010a0e476574436c7573746572496e666f12362e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e476574436c7573746572496e666f526571756573741a372e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e476574436c7573746572496e666f526573706f6e736522001280010a0d47657453797374656d496e666f12352e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e47657453797374656d496e666f526571756573741a362e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e47657453797374656d496e666f526573706f6e73652200129e010a174c6973745461736b5175657565506172746974696f6e73123f2e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e4c6973745461736b5175657565506172746974696f6e73526571756573741a402e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e4c6973745461736b5175657565506172746974696f6e73526573706f6e736522001283010a0e4372656174655363686564756c6512362e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e4372656174655363686564756c65526571756573741a372e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e4372656174655363686564756c65526573706f6e736522001289010a1044657363726962655363686564756c6512382e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e44657363726962655363686564756c65526571756573741a392e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e44657363726962655363686564756c65526573706f6e736522001283010a0e5570646174655363686564756c6512362e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e5570646174655363686564756c65526571756573741a372e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e5570646174655363686564756c65526573706f6e736522001280010a0d50617463685363686564756c6512352e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e50617463685363686564756c65526571756573741a362e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e50617463685363686564756c65526573706f6e7365220012a4010a194c6973745363686564756c654d61746368696e6754696d657312412e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e4c6973745363686564756c654d61746368696e6754696d6573526571756573741a422e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e4c6973745363686564756c654d61746368696e6754696d6573526573706f6e736522001283010a0e44656c6574655363686564756c6512362e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e44656c6574655363686564756c65526571756573741a372e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e44656c6574655363686564756c65526573706f6e736522001280010a0d4c6973745363686564756c657312352e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e4c6973745363686564756c6573526571756573741a362e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e4c6973745363686564756c6573526573706f6e7365220012aa010a1b557064617465576f726b65724275696c6449644f72646572696e6712432e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e557064617465576f726b65724275696c6449644f72646572696e67526571756573741a442e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e557064617465576f726b65724275696c6449644f72646572696e67526573706f6e7365220012a1010a18476574576f726b65724275696c6449644f72646572696e6712402e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e476574576f726b65724275696c6449644f72646572696e67526571756573741a412e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e76312e476574576f726b65724275696c6449644f72646572696e67526573706f6e7365220042b2010a22696f2e74656d706f72616c2e6170692e776f726b666c6f77736572766963652e7631420c5365727669636550726f746f50015a35676f2e74656d706f72616c2e696f2f6170692f776f726b666c6f77736572766963652f76313b776f726b666c6f7773657276696365aa021f54656d706f72616c2e4170692e576f726b666c6f77536572766963652e5631ea022254656d706f72616c3a3a4170693a3a576f726b666c6f77536572766963653a3a5631620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

