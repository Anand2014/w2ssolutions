
<script type="text/javascript" src="_layout/js/jquery-1.9.1.js">
</script>

<script type="text/javascript" src="_layout/js/jquery.validate.min.js">
</script>

<script type="text/javascript">$(document).ready(function(){jQuery.validator.addMethod("accept",function(value,element,param){return value.match(new RegExp("."+param+"$"))});$("#registration-form").validate({debug:true,rules:{name:{accept:"[a-zA-Z0-9 ]+",required:true},email:{required:true,email:true},country:{required:true},contactno:{required:true},query:{required:true}},errorElement:"div",messages:{name:{required:"Required field.",accept:"Navnet m&aring; angis bare alfanumeriske tegn"},email:{required:"Required field."},country:{required:"Required field."},contactno:{required:"Required field."},query:{required:"Required field."}},submitHandler:function(form){var url="mail.php";$.ajax({type:"POST",url:url,data:$("#registration-form").serialize(),success:function(data){
document.getElementById('alert1').style.display = 'block';}})}})});

</script>

<div class="quickFormBar" style="padding:20px 0;">

<div class="row">
<h1>Start your App discussion today !</h1>

<form action="test.html"  id="registration-form"  name="registration-form">
<div class="formBar1">
<span class="quickFormIcon-1"><input type="text" value="" name="name" placeholder="Enter Your name"/></span>
<span class="quickFormIcon-2"><input type="text" value="" name="email" placeholder="Enter Your email address" /></span>
<span class="quickFormIcon-3"><input type="text" value="" name="country" placeholder="Enter Your Country" /></span>
<span class="clr"></span>
<span class="quickFormIcon-4"><input type="text" value="" name="contactno" placeholder="Enter Your contact number"  /></span>
<span class="quickFormIcon-5"><input type="text" value="" name="query" placeholder="Write Your queries" /></span>
<span class="clr"></span>
</div>
<div class="formBar2">
<span class="quickFormBtn"><input type="submit" value="Submit" class="btn-orange" /></span>
</div>
</div>
</form>
<span id="alert1" style="float: right; color: red; display: none;">Thanks! We'll get back to you soon.
</span>
</div>
<style>
.formBar1 :first-child, .formBar1 :last-child, .formBar2 :first-child, .formBar2 :last-child{ margin:0;}
.quickFormBar .span2, .quickFormBar .span3, .quickFormBar .span4, .quickFormBar .span7{ margin-left:5px;}
.quickFormIcon-1 div,.quickFormIcon-2 div,.quickFormIcon-3 div,.quickFormIcon-4 div,.quickFormIcon-5 div{display:block;color:red;margin-top:-10px;background-color:#fff;padding-left:-5px;margin-left:0;font-size:12px}div.alert{border:0;width:auto;font-family:Arial,"Helvetica Neue","Helvetica",Tahoma,Verdana,sans-serif;display:block;position:relative;font-size:14px;padding:12px 38px 14px 18px}.alert a.close:hover{color:#fff !important}.alert.bordered{border-width:1px;border-style:solid}.alert.rounded{-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px}.alert.message a.close:hover{background:#b2b3b5}.alert.message a.close{color:#8e8e90}.alert.success a.close:hover{background:#538c18}.alert.success a.close{color:#467812}.alert.error a.close:hover{background:#bb181a}.alert.error a.close{color:#980608}.alert.info a.close:hover{background:#427AB4}.alert.info a.close{color:#32608f}.alert.warning a.close:hover{background:#d8d8a8}.alert.warning a.close{color:#cfd0a4}.alert.question a.close:hover{background:#8a64b5}.alert.question a.close{color:#784da6}.alert.message{background:#c6c7c9;border-color:#8e8e90;text-shadow:0 1px 0 rgba(255,255,255,0.68)}.alert.success{background:#5c9c1b;border-color:#467812;text-shadow:0 -1px 0 rgba(0,0,0,0.42);color:#fff}.alert.error{background:#d01b1d;border-color:#980608;text-shadow:0 -1px 0 rgba(0,0,0,0.42);color:#fff}.alert.info{border-color:#32608f;background:#4988c8;text-shadow:0 -1px 0 rgba(0,0,0,0.42);color:#fff}.alert.warning{border-color:#cfd0a4;background:#f0f1bb;text-shadow:0 1px 0 rgba(255,255,255,0.68)}.alert.question{border-color:#784da6;background:#9a6fc9;text-shadow:0 -1px 0 rgba(0,0,0,0.42);color:#fff}.alert a.close{position:absolute;top:10px;right:12px;float:right;padding:0 5px 4px;line-height:17px;margin-left:17px;text-shadow:none;-moz-border-radius:15px;-webkit-border-radius:15px;border-radius:15px;font-family:Tahoma;color:#fff;font-size:16px;font-weight:bold;text-decoration:none}.alert.style-1.message{}.alert.style-1.success{background:#5c9c1b}.alert.style-1.error{background:#d01b1d}.alert.style-1.info{background:#4988c8}.alert.style-1.warning{background:#f0f1bb}.alert.style-1.question{background:#9a6fc9}
</style>

</div>