<?php 
    include_once 'header.php';
?>

    <section>
        <h1>Log in</h1>
        <form id="login">
            <label>User name: 
                <input type="text" name="username" placeholder="username">
            </label>
            
            <label>Password: 
                <input type="password" name="password" placeholder="password">
            </label>
                 
             <button type="submit" value="Log in">Log in</button>
            
            <input type="checkbox">Remember me
        </form>
    </section>

<?php 
    include_once 'footer.php';
?>