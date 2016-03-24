# Imaginaerum Extralib
Add custom lib into Magento

Included libs:

* Facebook SDK

Example usage:

```
$config = array(
            'app_id' => '{app-id}',
            'app_secret' => '{app-secret}',
            'default_graph_version' => 'v2.5',
);
$fb = Mage::getModel('imaginaerum_extralib/facebook')->getFacebook($config);

/* App access token */
$fb->setDefaultAccessToken($config['app_id'] . '|' . $config['app_secret']);

/* Request for example... */
$response = $fb->get('[YOUR REQUEST]');
```
