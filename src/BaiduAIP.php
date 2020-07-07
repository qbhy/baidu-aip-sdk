<?php
/**
 * User: qbhy
 * Date: 2019-01-15
 * Time: 19:11
 */

namespace Qbhy\BaiduAIP;

use Hanson\Foundation\Foundation;
use Qbhy\BaiduAIP\Exceptions\UndefinedApplicationConfigurationException;

/**
 * Class BaiduAI
 *
 * @property ImageCensor   $image_censor   图像审核、内容审核
 * @property ImageClassify $image_classify 图像识别
 * @property ImageSearch   $image_search   图像搜索
 * @property ImageProcess  $image_process  图像效果增强
 * @property BodyAnalysis  $body_analysis  人体分析
 * @property Speech        $speech         百度语音
 * @property Face          $face           人脸识别
 * @property Ocr           $ocr            文字识别
 * @property Nlp           $nlp            自然语言处理
 * @property Kg            $kg
 * @property AccessToken   $access_token
 *
 * @author  qbhy <96qbhy@gmail.com>
 *
 * @package Qbhy\BaiduAI
 */
class BaiduAIP extends Foundation
{
    protected $providers = [
        ServiceProvider::class,
    ];

    /**
     * 获取指定应用配置
     *
     * @param string $name
     *
     * @return array
     * @throws UndefinedApplicationConfigurationException
     */
    public function getAppConfig($name = null)
    {
        $name = $name ?: $this->getConfig('use') ?: 'default';

        $applications = $this->getConfig('applications');
        if (isset($applications[$name])) {
            return $applications[$name];
        }
        throw new UndefinedApplicationConfigurationException("undefined applications: {$name}");
    }

    /**
     * 使用指定app配置
     *
     * @param string $name
     *
     * @return $this
     */
    public function use(string $name)
    {
        $config        = $this->getConfig();
        $config['use'] = $name;
        $this->setConfig($config);

        return $this;
    }

    /**
     * 获取 app id
     *
     * @return string
     * @throws UndefinedApplicationConfigurationException
     */
    public function getAppId()
    {
        return $this->getAppConfig()['app_id'];
    }

    /**
     * 获取 api key
     *
     * @return string
     * @throws UndefinedApplicationConfigurationException
     */
    public function getApiKey()
    {
        return $this->getAppConfig()['api_key'];
    }

    /**
     * 获取 secret key
     *
     * @return string
     * @throws UndefinedApplicationConfigurationException
     */
    public function getSecretKey()
    {
        return $this->getAppConfig()['secret_key'];
    }
}