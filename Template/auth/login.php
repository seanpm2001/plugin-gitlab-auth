<ul class="no-bullet">
    <li>
        <i class="fa fa-gitlab fa-fw" aria-hidden="true"></i>
        <?= $this->url->link(t('Login with my Gitlab Account'), 'OAuthController', 'handler', array('plugin' => 'GitlabAuth')) ?>
    </li>
</ul>
