<script>
    $(document).ready(function() {
        $('#submit-btn').click(function(){
        var data = {
            username : $.trim($('#username').val()),
            password : $.trim($('#password').val()),
        };
        
        debugger;
        callAjax("Router", "", "post", "login", data); 
        });
    });
</script>

<div class="col col-md-6">
    <h2>Вход</h2>
    <div>
        <label for="username">Потребителско име</label>
        <input id="username" type="text" name="username" />
    </div>
    <div>
        <label for="password">Парола</label>
        <input id="password" type="password"  name="password" />
    </div>
    <div> <button id="submit-btn">Вход</button> </div>
</div>