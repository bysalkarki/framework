<?php
?>
<form action="" method="post">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">name</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>   <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">password confirmation</label>
        <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Body</label>
        <textarea class="form-control" name="body"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>