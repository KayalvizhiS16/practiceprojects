<html>
    <head><title>send  post data</title></head> 
<body>
    <h1>send user information</h1>
    <form method="POST" action="<?=url('get-userdata')?>">
        <label>Name:<input type="text" name="name"></label><br>
        <label>age:<input type="text" name="age"></label><br>
        <label>phone:<input type="text" name="phone"></label><br>
        <input type="hidden" name="_token" value="<?=csrf_token()?>">
        <input type="submit" value="submit">
</form>
    </body>
</html>