<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/services/customer_manager_link_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V1\Services;

class CustomerManagerLinkService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\CustomerManagerLink::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af10b0a44676f6f676c652f6164732f676f6f676c656164732f76312f73" .
            "657276696365732f637573746f6d65725f6d616e616765725f6c696e6b5f" .
            "736572766963652e70726f746f1220676f6f676c652e6164732e676f6f67" .
            "6c656164732e76312e73657276696365731a1c676f6f676c652f6170692f" .
            "616e6e6f746174696f6e732e70726f746f1a20676f6f676c652f70726f74" .
            "6f6275662f6669656c645f6d61736b2e70726f746f1a17676f6f676c652f" .
            "6170692f636c69656e742e70726f746f22360a1d476574437573746f6d65" .
            "724d616e616765724c696e6b5265717565737412150a0d7265736f757263" .
            "655f6e616d65180120012809228b010a204d7574617465437573746f6d65" .
            "724d616e616765724c696e6b5265717565737412130a0b637573746f6d65" .
            "725f696418012001280912520a0a6f7065726174696f6e7318022003280b" .
            "323e2e676f6f676c652e6164732e676f6f676c656164732e76312e736572" .
            "76696365732e437573746f6d65724d616e616765724c696e6b4f70657261" .
            "74696f6e22a6010a1c437573746f6d65724d616e616765724c696e6b4f70" .
            "65726174696f6e122f0a0b7570646174655f6d61736b18042001280b321a" .
            "2e676f6f676c652e70726f746f6275662e4669656c644d61736b12480a06" .
            "75706461746518022001280b32362e676f6f676c652e6164732e676f6f67" .
            "6c656164732e76312e7265736f75726365732e437573746f6d65724d616e" .
            "616765724c696e6b4800420b0a096f7065726174696f6e22770a214d7574" .
            "617465437573746f6d65724d616e616765724c696e6b526573706f6e7365" .
            "12520a07726573756c747318012003280b32412e676f6f676c652e616473" .
            "2e676f6f676c656164732e76312e73657276696365732e4d757461746543" .
            "7573746f6d65724d616e616765724c696e6b526573756c7422380a1f4d75" .
            "74617465437573746f6d65724d616e616765724c696e6b526573756c7412" .
            "150a0d7265736f757263655f6e616d6518012001280932fa030a1a437573" .
            "746f6d65724d616e616765724c696e6b5365727669636512d1010a164765" .
            "74437573746f6d65724d616e616765724c696e6b123f2e676f6f676c652e" .
            "6164732e676f6f676c656164732e76312e73657276696365732e47657443" .
            "7573746f6d65724d616e616765724c696e6b526571756573741a362e676f" .
            "6f676c652e6164732e676f6f676c656164732e76312e7265736f75726365" .
            "732e437573746f6d65724d616e616765724c696e6b223e82d3e493023812" .
            "362f76312f7b7265736f757263655f6e616d653d637573746f6d6572732f" .
            "2a2f637573746f6d65724d616e616765724c696e6b732f2a7d12ea010a19" .
            "4d7574617465437573746f6d65724d616e616765724c696e6b12422e676f" .
            "6f676c652e6164732e676f6f676c656164732e76312e7365727669636573" .
            "2e4d7574617465437573746f6d65724d616e616765724c696e6b52657175" .
            "6573741a432e676f6f676c652e6164732e676f6f676c656164732e76312e" .
            "73657276696365732e4d7574617465437573746f6d65724d616e61676572" .
            "4c696e6b526573706f6e7365224482d3e493023e22392f76312f63757374" .
            "6f6d6572732f7b637573746f6d65725f69643d2a7d2f637573746f6d6572" .
            "4d616e616765724c696e6b733a6d75746174653a012a1a1bca4118676f6f" .
            "676c656164732e676f6f676c65617069732e636f6d4286020a24636f6d2e" .
            "676f6f676c652e6164732e676f6f676c656164732e76312e736572766963" .
            "6573421f437573746f6d65724d616e616765724c696e6b53657276696365" .
            "50726f746f50015a48676f6f676c652e676f6c616e672e6f72672f67656e" .
            "70726f746f2f676f6f676c65617069732f6164732f676f6f676c65616473" .
            "2f76312f73657276696365733b7365727669636573a20203474141aa0220" .
            "476f6f676c652e4164732e476f6f676c654164732e56312e536572766963" .
            "6573ca0220476f6f676c655c4164735c476f6f676c654164735c56315c53" .
            "65727669636573ea0224476f6f676c653a3a4164733a3a476f6f676c6541" .
            "64733a3a56313a3a5365727669636573620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

