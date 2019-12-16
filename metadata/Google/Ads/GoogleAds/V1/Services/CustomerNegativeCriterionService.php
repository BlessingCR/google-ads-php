<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/services/customer_negative_criterion_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V1\Services;

class CustomerNegativeCriterionService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\CustomerNegativeCriterion::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a940d0a4a676f6f676c652f6164732f676f6f676c656164732f76312f73" .
            "657276696365732f637573746f6d65725f6e656761746976655f63726974" .
            "6572696f6e5f736572766963652e70726f746f1220676f6f676c652e6164" .
            "732e676f6f676c656164732e76312e73657276696365731a1c676f6f676c" .
            "652f6170692f616e6e6f746174696f6e732e70726f746f1a17676f6f676c" .
            "652f7270632f7374617475732e70726f746f1a17676f6f676c652f617069" .
            "2f636c69656e742e70726f746f223c0a23476574437573746f6d65724e65" .
            "676174697665437269746572696f6e5265717565737412150a0d7265736f" .
            "757263655f6e616d6518012001280922c6010a254d757461746543757374" .
            "6f6d65724e6567617469766543726974657269615265717565737412130a" .
            "0b637573746f6d65725f696418012001280912580a0a6f7065726174696f" .
            "6e7318022003280b32442e676f6f676c652e6164732e676f6f676c656164" .
            "732e76312e73657276696365732e437573746f6d65724e65676174697665" .
            "437269746572696f6e4f7065726174696f6e12170a0f7061727469616c5f" .
            "6661696c75726518032001280812150a0d76616c69646174655f6f6e6c79" .
            "1804200128082293010a22437573746f6d65724e65676174697665437269" .
            "746572696f6e4f7065726174696f6e124e0a066372656174651801200128" .
            "0b323c2e676f6f676c652e6164732e676f6f676c656164732e76312e7265" .
            "736f75726365732e437573746f6d65724e65676174697665437269746572" .
            "696f6e480012100a0672656d6f76651802200128094800420b0a096f7065" .
            "726174696f6e22b4010a264d7574617465437573746f6d65724e65676174" .
            "6976654372697465726961526573706f6e736512310a157061727469616c" .
            "5f6661696c7572655f6572726f7218032001280b32122e676f6f676c652e" .
            "7270632e53746174757312570a07726573756c747318022003280b32462e" .
            "676f6f676c652e6164732e676f6f676c656164732e76312e736572766963" .
            "65732e4d7574617465437573746f6d65724e656761746976654372697465" .
            "726961526573756c74223d0a244d7574617465437573746f6d65724e6567" .
            "61746976654372697465726961526573756c7412150a0d7265736f757263" .
            "655f6e616d6518012001280932a9040a20437573746f6d65724e65676174" .
            "697665437269746572696f6e5365727669636512e7010a1c476574437573" .
            "746f6d65724e65676174697665437269746572696f6e12452e676f6f676c" .
            "652e6164732e676f6f676c656164732e76312e73657276696365732e4765" .
            "74437573746f6d65724e65676174697665437269746572696f6e52657175" .
            "6573741a3c2e676f6f676c652e6164732e676f6f676c656164732e76312e" .
            "7265736f75726365732e437573746f6d65724e6567617469766543726974" .
            "6572696f6e224282d3e493023c123a2f76312f7b7265736f757263655f6e" .
            "616d653d637573746f6d6572732f2a2f637573746f6d65724e6567617469" .
            "766543726974657269612f2a7d12fd010a1e4d7574617465437573746f6d" .
            "65724e65676174697665437269746572696112472e676f6f676c652e6164" .
            "732e676f6f676c656164732e76312e73657276696365732e4d7574617465" .
            "437573746f6d65724e656761746976654372697465726961526571756573" .
            "741a482e676f6f676c652e6164732e676f6f676c656164732e76312e7365" .
            "7276696365732e4d7574617465437573746f6d65724e6567617469766543" .
            "72697465726961526573706f6e7365224882d3e4930242223d2f76312f63" .
            "7573746f6d6572732f7b637573746f6d65725f69643d2a7d2f637573746f" .
            "6d65724e6567617469766543726974657269613a6d75746174653a012a1a" .
            "1bca4118676f6f676c656164732e676f6f676c65617069732e636f6d428c" .
            "020a24636f6d2e676f6f676c652e6164732e676f6f676c656164732e7631" .
            "2e73657276696365734225437573746f6d65724e65676174697665437269" .
            "746572696f6e5365727669636550726f746f50015a48676f6f676c652e67" .
            "6f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f" .
            "6164732f676f6f676c656164732f76312f73657276696365733b73657276" .
            "69636573a20203474141aa0220476f6f676c652e4164732e476f6f676c65" .
            "4164732e56312e5365727669636573ca0220476f6f676c655c4164735c47" .
            "6f6f676c654164735c56315c5365727669636573ea0224476f6f676c653a" .
            "3a4164733a3a476f6f676c654164733a3a56313a3a536572766963657362" .
            "0670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

