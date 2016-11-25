<?php
    use yii\bootstrap\ActiveForm;
    use yii\helpers\Html;
    use yii\bootstrap\Alert;
    use yii\filters\PageCache;
?>
<link rel="stylesheet" href="/mobile/css/contact_us.css">

<!--主体部分-------------------------------------------------------------->
<section class="section"></section>
<section class="section1 clearfix container">
    <div class="company_contact_info">
        <p><span>Company Name：</span><?php echo $company['companyname']?></p>
        <p><span>Email：</span><a href="mailto:<?php echo $company['companyemail']?>"><?php echo $company['companyemail']?></a></p>
        <p><span>TEL：</span><a href="tel:<?php echo $company['companytel']?>"><?php echo $company['companytel']?></a></p>
        <p><span>Fax：</span><?php echo $company['companyfax']?></p>
        <p><span>Mobile：</span><a href="tel:<?php echo $company['companymobile']?>"><?php echo $company['companymobile']?></a></p>
        <p><span>Website：</span><a href="<?php echo $company['website']?>"><?php echo $company['website']?></a></p>
        <p><span>Address:  </span><?php echo $company['companyaddress']?></p>
        <p><span>Manufacture Address：</span><?php echo $company['manufactureaddress']?></p>
    </div>
</section>
<section class="section2 clearfix ">
    <img src="/<?php echo $company['cover']?>" alt="">
</section>
<section class="section3 clearfix container">
 <?php 
if( Yii::$app->getSession()->hasFlash('success') ) {
    echo Html::script('alert("Submitted successfully!");', ['defer' => true]);
}
if( Yii::$app->getSession()->hasFlash('error') ) {
echo Html::script('alert("Submit fails, check the mailbox format and whether Missing!");', ['defer' => true]);
 }
?>
    <div class="leave_message">
        <h1>Leaving  Message</h1>
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
            <p>Name</p><input name="Message[name]" type="text" value="<?= Html::encode($model->name) ?>">
            <p>Email</p><input name="Message[email]"  type="text" value="<?= Html::encode($model->email) ?>">
            <p>TEL</p><input name="Message[phone]"  type="text" value="<?= Html::encode($model->phone) ?>">
            <p>Message</p><textarea name="Message[detail]" type="text" ><?= Html::encode($model->detail) ?></textarea>
            <input  class="contact_us_submit" type="submit" value="Submit">
        <?php ActiveForm::end();?>
    </div>
</section>




