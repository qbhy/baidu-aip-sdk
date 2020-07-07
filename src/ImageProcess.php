<?php
/**
 * shaogaojie@gmail.com
 * 2020-07-07 11:36:04
 * 图像效果增强服务
 */

namespace Qbhy\BaiduAIP;


class ImageProcess extends Api
{
    /**
     * 图像无损放大 image_quality_enhance api url
     * @var string
     */
    const imageQualityEnhanceUrl = 'https://aip.baidubce.com/rest/2.0/image-process/v1/image_quality_enhance';

    /**
     * 图像去雾 dehaze api url
     * @var string
     */
    const dehazeUrl = 'https://aip.baidubce.com/rest/2.0/image-process/v1/dehaze';

    /**
     * 图像对比度增强 contrast_enhance api url
     * @var string
     */
    const contrastEnhanceUrl = 'https://aip.baidubce.com/rest/2.0/image-process/v1/contrast_enhance';

    /**
     * 黑白图像上色 colourize api url
     * @var string
     */
    const colourizeUrl = 'https://aip.baidubce.com/rest/2.0/image-process/v1/colourize';

    /**
     * 拉伸图像恢复 stretch_restore api url
     * @var string
     */
    const tretchRestoreUrl = 'https://aip.baidubce.com/rest/2.0/image-process/v1/stretch_restore';

    /**
     * 人像动漫化 selfie_anime api url
     * @var string
     */
    const selfieAnimeUrl = 'https://aip.baidubce.com/rest/2.0/image-process/v1/selfie_anime';

    /**
     * 天空分割 sky seg api url
     */
    const skySegUrl = 'https://aip.baidubce.com/rest/2.0/image-process/v1/sky_seg';

    /**
     * 图像色彩增强 color enhance api url
     */
    const colorEnhanceUrl = 'https://aip.baidubce.com/rest/2.0/image-process/v1/color_enhance';

    /**
     * 图像清晰度增强 image definition enhance api url
     */
    const imageDefinitionEnhanceUrl = 'https://aip.baidubce.com/rest/2.0/image-process/v1/image_definition_enhance';

    /**
     * 图像修复 api url
     */
    const inpaintingUrl = 'https://aip.baidubce.com/rest/2.0/image-process/v1/inpainting';

    /**
     * 图像风格转换 api url
     */
    const styleTransUrl = 'https://aip.baidubce.com/rest/2.0/image-process/v1/style_trans';


    /**
     * 图像无损放大接口
     *
     * @param string $image - 图像数据，base64编码，要求base64编码后大小不超过4M，最短边至少15px，最长边最大4096px,支持jpg/png/bmp格式
     * @param array $options - 可选参数对象，key: value都为string类型
     * @description options列表:
     * @return array
     */
    public function imageQualityEnhance($image, $options = array())
    {

        $data = array();

        $data['image'] = base64_encode($image);

        $data = array_merge($data, $options);

        return $this->post(ImageProcess::imageQualityEnhanceUrl, $data);
    }

    /**
     * 图像去雾接口
     *
     * @param string $image - 图像数据，base64编码，要求base64编码后大小不超过4M，最短边至少15px，最长边最大4096px,支持jpg/png/bmp格式
     * @param array $options - 可选参数对象，key: value都为string类型
     * @description options列表:
     * @return array
     */
    public function dehaze($image, $options = array())
    {

        $data = array();

        $data['image'] = base64_encode($image);

        $data = array_merge($data, $options);

        return $this->post(ImageProcess::dehazeUrl, $data);
    }

    /**
     * 图像对比度增强接口
     *
     * @param string $image - 图像数据，base64编码，要求base64编码后大小不超过4M，最短边至少15px，最长边最大4096px,支持jpg/png/bmp格式
     * @param array $options - 可选参数对象，key: value都为string类型
     * @description options列表:
     * @return array
     */
    public function contrastEnhance($image, $options = array())
    {

        $data = array();

        $data['image'] = base64_encode($image);

        $data = array_merge($data, $options);

        return $this->post(ImageProcess::contrastEnhanceUrl, $data);
    }

    /**
     * 黑白图像上色接口
     *
     * @param string $image - 图像数据，base64编码，要求base64编码后大小不超过4M，最短边至少15px，最长边最大4096px,支持jpg/png/bmp格式
     * @param array $options - 可选参数对象，key: value都为string类型
     * @description options列表:
     * @return array
     */
    public function colourize($image, $options = array())
    {

        $data = array();

        $data['image'] = base64_encode($image);

        $data = array_merge($data, $options);

        return $this->post(ImageProcess::colourizeUrl, $data);
    }

    /**
     * 拉伸图像恢复接口
     *
     * @param string $image - 图像数据，base64编码，要求base64编码后大小不超过4M，最短边至少15px，最长边最大4096px,支持jpg/png/bmp格式
     * @param array $options - 可选参数对象，key: value都为string类型
     * @description options列表:
     * @return array
     */
    public function stretchRestore($image, $options = array())
    {

        $data = array();

        $data['image'] = base64_encode($image);

        $data = array_merge($data, $options);

        return $this->post(ImageProcess::stretchRestoreUrl, $data);
    }

    /**
     * 人像动漫化接口
     *
     * @param string $image - 需要处理的图片base64编码后大小不超过4M，最短边至少64px，最长边最大4096px，长宽比3：1以内。注意：图片的base64编码是不包含图片头的，如（data:image/jpg;base64,）
     * @param array $options - 可选参数对象，key: value都为string类型
     * @description options列表:
     * type : anime或者anime_mask。前者生成二次元动漫图，后者生成戴口罩的二次元动漫人像
     * mask_id : 在type参数填入anime_mask时生效，1～8之间的整数，用于指定所使用的口罩的编码。type参数没有填入anime_mask，或mask_id 为空时，生成不戴口罩的二次元动漫图。
     * @return array
     */
    public function selfieAnime($image, $options = array())
    {

        $data = array();

        $data['image'] = base64_encode($image);

        $data = array_merge($data, $options);

        return $this->post(ImageProcess::selfieAnimeUrl, $data);
    }

    /**
     * 天空分割 接口
     *
     * @param $image - 图像数据，base64编码后进行urlencode，要求base64编码和urlencode后大小不超过4M，最短边至少64px，最长边最大2049 px，像素乘积不超过2049*2049，长宽比3：1以内，支持jpg/png/bmp格式 。注意：图片的base64编码是不包含图片头的，如（data:image/jpg;base64,）去掉编码头后再进行urlencode。
     * @param array $options
     * @return array
     */
    public function skySeg($image, $options = array())
    {

        $data = array();

        $data['image'] = base64_encode($image);

        $data = array_merge($data, $options);

        return $this->post(ImageProcess::skySegUrl, $data);
    }

    /**
     * @param $image - 图像数据，base64编码后进行urlencode，要求base64编码和urlencode后大小不超过4M，最短边至少64px，最长边最大2049 px，像素乘积不超过2000*2000，长宽比3：1以内。注意：图片的base64编码是不包含图片头的，如（data:image/jpg;base64,）
     * @param array $options
     * @return array
     */
    public function colorEnhance($image, $options = array())
    {

        $data = array();

        $data['image'] = base64_encode($image);

        $data = array_merge($data, $options);

        return $this->post(ImageProcess::colorEnhanceUrl, $data);
    }

    /**
     * @param $image - 需要处理的图片base64编码后大小不超过4M，最短边至少64px，最长边最大4096px，长宽比3：1以内，像素乘积不超过 1280*720。注意：图片的base64编码是不包含图片头的，如（data:image/jpg;base64,）
     * @param array $options
     * @return array
     */
    public function imageDefinitionEnhance($image, $options = array())
    {

        $data = array();

        $data['image'] = base64_encode($image);

        $data = array_merge($data, $options);

        return $this->post(ImageProcess::imageDefinitionEnhanceUrl, $data);
    }

    /**
     * @param $image - 被修复的图片base64编码后大小不超过4M：其中，使用上传mask图片方法进行图像修复时，原图和mask图最短边至少64px，最长边最大4096px，长宽比3:1以内（建议上传图片的尺寸接近512px * 512px ，修复效果最佳）；使用上传rectangle位置参数方法进行修复时，最短边至少100px，最长边最大2000px，长宽比3：1内。注意：图片的base64编码是不包含图片头的，如（data:image/jpg;base64,）
     * @param array $options - 可选参数对象，key: value都为string类型
     *
     * @description options列表:
     * inpainting_type 选择修复类型的参数，“mask“和” rectangle“二选一。如果选择”mask“，则rectangl参数无效；如果选择” rectangle“，则“mask“参数无效。
     * mask 要去除的位置不规则时，上传mask图片（base64编码）。输入的mask文件只能是png格式的黑白图片，缺损部位用0（黑色）表示，完好部分用255（白色）表示，不能有0、255之外的其他值。mask的大小和image大小必须一致。
     * rectangle 要去除的位置为规则矩形时，给出坐标信息，每个元素包含left, top, width, height，int 类型。
     * @return array
     */
    public function inpainting($image, $options = array())
    {

        $data = array();

        $data['image'] = base64_encode($image);

        $data = array_merge($data, $options);

        return $this->post(ImageProcess::inpaintingUrl, $data);
    }

    /**
     * @param $image - base64编码后大小不超过4M，像素乘积不超过2000*2000，最短边至少50px，最长边最大4096px，长宽比3:1以内。注意：图片的base64编码是不包含图片头的，如（data:image/jpg;base64,）
     * @param array $options - 可选参数
     * $options 可选值：
     * cartoon：卡通画风格
     * pencil：铅笔风格
     * color_pencil：彩色铅笔画风格
     * warm：彩色糖块油画风格
     * wave：神奈川冲浪里油画风格
     * lavender：薰衣草油画风格
     * mononoke：奇异油画风格
     * scream：呐喊油画风格
     * gothic：哥特油画风格
     * @return array
     */
    public function styleTrans($image, $options = array())
    {

        $data = array();

        $data['image'] = base64_encode($image);

        $data = array_merge($data, $options);

        return $this->post(ImageProcess::styleTransUrl, $data);
    }
}