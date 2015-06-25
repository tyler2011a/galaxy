<?php
/**
 * the layouts for member module
 * @var yii\web\View $this
 **/
use yii\helpers\Url;
use kartik\sidenav\SideNav;

$this->beginContent('@theme/star/core/layouts/main.php');
?>
        <div class="col-sm-12">
            <div class="row">
                <div class="col-md-2 col-sm-4">
                    <?php
                    $type = 'http';
                    $heading = Yii::t('account','Account');
                    $item = 'home';

                    echo SideNav::widget([
                        'type' => $type,
                        'encodeLabels' => false,
                        'heading' => $heading,
                        'items' => [
                            ['label' => Yii::t('catalog','Withdrawal'), 'icon' => 'book', 'url' => Url::to(['/account/core/account/withdrawal-index', $type]), 'active' => ($item == 'withdrawal-index')],
                            ['label' => Yii::t('catalog','Recharge'), 'icon' => 'tags', 'url' => Url::to(['/account/core/recharge/index', $type]), 'active' => ($item == 'recharge')],
                        ],
                    ]);
                    ?>
                </div>
                <div class="col-md-10 col-sm-8">
                    <?php echo $content ?>
                </div>
            </div>
        </div>

<?php $this->endContent(); ?>