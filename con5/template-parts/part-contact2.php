<div class="container   py-5">
  <div class="row align-items-center g-lg-5 py-5">
    <div class="col-lg-7 text-center text-lg-start">
      <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3"><?=$args->title?></h1>
      <p class="col-lg-10 fs-4"><?=$args->text?></p>
	  
    </div>
    <div class="col-md-10 mx-auto col-lg-5">
      <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating mb-3">
          <textarea class="form-control" id="floatingPassword">
          </textarea><label for="floatingPassword">Сообщение</label>
        </div>
       
        <button class="w-100 btn btn-lg btn-primary" type="submit">Отправить</button>
        <hr class="my-4"> <small class="text-body-secondary">Нажимая "отправить" Вы соглашаетесь с политикой конфиденциальнойсти и обработки данных.</small> </form>
    </div>
  </div>
</div>

