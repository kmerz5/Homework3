<!doctype html>
<html lang="en">
  <Head>
    <meta charset-"utf-8">
    <meta name="viewport" content=width=device-width, initial-scale=1">
   <h1> Add Customer</h1>
<form method="post" action="customer-add-save.php>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="text" class="form-control" id="CustomerFirstName" aria-describedby="nameHelp">
    <div id="nameHelp" class="form-text">Enter the customers name</button>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
