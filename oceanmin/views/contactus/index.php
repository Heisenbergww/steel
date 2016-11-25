<?php
    use yii\bootstrap\ActiveForm;
    use yii\helpers\Html;
    use yii\bootstrap\Alert;
    use yii\filters\PageCache;
?>

<?php if($this->beginCache('cache_contactus')){?>
<link rel="stylesheet" href="/css/contact_us.css">

<section class="section1 contact_us_pic">
    <img src="/<?php echo $front['contact_img']?>" alt="">
</section>
<?php $this->endCache();}?>
<section class="section2 container_contact_us_map clearfix">
    <div class="row clearfix contact_us_map">
        <div class="col-lg-6">
            <p><span>Company Name：</span><?php echo $company['companyname']?></p>
            <p><span>Email：</span><a href="mailto:<?php echo $company['companyemail']?>"><?php echo $company['companyemail']?></a></p>
            <p><span>TEL：</span><?php echo $company['companytel']?></p>
            <p><span>Fax：</span><?php echo $company['companyfax']?></p>
            <p><span>Mobile：</span><?php echo $company['companymobile']?></p>
            <p><span>Website：</span><a href="<?php echo $company['website']?>"><?php echo $company['website']?></a></p>
            <p><span>Address:  </span><?php echo $company['companyaddress']?></p>
            <p><span>Manufacture Address：</span><?php echo $company['manufactureaddress']?></p>
        </div>
        <div class="col-lg-6">
            <div class="map_pic">
                <img src="/<?php echo $company['cover']?>" alt="">
            </div>
        </div>
    </div>
</section>


<?php
    if( Yii::$app->getSession()->hasFlash('success') ) {
    echo Html::script('alert("Submitted successfully!");', ['defer' => true]);
    }
    if( Yii::$app->getSession()->hasFlash('error') ) {
    echo Html::script('alert("Submit fails, check the mailbox format and whether Missing!");', ['defer' => true]);
    }
?>
 <?php
$form = ActiveForm::begin([
    'fieldConfig' => [
        'template' => '<div class="span12 field-box">{label}{input}</div>{error}',
    ],
    'options' => [
        'class' => 'new_user_form inline-input',
        'enctype' => 'multipart/form-data'
    ],
]);?>
<section class="container-fluid clearfix section3 " >
    <div class="row contact_us_form">
        <div class="col-lg-12">
            <div class="contact_us_form_child">
                <h1>Leaving  Message</h1>
                <p>Please do not hesitate to let me know if you have any question or concern.</p>
                <hr>
                <textarea name="Message[detail]" type="text" placeholder="Messages" class="message_s"></textarea>
                <input name="Message[name]" type="text" value="<?= Html::encode($model->name) ?>" placeholder="Name">
                <input name="Message[email]"  type="text" value="<?= Html::encode($model->email) ?>" placeholder="Email">
                <input name="Message[phone]"  type="text" value="<?= Html::encode($model->phone) ?>" placeholder="Phone Number">
            </div>
            <input  class="contact_us_submit" type="submit" value="Submit">             
        </div>
    </div>
</section>
 <?php ActiveForm::end();?>

<!--转化代码-->





