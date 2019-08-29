<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace GPBMetadata\Google\Cloud\Asset\V1;

class AssetService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Cloud\Asset\V1\Assets::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af40b0a29676f6f676c652f636c6f75642f61737365742f76312f617373" .
            "65745f736572766963652e70726f746f1215676f6f676c652e636c6f7564" .
            "2e61737365742e76311a22676f6f676c652f636c6f75642f61737365742f" .
            "76312f6173736574732e70726f746f1a23676f6f676c652f6c6f6e677275" .
            "6e6e696e672f6f7065726174696f6e732e70726f746f1a1f676f6f676c65" .
            "2f70726f746f6275662f74696d657374616d702e70726f746f22df010a13" .
            "4578706f727441737365747352657175657374120e0a06706172656e7418" .
            "0120012809122d0a09726561645f74696d6518022001280b321a2e676f6f" .
            "676c652e70726f746f6275662e54696d657374616d7012130a0b61737365" .
            "745f747970657318032003280912380a0c636f6e74656e745f7479706518" .
            "042001280e32222e676f6f676c652e636c6f75642e61737365742e76312e" .
            "436f6e74656e7454797065123a0a0d6f75747075745f636f6e6669671805" .
            "2001280b32232e676f6f676c652e636c6f75642e61737365742e76312e4f" .
            "7574707574436f6e6669672281010a144578706f72744173736574735265" .
            "73706f6e7365122d0a09726561645f74696d6518012001280b321a2e676f" .
            "6f676c652e70726f746f6275662e54696d657374616d70123a0a0d6f7574" .
            "7075745f636f6e66696718022001280b32232e676f6f676c652e636c6f75" .
            "642e61737365742e76312e4f7574707574436f6e66696722ba010a1c4261" .
            "746368476574417373657473486973746f727952657175657374120e0a06" .
            "706172656e7418012001280912130a0b61737365745f6e616d6573180220" .
            "03280912380a0c636f6e74656e745f7479706518032001280e32222e676f" .
            "6f676c652e636c6f75642e61737365742e76312e436f6e74656e74547970" .
            "65123b0a10726561645f74696d655f77696e646f7718042001280b32212e" .
            "676f6f676c652e636c6f75642e61737365742e76312e54696d6557696e64" .
            "6f7722550a1d4261746368476574417373657473486973746f7279526573" .
            "706f6e736512340a0661737365747318012003280b32242e676f6f676c65" .
            "2e636c6f75642e61737365742e76312e54656d706f72616c417373657422" .
            "5f0a0c4f7574707574436f6e66696712400a0f6763735f64657374696e61" .
            "74696f6e18012001280b32252e676f6f676c652e636c6f75642e61737365" .
            "742e76312e47637344657374696e6174696f6e4800420d0a0b6465737469" .
            "6e6174696f6e222d0a0e47637344657374696e6174696f6e120d0a037572" .
            "691801200128094800420c0a0a6f626a6563745f7572692a490a0b436f6e" .
            "74656e7454797065121c0a18434f4e54454e545f545950455f554e535045" .
            "4349464945441000120c0a085245534f555243451001120e0a0a49414d5f" .
            "504f4c494359100232c9020a0c4173736574536572766963651283010a0c" .
            "4578706f7274417373657473122a2e676f6f676c652e636c6f75642e6173" .
            "7365742e76312e4578706f7274417373657473526571756573741a1d2e67" .
            "6f6f676c652e6c6f6e6772756e6e696e672e4f7065726174696f6e222882" .
            "d3e4930222221d2f76312f7b706172656e743d2a2f2a7d3a6578706f7274" .
            "4173736574733a012a12b2010a1542617463684765744173736574734869" .
            "73746f727912332e676f6f676c652e636c6f75642e61737365742e76312e" .
            "4261746368476574417373657473486973746f7279526571756573741a34" .
            "2e676f6f676c652e636c6f75642e61737365742e76312e42617463684765" .
            "74417373657473486973746f7279526573706f6e7365222e82d3e4930228" .
            "12262f76312f7b706172656e743d2a2f2a7d3a6261746368476574417373" .
            "657473486973746f7279429c010a19636f6d2e676f6f676c652e636c6f75" .
            "642e61737365742e7631421141737365745365727669636550726f746f50" .
            "015a3a676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f" .
            "676f6f676c65617069732f636c6f75642f61737365742f76313b61737365" .
            "74aa0215476f6f676c652e436c6f75642e41737365742e5631ca0215476f" .
            "6f676c655c436c6f75645c41737365745c5631620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
