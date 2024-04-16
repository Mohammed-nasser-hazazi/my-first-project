<?php 

include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>

<?php include_once './parts/header.php';  ?>

<img src="images/logo.png" alt="">
<div class="p-4 p-md-5 mb-4 text-white">
    <div class="col-md-6 px-0">
      
     <h1 class="display-4 fst-italic">سحوبات جوائز </h1>
      <p class="lead my-3">سارع في التسجيل قبل انتهاء الوقت :</p>
      <p class="lead mb-0"><a href="#" class="text-white fw-bold"></a></p>
  
      <h3 id="countdown"></h3>

 <div class="container">
  <h3 class="moee">للدخول في السحب قم بالتسجيل بالموقع:</h3>
 <li class="list-group-item">يجب متابعتي في الانستقرام للدخول بالسحب</li>
    <li class="list-group-item">سأقوم ببث مباشر لمدة ساعه لسحب على الفائزين </li>

 <ul class="list-group list-group-flush">
   
</ul>

</div>
  </div>

 </div>
  </div>
  
 
<div class="container">

<div class="position-relative text-right ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">

<form action="<?php $_SERVER['PHP_SELF']  ?>" method="post">

    <h3>الرجاء أدخل معلوماتك</h3>

  <div class="mb-3">
    <label for="firstname" class="form-label">الأسم الأول</label>
    <input type="text"  name="firstname" class="form-control" id="firstname" value="<?php echo $firstname ?>" >
    <div class="form-text error" ><?php echo $errors['firstNameError'] ?> </div>
  </div>

  <div class="mb-3">
    <label for="lastname" class="form-label"> الأسم الأخير</label>
    <input type="text" name="lastname" class="form-control" id="lastname" value="<?php echo $lastname ?>" >
    <div class="form-text error" ><?php echo $errors['lastNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label"> البريد الأكتروني</label>
    <input type="text" name="email" class="form-control" id="email" value="<?php echo $email ?>">
    <div class="form-text error" ><?php echo $errors['emailError'] ?></div>
  </div>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" require>
    <label class="form-check-label" for="exampleCheck1">بالضغط على هذا الخيار فأنت توافق على تسجيل معلوماتك 
    </label>
  </div>

  <button type="submit" name="submit"  class="btn btn-primary">ارسال المعلومات</button>
</form>
 </div>
  </div>

<div class="loader-con">
  <div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>

<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
  <button type="button"  id="winner"  class="btn btn-primary" >
  اختيار الرابح 
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      <?php foreach($users as $user) : ?>
        <h5 class="modal-title" id="modalLabel">الرابح في المسابقة</h5>
        <?php endforeach; ?>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <h1 class="display-1 text-center modal-title" id="modalLabel">  <?php echo htmlspecialchars( $user['firstName']) . '  '. htmlspecialchars( $user['lastName']); ?> </h1>
     
      </div> 

    </div>
  </div>
</div>

  <!--
  <?php echo htmlspecialchars( $user['email']) ?>
      -->
<?php include_once './parts/footer.php';  ?>